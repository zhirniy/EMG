<html>
  <head>
    <title>Тестовое задание</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script>

$(document).ready(function(){
call_center_data();
$("#submit").click(function(e){ 
        e.preventDefault(); 
        call_center_data(); 
    }); 
 $("#call_center").change(function(e){ 
        e.preventDefault(); 
        ajax_search_desk(); 
    }); 
  $("#desk").change(function(e){ 
        e.preventDefault(); 
        ajax_search2(); 
    }); 
  $("#search_results2").change(function(e){ 
        e.preventDefault(); 
        ajax_search3(); 
    }); 

});


function call_center_data(){
   $.ajax({
   url: "customer.php",
   type: "POST",
   dataType: 'json',
   data: {
          call_center_all : 1
   },

   success: function(html){
      $("#call_center").html(html);
    },
    error: function (error) {
    $("#call_center").html(error);
}
 });

}



function ajax_search_desk(){
   var search_status = $('#call_center').val();
   $.ajax({
   url: "customer.php",
   type: "POST",
   dataType: 'json',
   data: {
            
            call_center : search_status
   },
  
   success: function(html){
      $("#desk").html(html);
    },
    error: function (error) {
    $("#desk").html(error);
}
 });


}



function ajax_search2(){
  
 var search_status2 = $('#desk').val();
   $.ajax({
   url: "customer.php",
   type: "POST",
   dataType: 'json',
   data: {
            
        call_center2 : search_status2
   },
  
   success: function(html){
      $("#search_results2").html(html);
    },
    error: function (error) {
    $("#search_results2").html(error);
}
 });
}



function ajax_search3(){
  
 var search_status3 = $('#search_results2').val();
   $.ajax({
   url: "customer.php",
   type: "POST",
   dataType: 'json',
   data: {
          call_center3 : search_status3
   },
  
   success: function(html){
      $("#search_results3").html(html);
    },
    error: function (error) {
    $("#search_results3").html(error);
}
 });

}



</script>
  </head>
  <body>

  <form  method="post" enctype="multipart/form-data">
 
    <label>Call center:</label>
          <select name="call_center" id="call_center" onchange="change(this.value, this.name)">
                     
         </select>
     <hr>     
    <label>Desk:</label>
         <select name="desk" id="desk" onchange="change(this.value, this.name)">
                    
         </select>
    <hr>
    <label>Team:</label>
          <select name="search_results2" id="search_results2" placeholder="Team1" onchange="change(this.value, this.name)">
                
                     
         </select>
    <hr>
    <label>Sales:</label>
          <select name="search_results3" id="search_results3" placeholder="Mary" onchange="change(this.value, this.name)">
                                      
         </select>
    <hr>
    <input id="reset" type="reset" name="reset" value="Close">
  	<input id="submit" type="submit" name="submit" value="Save">
  </form>
 <p id="dd">Выберите пользователя</p>
  <?php //include 'customer.php'; ?>

  </body>
</html>



