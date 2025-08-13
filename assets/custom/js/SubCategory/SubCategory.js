var base_url = $("#base_url").val();
var file_url = $("#file_url").val();
var GlobId = "";

function clrmsg() {
  $("#role_name-error").html("");
  $("#edit_role_name-error").html("");
  $("#addmsg").html("");
  $("#editmsg").html("");
}

function addSubCategory() {
  clrmsg();
  var categoryId = $("#categoryId").val();
  var categoryName = $("#categoryId  option:selected").text();
  var subCategoryName = $("#subCategoryName").val();
  var subCategoryDescription = $("#subCategoryDescription").val();
  var subCategoryImage = $("#subCategoryImage").prop("files")[0];

  if (categoryId == 0) {
    $("#categoryId-error").html("Required");
    $("#categoryId").focus();
    return false;
  }

  if (subCategoryName == 0) {
    $("#subCategoryName-error").html("Required");
    $("#subCategoryName").focus();
    return false;
  }

  var form_data = new FormData();
  form_data.append("categoryId", categoryId);
  form_data.append("subCategoryName", subCategoryName);
  form_data.append("subCategoryDescription", subCategoryDescription);
  form_data.append("subCategoryImage", subCategoryImage);

  $.ajax({
    type: "POST",
    url: base_url + "SubCategory/addSubCategory",
    data: form_data,
    contentType: false,
    processData: false,
    type: "POST",
    success: function (response) {
      //console.log(response); return;
      var res = JSON.parse(response);
      if (res.stat == 200) {
        $("#addmsg").html(res.msg);

        var table = $("#data-table").DataTable();

        var ActionData =
          '<div class="btn-group mb-2 dropright"><button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button><div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="javascript:void(0);" onclick="editSubCategory(' +
          res.insert_id +
          ');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a><a class="dropdown-item" href="javascript:void(0);" id="rowId_' +
          res.insert_id +
          '" onclick="deleteSubCategory(<' +
          res.insert_id +
          ');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a></div></div>';
        var image = "No image Added";
        if (res.img !== "Blank") {
          image =
            '<img src="' +
            file_url +
            "/subCategoryImage/" +
            res.img +
            '" style="width:100px; height:100px;">';
        }

        var rowNode = table.row
          .add([
            res.insert_id,
            categoryName,
            subCategoryName,
            subCategoryDescription,
            image,
            ActionData,
          ])
          .draw()
          .node();

        $(rowNode)
          .css({
            color: "white",
            "font-weight": "700",
          })
          .animate({ color: "black" });

        $("#subCategoryName").val("");
        $("#subCategoryDescription").val("");
        $("#subCategoryName").val("");
      } else {
        //                    alert(res.msg);
        $("#addmsg").html(res.msg);
      }
    },
    error: function (response) {
      console.log(response);
    },
  });
}

function deleteSubCategory(subCategoryId) {
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    buttonsStyling: false,
    confirmButtonClass: "btn btn-danger",
    confirmButtonText: "Yes, delete it!",
    cancelButtonClass: "btn btn-light",
    background: "rgba(0, 0, 0, 0.96)",
  }).then(function () {
    $.ajax({
      type: "POST",
      url: base_url + "SubCategory/deleteSubCategory",
      data: { subCategoryId: subCategoryId },
      success: function (response) {
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "success",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-light",
          background: "rgba(0, 0, 0, 0.96)",
        });

        var table = $("#data-table").DataTable();
        table
          .row($("#rowId_" + subCategoryId).parents("tr"))
          .remove()
          .draw();
      },
      error: function (response) {
        alert("error" + response);
      },
    }); // submitting the form when user press yes
  });
}

function editSubCategory(subCategoryId) {
  $.ajax({
    type: "POST",
    url: base_url + "SubCategory/SingleCategory",
    //dataType: "json",
    data: {
      subCategoryId: subCategoryId,
    },
    success: function (response) {
      console.log(response);
      var res = JSON.parse(response);
      if (res.stat == 200) {
        var content = "";
        GlobId = res.all_list[0].sub_category_id;
        $("#editSubcategoryName").val(res.all_list[0].sub_category_name);
        $("#editSubcategoryDescription").val(
          res.all_list[0].sub_category_description
        );
        $("#editCategoryId").val(res.all_list[0].category_id);

        content +=
          '<img src="' +
          file_url +
          "/subCategoryImage/" +
          res.all_list[0].sub_category_image +
          '" style="width:100px; height:100px"><input type="hidden" value="' +
          res.all_list[0].sub_category_image +
          '" id="previousimage">';

        $(".image_content").html(content);
        $("#edit_modal").modal("show");
      }
    },
    error: function (response) {
      console.log(response);
    },
  });
}

function updateSubCategory() {
  clrmsg();
  var editSubcategoryName = $("#editSubcategoryName").val();
  var editCategoryId = $("#editCategoryId").val();
  var categoryName = $("#editCategoryId  option:selected").text();
  var previousimage = $("#previousimage").val();
  var editSubcategoryDescription = $("#editSubcategoryDescription").val();
  var editSubcategoryImage = $("#editSubcategoryImage").prop("files")[0];

  if (editSubcategoryName.trim().length == 0) {
    $("#editSubcategoryName-error").html("Required");
    $("#editSubcategoryName").focus();
    return false;
  }

  if (editSubcategoryDescription.trim().length == 0) {
    $("#editSubcategoryDescription-error").html("Required");
    $("#editSubcategoryDescription").focus();
    return false;
  }

  var form_data = new FormData();
  form_data.append("editSubcategoryName", editSubcategoryName);
  form_data.append("editCategoryId", editCategoryId);
  form_data.append("previousimage", previousimage);
  form_data.append("editSubcategoryDescription", editSubcategoryDescription);
  form_data.append("editSubcategoryImage", editSubcategoryImage);
  form_data.append("GlobId", GlobId);

  $.ajax({
    type: "POST",
    url: base_url + "SubCategory/editSubCategory",
    data: form_data,
    contentType: false,
    processData: false,
    type: "POST",
    success: function (response) {
      //                console.log(response); return;
      var res = JSON.parse(response);
      if (res.stat == 200) {
        $("#editmsg").html(res.msg);

        var table = $("#data-table").DataTable();

        var temp = table.row($("#rowId_" + GlobId).parents("tr")).data();

        var image = "No image Added";
        if (res.img !== "Blank") {
          image =
            '<img src="' +
            file_url +
            "//subCategoryImage/" +
            res.img +
            '" style="width:100px; height:100px">';
        }

        temp[1] = categoryName;
        temp[2] = editSubcategoryName;
        temp[3] = editSubcategoryDescription;
        temp[4] = image;
        table
          .row($("#rowId_" + GlobId).parents("tr"))
          .data(temp)
          .draw();
      } else {
        //alert(res.msg);
        $("#editmsg").html(res.msg);
      }
    },
    error: function (response) {
      console.log(response);
    },
  });
}
