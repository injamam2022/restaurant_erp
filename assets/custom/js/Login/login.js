var base_url = $("#base_url").val();


function clrmsg()
{
    $("#email_id-error").html('');
    $("#passwrd-error").html('');
}

$('#passwrd').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
      
      sign_in();
   /* $('input[name = butAssignProd]').click();
    return false;  */
  }
});



$('#email_id').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
      
      sign_in();
   /* $('input[name = butAssignProd]').click();
    return false;  */
  }
});

$('#login_in_sign').click(function (e) {
    
    sign_in();
});
function sign_in()
{
    clrmsg();
    var email_id = $("#email_id").val();
    var passwrd = $("#passwrd").val();
    var role_id = $("#role_id").val();
    
   
    
    if(email_id.trim().length==0)
    {
        $("#email_id-error").html('Required');
        $("#email_id").focus();
        return false;
    }
    else if (!ValidateEmail(email_id)) {       
        $("#email_id").focus();
        return false;
   }
    
    if(passwrd.trim().length==0)
    {
        $("#passwrd-error").html('Required');
        $("#passwrd").focus();
        return false;
    }
    if(role_id==0)
    {
        $("#role_id-error").html('Required');
        $("#role_id").focus();
        return false;
    }
    
    $.ajax({
            type: "POST",
            url: base_url + "Login/submitLogin",
//            dataType: "json",
            data: {
                email_id:email_id,
                passwrd:passwrd,
                role_id:role_id
            },
            success: function(response) {
                console.log(response);
                var res = JSON.parse(response);
                if(res.stat == 200){
                  //  alert(res.msg);
                    
                    window.location = base_url+"Dashboard";
                }else{
//                    alert(res.msg);
                    $("#signInMsg").html('Please check your Email id or Password');
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
}


function ValidateEmail(email_id) {
//    alert(email_id);
   var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    
  if(expr.test(email_id) == false){
      $("#email_id-error").html('Invalid Email...');
      return false;
  }else{
      $("#email_id-error").html('');
      return true;
  }
}
