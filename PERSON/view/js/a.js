
$(document).ready(function(){

     $("#submit").click(function(){
        var name = $("#name").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var state_name = $("#state_name").val();
        var education = $("#education).val();
     
        $.ajax({
          type : 'POST',
          url  : 'index.php?op=new',
          data : {name:name,phone:phone,email:email,state_name:state_name,education:education,occupation:occupation},
          success : function(feedback){
             $("#text").html(feedback);
           
          });     
       
    });


   
   
   
});
