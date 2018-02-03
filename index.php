<html>
  <head>
    <title>Тестовое задание</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script>

$(document).ready(function(){
  
ajax_search("call_center_all", 1 ,"#call_center");
$("#submit").click(function(e){ 
        e.preventDefault(); 
        save(); 
    }); 
 $("#call_center").change(function(e){ 
        e.preventDefault(); 
        ajax_search("call_center", "#call_center" ,"#desk"); 
    }); 
  $("#desk").change(function(e){ 
        e.preventDefault(); 
        ajax_search("desk", "#desk", "#team"); 
    }); 
  $("#team").change(function(e){ 
        e.preventDefault(); 
        ajax_search("team", "#team", "#sales"); 
    });
  });


function ajax_search(post_name, post_value, place){
   var data_var = {};
   if(post_name == 'call_center_all'){
   data_var[post_name] = post_value;
   }
   else {
     data_var[post_name] = $(post_value).val();
   }
  

   $.ajax({
   url: "customer.php",
   type: "POST",
   dataType: 'json',
   data:
   data_var,
   success: function(html){
      $(place).html(html);
      },
    error: function (error) {
       $(place).html(error);
}
 });
   
}

function save(){
   var call = $("#call_center").val();
   var desk = $("#desk").val();
   var team = $("#team").val();
   var sales = $("#sales").val();
   if(call !== null && desk !== null && team !==null && sales !== null){
  $("#save").html("Saved!");
} else{
  $("#save").html("Not saved! Fill in all the fields!");
   }
}


  //document.getElementById('save').innerHTML = "Нет подключения!"; 
 // alert("Нет подключения!");



</script>
  </head>
  <body>

  <form  method="post" enctype="multipart/form-data">
 
    <label>Call center:</label>
          <select name="call_center" id="call_center" onchange="change(this.value, this.name)">
          <option  value="" disabled selected>Call center</option>         
         </select>
     <hr>     
    <label>Desk:</label>
         <select name="desk" id="desk" onchange="change(this.value, this.name)">
         <option  value="" disabled selected>Desk option</option>
                    
         </select>
    <hr>
    <label>Team:</label>
          <select name="team" id="team" onchange="change(this.value, this.name)">
          <option  value="" disabled selected>Team option</option>
                
                     
         </select>
    <hr>
    <label>Sales:</label>
          <select name="sales" id="sales" onchange="change(this.value, this.name)">
          <option  value="" disabled selected>Sales option</option>
                                      
         </select>
    <hr>
    <input id="reset" type="reset" name="reset" value="Close">
  	<input id="submit" type="submit" name="submit" value="Save">
  </form>
 <p id="save"></p>
  <?php //include 'customer.php'; ?>

  </body>
</html>



