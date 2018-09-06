$(document).ready(function(){
    $(".check").click(function(){

      let name = $(this).attr('name');
      
      $.ajax({
        method: 'post',
        url: 'ajax/changeStatus.php',
        data: {
          name: name
        },
        success: function(response){
          console.log("response");
        }
      });
      window.location='admin.php';
    });
    $(".uncheck").click(function(){

      let name = $(this).attr('name');
      
      $.ajax({
        method: 'post',
        url: 'ajax/changeStatus.php',
        data: {
          name: name
        },
        success: function(response){
          console.log("response");
        }
      });
      window.location='admin.php';
    });
    $(".delete").click(function(){

      let name = $(this).attr('name');
      
      $.ajax({
        method: 'post',
        url: 'ajax/delete.php',
        data: {
          name: name
        },
        success: function(response){
          console.log("response");
        }
      });
      window.location='admin.php';
    });
});