$(document).ready(function(){

  chkForm();

});

$(document).keyup(function(){

  chkForm();

});

function chkForm() {
  if($("#contact_name").val() == "" || $("#contact_mail").val() == "" || $("#contact_message").val() == ""){
    $("#contact_submit").prop('disabled', true);
    $("#contact_submit").css('background-color', '#717171');
  }else{
    $("#contact_submit").prop('disabled', false);
    $("#contact_submit").css('background-color', '#4d4d4d');
  }

}