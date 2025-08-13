var base_url = $("#base_url").val();
var file_url = $("#file_url").val();

var glob_id = 0;
var glob_image = 0;

function delete_food(id, image) {
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
      url: base_url + "Food/delete_food",
      data: { food_id: id, food_image: image },
      success: function (response) {
        console.log(response);
        var res = JSON.parse(response);
        if (res.stat == 200) {
          var table = $("#data-table").DataTable();
          table
            .row($("#del_" + id).parents("tr"))
            .remove()
            .draw();
          swal({
            title: "Deleted!",
            text: "Your file has been deleted.",
            type: "success",
            buttonsStyling: false,
            confirmButtonClass: "btn btn-sm btn-light",
            background: "rgba(0, 0, 0, 0.96)",
          });
        } else {
          swal({
            title: "Cancelled",
            text: "Something went wrong. Reload & try again.",
            type: "error",
            buttonsStyling: false,
            confirmButtonClass: "btn btn-sm btn-light",
            background: "rgba(0, 0, 0, 0.96)",
          });
        }
      },
      error: function (response) {
        console.log("error" + JSON.stringify(response));
      },
    });
  });
}

var globalValueUpdate = [];
function get_drink(id, type) {
  if (type == "view") {
    $("#message-info").html("View");
    $("#edit-box").hide();
  }
  if (type == "edit") {
    $("#message-info").html("Edit");
    $("#edit-box").show();
  }

  $.ajax({
    type: "POST",
    url: base_url + "Drinks/get_drink",
    data: { food_id: id },
    success: function (response) {
      var res = JSON.parse(response);
      console.log(res);
      if (res.stat == 200) {
        glob_id = id;
        glob_image = res.all_list[0].food_image;

        getSubCategoryEditView(
          res.all_list[0].category_id,
          res.all_list[0].sub_category_id
        );
        var edit_img =
          '<img src="' +
          file_url +
          "FoodImage/" +
          res.all_list[0].food_image +
          '" width="100" height="100">';

        $("#pre_food_image_edit").html(edit_img);
        $("#edit_food_category").val(res.all_list[0].category_id);
        $("#edit_size_id").val(res.all_list[0].size_id);
        $("#edit_type_id").val(res.all_list[0].type_id);
        $("#food_name_edit").val(res.all_list[0].food_name);
        $("#food_description_edit").val(res.all_list[0].food_description);
        $("#food_price_edit").val(res.all_list[0].selling_price);
        $("#edit_food_item_code").val(res.all_list[0].food_item_code);
        $("#food_id").val(id);
        $("#previous_image").val(glob_image);
        globalValueUpdate = res.all_list.size_price_array;
        for (var k = 0; k < res.all_list.size_price_array.length; k++) {
          add_drinks_multiple("update");
        }
      }
      $("#edit_modal").modal("show");
    },
    error: function (response) {
      console.log("error : " + JSON.stringify(response));
    },
  });
}

function clrmsg() {}

function add_food() {
  clrmsg();
  var array_attribute = $("#array_attribute").val();
  var food_name = $("#food_name").val();
  var food_description = $("#food_description").val();
  var food_category = $("#food_category").val();
  var foodSubCategory = $("#foodSubCategory").val();
  var food_image_check = $("#food_image").val();
  var food_image = $("#food_image").prop("files")[0];
  var food_price = $("#food_price").val();
  var food_item_code = $("#food_item_code").val();
  var size_id = $("#size_id").val();
  var type_id = $("#type_id").val();

  if (food_category == null) {
    $("#food_category-error").html("Please Select  Category");
    setTimeout(function () {
      $("#food_category-error").html("");
    }, 3000);
    return false;
  }

  if (foodSubCategory == 0) {
    $("#foodSubCategory-error").html("Please Select Sub  Category");
    setTimeout(function () {
      $("#foodSubCategory-error").html("");
    }, 3000);
    return false;
  }

  if (food_name == "") {
    $("#food_name-error").html("Please give your Item Name");
    setTimeout(function () {
      $("#food_name-error").html("");
    }, 3000);
    return false;
  }

  if (food_description == "") {
    $("#food_description-error").html("Please give your Item Description");
    setTimeout(function () {
      $("#food_description-error").html("");
    }, 3000);
    return false;
  }

  //   if (food_image_check == "") {
  //     $("#food_image-error").html("Please give your Item Image");
  //     setTimeout(function () {
  //       $("#food_image-error").html("");
  //     }, 3000);
  //     return false;
  //   }
  if (food_price == "") {
    $("#food_price-error").html("Please give  Price");
    setTimeout(function () {
      $("#food_price-error").html("");
    }, 3000);
    return false;
  }
  if (food_item_code == "") {
    $("#food_item_code-error").html("Please give Item Code");
    setTimeout(function () {
      $("#food_item_code-error").html("");
    }, 3000);
    return false;
  }
  /* 999949 9123366823*/
  var form_data = new FormData();
  form_data.append("food_name", food_name);
  form_data.append("food_category", food_category);
  form_data.append("foodSubCategory", foodSubCategory);
  form_data.append("food_price", food_price);
  form_data.append("food_image", food_image);
  form_data.append("food_description", food_description);
  form_data.append("food_price", food_price);
  form_data.append("food_item_code", food_item_code);
  form_data.append("size_id", size_id);
  form_data.append("type_id", type_id);

  $.ajax({
    type: "POST",
    url: base_url + "Food/add_food",
    data: form_data,
    contentType: false,
    processData: false,
    success: function (res) {
      res = JSON.parse(res);
      console.log(res);
      if (res.stat == 200) {
        var categoryName = $("#food_category  option:selected").text();
        var foodSubCategoryName = $("#foodSubCategory  option:selected").text();
        var foodTypeName = $("#foodSubCategory  option:selected").text();
        var foodSizeName = $("#foodSubCategory  option:selected").text();
        var food_image = "No image Added";
        if (res.image !== "Blank") {
          food_image =
            '<img src="' +
            file_url +
            "FoodImage/" +
            res.image +
            '" width="50" height="50">';
        }

        var newData = "New";

        var content =
          '<div class="btn-group mb-2 dropright"><button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button><div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="javascript:void(0);" onclick="get_food(' +
          res.insert_id +
          ');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a><a class="dropdown-item" href="javascript:void(0);" id="del_' +
          res.insert_id +
          '" onclick="delete_food(' +
          res.insert_id +
          ",'" +
          res.image +
          '\');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a></div></div>';
        var table = $("#data-table").DataTable();
        var rowNode = table.row
          .add([
            newData,
            food_item_code,
            categoryName,
            foodSubCategoryName,
            foodSizeName,
            food_name,
            food_price,
            content,
          ])
          .draw()
          .node();

        $(rowNode).css("color", "green").animate({ color: "green" }).append();

        $("#msg").html(res.msg);
        clrinput();
        setTimeout(function () {
          $("#msg").html("");
        }, 3000);
      } else {
        swal({
          title: "Error",
          text: setTimeout(function () {
            $("#msg").html(res.msg);
          }, 3000),
          type: "error",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-sm btn-light",
          background: "rgba(0, 0, 0, 0.96)",
        });
      }
    },
    error: function (msg) {
      console.log("error : " + JSON.stringify(msg));
    },
  });
}

function update_food() {
  var food_description_edit = $("#food_description_edit").val();
  var edit_food_category = $("#edit_food_category").val();
  var editfoodSubCategory = $("#editfoodSubCategory").val();
  var edit_size_id = $("#edit_size_id").val();
  var edit_type_id = $("#edit_type_id").val();
  var food_name_edit = $("#food_name_edit").val();
  var food_image_edit_check = $("#food_image_edit").val();
  var food_price_edit = $("#food_price_edit").val();
  var food_item_code = $("#edit_food_item_code").val();
  var food_image_edit = $("#food_image_edit").prop("files")[0];
  //alert(org_id[0]);

  if (edit_food_category == null) {
    $("#edit_food_category-error").html("Please Select  Category");
    setTimeout(function () {
      $("#edit_food_category-error").html("");
    }, 3000);
    return false;
  }

  if (editfoodSubCategory == 0) {
    $("#editfoodSubCategory-error").html("Please Select Sub  Category");
    setTimeout(function () {
      $("#editfoodSubCategory-error").html("");
    }, 3000);
    return false;
  }

  if (food_name_edit == "") {
    $("#food_name_edit-error").html("Please give your   Item Name");
    setTimeout(function () {
      $("#food_name_edit-error").html("");
    }, 3000);
    return false;
  }

  if (food_description_edit == "") {
    $("#food_description_edit-error").html("Please give your Item Description");
    setTimeout(function () {
      $("#food_description_edit-error").html("");
    }, 3000);
    return false;
  }

  if (food_image_edit_check == "") {
    var final_food_image = glob_image;
  } else {
    var final_food_image = food_image_edit;
  }

  if (food_price_edit == "") {
    $("#food_price_edit-error").html("Please give Item Price");
    setTimeout(function () {
      $("#food_price_edit-error").html("");
    }, 3000);
    return false;
  }

  if (food_item_code == "") {
    $("#edit_food_item_code-error").html("Please give Item Code");
    setTimeout(function () {
      $("#edit_food_item_code-error").html("");
    }, 3000);
    return false;
  }

  var form_data = new FormData();
  form_data.append("edit_food_category", edit_food_category);
  form_data.append("food_name_edit", food_name_edit);
  form_data.append("food_price_edit", food_price_edit);
  form_data.append("food_image_edit_check", food_image_edit_check);
  form_data.append("final_food_image", final_food_image);
  form_data.append("food_description_edit", food_description_edit);
  form_data.append("editfoodSubCategory", editfoodSubCategory);
  form_data.append("edit_size_id", edit_size_id);
  form_data.append("edit_type_id", edit_type_id);
  form_data.append("food_item_code", food_item_code);
  form_data.append("glob_id", glob_id);
  form_data.append("glob_image", glob_image);

  $.ajax({
    type: "POST",
    url: base_url + "Food/update_food",
    data: form_data,
    contentType: false,
    processData: false,
    success: function (res) {
      res = JSON.parse(res);
      if (res.stat == 200) {
        var editfoodSubCategory = $(
          "#editfoodSubCategory option:selected"
        ).text();
        var edit_food_category_txt = $(
          "#edit_food_category option:selected"
        ).text();
        var edit_size_id_text = $("#edit_size_id option:selected").text();
        var edit_type_id_text = $("#edit_type_id_text option:selected").text();

        var edit_food_image =
          '<img src="' +
          file_url +
          "FoodImage/" +
          res.edit_image +
          '" width="50" height="50">';

        var table = $("#data-table").DataTable();
        var dataval = table.row($("#del_" + glob_id).parents("tr")).data();
        dataval[0] = food_item_code;
        dataval[1] = edit_food_category_txt;
        dataval[2] = editfoodSubCategory;
        dataval[3] = edit_size_id_text;
        dataval[4] = food_name_edit;
        dataval[5] = food_price_edit;
        table.row($("#del_" + glob_id).parents("tr")).data(dataval);
        $("#edit_msg").html(res.msg);
        setTimeout(function () {
          $("#edit_msg").html("");
        }, 2000);
      } else {
        swal({
          title: "Error",
          text: res.msg,
          type: "error",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-sm btn-light",
          background: "rgba(0, 0, 0, 0.96)",
        });
      }
    },
    error: function (msg) {
      console.log("error : " + JSON.stringify(msg));
    },
  });
}

function getSubCategoryEditView(categoryId, subCategoryId) {
  $.ajax({
    type: "POST",
    url: base_url + "Category/getAllSubCategoryResCategory",
    //dataType: "json",
    data: {
      categoryId: categoryId,
    },
    success: function (response) {
      var res = JSON.parse(response);
      var content = "";
      if (res.stat == 200) {
        content += "<option value=0>Select Data</option>";
        for (let i = 0; i < res.list_count; i++) {
          var selected = "";
          if (subCategoryId === res.all_list[i].sub_category_id) {
            selected = "selected";
          }
          content += `<option value=${res.all_list[i].sub_category_id} ${selected}>${res.all_list[i].sub_category_name}</option>`;
        }
      } else {
        content += "<option value=0>Select Data</option>";
      }

      $("#editfoodSubCategory").html(content);
    },
    error: function (response) {
      console.log(response);
    },
  });
}

function getSubCategory() {
  var categoryId = $("#food_category").val();

  $.ajax({
    type: "POST",
    url: base_url + "Category/getAllSubCategoryResCategory",
    //dataType: "json",
    data: {
      categoryId: categoryId,
    },
    success: function (response) {
      var res = JSON.parse(response);
      var content = "";
      if (res.stat == 200) {
        content += "<option value=0>Select Data</option>";
        for (let i = 0; i < res.list_count; i++) {
          content += `<option value=${res.all_list[i].sub_category_id}>${res.all_list[i].sub_category_name}</option>`;
        }
      } else {
        content += "<option value=0>Select Data</option>";
      }

      $("#foodSubCategory").html(content);
    },
    error: function (response) {
      console.log(response);
    },
  });
}

count = 0;
function add_drinks_multiple(status) {
  // console.log(globalValueUpdate[count].size_id);
  $.ajax({
    type: "POST",
    url: base_url + "Drinks/get_data_size_type",
    //dataType: "json",
    data: {},
    success: function (response) {
      console.log(response);
      var res = JSON.parse(response);
      var content_size = "";
      var content_type = "";
      if (res.size_info.stat == 200) {
        content_size += "<option>Select Data</option>";
        for (let i = 0; i < res.size_info.list_count; i++) {
          let selectedsize = "";

          if (
            status === "update" &&
            globalValueUpdate[count].size_id ===
              res.size_info.all_list[i].size_id
          ) {
            selectedsize = "selected";
          }
          content_size += `<option value=${res.size_info.all_list[i].size_id} ${selectedsize}  >${res.size_info.all_list[i].size_name}</option>`;
        }
      }

      if (res.type_info.stat == 200) {
        content_type += "<option>Select Data</option>";
        for (let i = 0; i < res.type_info.list_count; i++) {
          let selectedtype = "";
          if (
            status === "update" &&
            globalValueUpdate[count].type_id ===
              res.type_info.all_list[i].type_id
          ) {
            selectedtype = "selected";
          }

          content_type += `<option value=${res.type_info.all_list[i].type_id}  ${selectedtype}>${res.type_info.all_list[i].type_name}</option>`;
        }
      }

      let selling_price = "";
      if (status === "update" && globalValueUpdate[count].selling_price) {
        selling_price = globalValueUpdate[count].selling_price;
      }

      count++;
      var content = `<div class="row" id="remove_data_${count}">
      <div class="form-group col-md-3">
        <label>Select Size</label>
    
        <select id="size_id_${count}" name="size_id_${status}[]"  required class="select2all form-control text-center">
         
    
        ${content_size}
        </select>
    
        <span id="food_category-error" class="err"></span>
      </div>
    
      <div class="form-group col-md-3">
        <label>Select Type</label>
    
        <select id="type_id"  name="type_id_${status}[]" required class="form-control text-center">
          
    
         ${content_type}
        </select>
    
        <span id="food_category-error" class="err"></span>
      </div>
    
    
      <div class="form-group col-md-3">
          <label>Item  Price : </label>
          <input type="number" class="form-control text-center myinput required unique" required value="${selling_price}" name="drink_price_${status}[]" id="food_price" placeholder="  Price">
          <span id="food_price-error" class="err"></span>
       </div>
    
         <div class="form-group col-md-3">
             <button class="btn btn-danger" onclick="remove_rows(${count})" style="margin-top: 30px;">Remove</i>
             </button>
         </div>
       </div>
       
       
       `;

      //....

      $(`#content_drinks_${status}`).append(content);

      $(".select2all").each(function () {
        $(this).select2({
          dropdownParent: $(this).parent(),
        });
      });
    },
    error: function (response) {
      console.log(response);
    },
  });
}

function ValidationEvent() {
  let glob_size_array = [];

  for (var m = 1; m <= count; m++) {
    var size_id = $(`#size_id_${m}`).val();
    console.log(size_id);
    if (size_id) {
      glob_size_array.push(size_id);
    }
  }
  console.log(glob_size_array);
  let hasDuplicate = glob_size_array.some(
    (val, i) => glob_size_array.indexOf(val) !== i
  );

  if (hasDuplicate) {
    swal({
      title: "Error",
      text: "Hey ! You have Duplicate Values In Size. Please Check...",
      type: "error",
      buttonsStyling: false,
      confirmButtonClass: "btn btn-sm btn-light",
      background: "rgba(0, 0, 0, 0.96)",
    });
    return false;
  } else {
    return true;
  }
}

function remove_rows(count) {
  $("#remove_data_" + count).remove();
}
