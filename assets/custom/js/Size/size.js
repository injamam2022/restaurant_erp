var base_url = $("#base_url").val();
var GlobId = "";

function clrmsg() {
  $("#role_name-error").html("");
  $("#edit_role_name-error").html("");
  $("#addmsg").html("");
  $("#editmsg").html("");
}

function add_size() {
  clrmsg();
  var size_name = $("#size_name").val();

  if (size_name.trim().length == 0) {
    $("#size_name-error").html("Invalid Field!");
    $("#size_name").focus();
    return false;
  }
  //    alert(base_url); return;
  $.ajax({
    type: "POST",
    url: base_url + "Size/add",
    //            dataType: "json",
    data: {
      size_name: size_name,
    },
    success: function (response) {
      //                console.log(response); return;
      var res = JSON.parse(response);
      if (res.stat == 200) {
        $("#addmsg").html(res.msg);
        //                    window.location = base_url+"Role";

        var table = $("#data-table").DataTable();

        var ActionData =
          '<div class="btn-group mb-2 dropright"><button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button><div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="javascript:void(0);" onclick="editSize(' +
          res.insert_id +
          ');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a><a class="dropdown-item" href="javascript:void(0);" id="rowId_' +
          res.insert_id +
          '" onclick="deleteSize(<' +
          res.insert_id +
          ');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a></div></div>';

        var rowNode = table.row
          .add([res.insert_id, size_name, ActionData])
          .draw()
          .node();

        $(rowNode)
          .css({
            color: "white",
            "font-weight": "700",
          })
          .animate({ color: "black" });

        $("#size_name").val("");
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

function deleteSize(sizeId) {
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
      url: base_url + "Size/delete",
      data: { sizeId: sizeId },
      success: function (response) {
        //                    alert(response);

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
          .row($("#rowId_" + roleId).parents("tr"))
          .remove()
          .draw();
      },
      error: function (response) {
        alert("error" + response);
      },
    }); // submitting the form when user press yes
  });
}

function editSize(sizeId, type) {
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
    url: base_url + "Size/Single",
    //            dataType: "json",
    data: {
      sizeId: sizeId,
    },
    success: function (response) {
      //                console.log(response); return;
      var res = JSON.parse(response);
      if (res.stat == 200) {
        GlobId = res.all_list[0].size_id;
        $("#edit_size_name").val(res.all_list[0].size_name);
        $("#edit_modal").modal("show");
      }
    },
    error: function (response) {
      console.log(response);
    },
  });

  //    var table = $('#data-table').DataTable();
  //    var temp = table.row( $("#rowId_"+roleId).parents('tr')).data();
  //
  //    temp[1] = 'Tom';
  //    table.row($("#rowId_"+roleId).parents('tr')).data(temp).draw();
}

function submitedit() {
  clrmsg();
  var size_name = $("#edit_size_name").val();

  if (size_name.trim().length == 0) {
    $("#edit_size_name-error").html("Required");
    $("#edit_size_name").focus();
    return false;
  }
  //    alert(base_url); return;
  $.ajax({
    type: "POST",
    url: base_url + "Size/edit",
    //            dataType: "json",
    data: {
      size_name: size_name,
      GlobId: GlobId,
    },
    success: function (response) {
      //                console.log(response); return;
      var res = JSON.parse(response);
      if (res.stat == 200) {
        $("#editmsg").html(res.msg);
        //                    window.location = base_url+"Role";

        var table = $("#data-table").DataTable();

        var temp = table.row($("#rowId_" + GlobId).parents("tr")).data();

        temp[1] = size_name;
        table
          .row($("#rowId_" + GlobId).parents("tr"))
          .data(temp)
          .draw();

        $("#size_name").val("");
      } else {
        //                    alert(res.msg);
        $("#editmsg").html(res.msg);
      }
    },
    error: function (response) {
      console.log(response);
    },
  });
}
