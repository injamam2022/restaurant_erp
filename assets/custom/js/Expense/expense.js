var base_url = $("#base_url").val();
var GlobId="";

function clrmsg()
{
    $("#role_name-error").html('');
    $("#edit_role_name-error").html('');
    $("#addmsg").html('');
    $("#editmsg").html('');
    
}
const getRandomId = (min = 0, max = 500000) => {
    min = Math.ceil(min);
    max = Math.floor(max);
    const num =  Math.floor(Math.random() * (max - min + 1)) + min;
    return num.toString().padStart(6, "0")
  };

function changeType(value){
    if(value === "Drink"){
        $("#comments").addClass("d-none");
        $("#purchase_csv").removeClass("d-none");
        $('input[name=purchase_csv]').attr('required');
        $("#purchase_total_price").addClass("d-none");
        $('input[name=purchase_total_price]').removeAttr('required');
    }else{
        $("#comments").removeClass("d-none");
        $("#purchase_csv").addClass("d-none");
        $('input[name=purchase_csv]').removeAttr('required');
        $("#purchase_total_price").removeClass("d-none");
        $('input[name=purchase_total_price]').attr('required');
        $('input[name=invoice_no]').val(value.charAt(0)+getRandomId());
    }
}

$(function(){
    $("input[name='purchase_total_price']").on('input', function (e) {
      $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });
  });

function deleteRole(roleId)
{
   swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this imaginary file!',
                    type: 'warning',
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                }).then(function(){
       
                     $.ajax({
                                type: "POST",
                                url: base_url+"Expense/delete",
                                data: {roleId:roleId},
                                success: function(response) {

                //                    alert(response);
                                   
                                    
                                     swal({
                                            title: 'Are you sure?',
                                            text: 'You will not be able to recover this imaginary file!',
                                            type: 'success',
                                            buttonsStyling: false,
                                            confirmButtonClass: 'btn btn-light',
                                            background: 'rgba(0, 0, 0, 0.96)'
                                        });
                                    
                                    var table = $('#data-table').DataTable();
                                        table
                                           .row( $("#rowId_"+roleId).parents('tr') )
                                           .remove()
                                           .draw();


                                },
                                error: function(response) {

                                    alert("error"+response);
                                }
                        });         // submitting the form when user press yes
      } );
                        
}

function editRole(roleId)
{
    $("#myDynamicTable").html("");
    $.ajax({
            type: "POST",
            url: base_url + "Expense/SingleData",
//            dataType: "json",
            data: {
                roleId:roleId
            },
            success: function(response) {
                var res = JSON.parse(response);

                var myTable = document.getElementById('myDynamicTable');
                var table = document.createElement('table');
                var tblBody = document.createElement('tbody');
                var thead = document.createElement('thead');
                table.classList.add("table");
                
                table.appendChild(thead);
                let arrayThead = ["Id","Item Name","Price","Amount","Quantity"];
                var tr = document.createElement('tr');
                for(var j=0; j< arrayThead.length; j++) {
                    var th = document.createElement('th');
                    th.innerHTML = arrayThead[j];
                    tr.appendChild(th);
                }
                thead.appendChild(tr);
                var arr = res.child;
                for(var i = 0; i < arr.length; i++){
                  var tr = document.createElement('tr');
                  tblBody.appendChild(tr)
                  for(var j=0; j< Object.keys(arr[i]).length; j++) {
                        if(j == 1 || j == 2 || j == 4 || j == 8)
                            continue;
                      var td = document.createElement('td');
                    td.innerHTML = arr[i][Object.keys(arr[i])[j]];
                    tr.appendChild(td);
                  }
                }

                table.appendChild(tblBody);
                tblBody.appendChild(tr);
                myTable.appendChild(table);

                $("#edit_modal").modal("show");
            },
            error: function(response) {
                console.log(response);
            }
    });
    
}
