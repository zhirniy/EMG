// При загрузке документа устанавливаем обработчики на события //
$(document).ready(function(){
//При загрузке страницы отравляем запрос к базе данных и  получаем список call_center.
//Список добавляем в поле select Call center: 
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
  $("#reset").click(function(e){ 
        e.preventDefault(); 
        reset();
        
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
   var call = $("#call_center option:selected").html();
   var desk = $("#desk option:selected").html();
   var team = $("#team option:selected").html();
   var sales = $("#sales option:selected").html();
   if(call !== "Call center" && desk !== "Desk option" && team !=="Team option" && sales !== "Sales option"){
  $("#save").html("Saved!"+ "&nbsp"+"Call center:"+call+"&nbsp"+"Desk:"+desk+"&nbsp"+"Team:"+team+"&nbsp"+"Sales:"+sales);
} else{
  $("#save").html("Not saved! Fill in all the fields!");
   }
}

function reset(){
  window.location.reload();
}
  
