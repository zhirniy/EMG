// При загрузке документа устанавливаем обработчики на события //
$(document).ready(function(){
//При загрузке страницы отравляем запрос к базе данных и  получаем список call_center.
//Список добавляем в поле select Call center: 
ajax_search("call_center_all", 1 ,"#call_center");
//При нажатии кнопки Save предотвращаем стандартное поведение. И устанавливаем своё поведение.
$("#submit").click(function(e){ 
        e.preventDefault(); 
        save(); 
    }); 
//При изменении значения из списка Call center отправляем запрос к базе данных и выбираем значения 
//Desk из базы данных которые соотвествуют этим записям. Значения добавляем в список и отображаем
//в поле Desc. 
 $("#call_center").change(function(e){ 
        e.preventDefault(); 
        ajax_search("call_center", "#call_center" ,"#desk"); 
    }); 
//При изменении значения из списка Desc отправляем запрос к базе данных и выбираем значения 
//Team из базы данных которые соотвествуют этим записям. Значения добавляем в список и отображаем
//в поле Team. 
  $("#desk").change(function(e){ 
        e.preventDefault(); 
        ajax_search("desk", "#desk", "#team"); 
    }); 
//При изменении значения из списка Team отправляем запрос к базе данных и выбираем значения 
//Sales из базы данных которые соотвествуют этим записям. Значения добавляем в список и отображаем
//в поле Sales. 
  $("#team").change(function(e){ 
        e.preventDefault(); 
        ajax_search("team", "#team", "#sales"); 
    });
  //Устанавливаем свой обработчик на событие reset. Обновляем страницу. При этом удаляются все значения из списков.
  $("#reset").click(function(e){ 
        e.preventDefault(); 
        reset();
        
    });

  });

//Функция в зависимости от параметров отправляет запрос на получение данных и выводит в необходимое место.
function ajax_search(post_name, post_value, place){
   var data_var = {};
   if(post_name == 'call_center_all'){
   data_var[post_name] = post_value;
   }
   else {
     data_var[post_name] = $(post_value).val();
   }
  

   $.ajax({
   url: "../EMG/search.php",
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
//Функция проверяет на заполнение всех полей списка. Если все поля заполнены функция отображает пользователю 
//сообщение что запись и выводи параметры которые будут сохранены.
function save(){
   var call = $("#call_center option:selected").html();
   var desk = $("#desk option:selected").html();
   var team = $("#team option:selected").html();
   var sales = $("#sales option:selected").html();
   if(call !== "Call center" && desk !== "Desk option" && team !=="Team option" && sales !== "Sales option"){
  $("#save").html("Saved!"+"<br>"+"Call center:"+call+"<br>"+"Desk:"+desk+"<br>"+"Team:"+team+"<br>"+"Sales:"+sales);
} else{
  $("#save").html("Not saved! Fill in all the fields!");
   }
}
//Функция перезагрузки страницы
function reset(){
  window.location.reload();
}
  
