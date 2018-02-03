<html>
  <head>
    <title>Тестовое задание</title>
    <!-- Подключаем стили и библиотеку jqwery -->
    <link href="css/style.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <!-- Подключаем js файл -->
    <script src="js/script.js"></script>

  </head>
  <body>
  <div id="content">
  <h2 align="center">Assignment</h2>
  <hr> 
      <!-- Форма получения данных -->
      <form  method="post" enctype="multipart/form-data">
      <!-- Поле Call center -->
      <p>
          <label>Call center:</label>
       <!-- Установливаем функцию-обработчик на изменение значения Call center -->   
          <select name="call_center" id="call_center" onchange="change(this.value, this.name)">
          <option  value="" disabled selected>Call center</option>         
         </select>
      </p>   
       <hr>
       <!-- Поле Desk -->
       <p>   
       <label>Desk:</label>
        <!-- Установливаем функцию-обработчик на изменение значения Desk -->   
         <select name="desk" id="desk" onchange="change(this.value, this.name)">
         <option  value="" disabled selected>Desk option</option>
         </select>
         </p>
       <hr>
       <!-- Поле Team -->
       <p>
    <label>Team:</label>
     <!-- Установливаем функцию-обработчик на изменение значения Team -->  
          <select name="team" id="team" onchange="change(this.value, this.name)">
          <option  value="" disabled selected>Team option</option>
          </select>
       </p>
    <hr>
    <!-- Поле Sales: -->
    <p>
    <label>Sales:</label>
    <!-- Установливаем функцию-обработчик на изменение значения Sales -->
          <select name="sales" id="sales" onchange="change(this.value, this.name)">
          <option  value="" disabled selected>Sales option</option>
          </select>
    </p>     
    <hr>
    <!-- Кнопка Save -->
    <input id="submit" type="submit" name="submit" value="Save">
    <!-- Кнопка Close -->
    <!-- Устанавливаем событие на нажатие -->
    <input id="reset" type="reset" name="reset" onclick="click()" value="Close">
  	</form>
  <br>
  <br>
 <p id="save"></p>
  </div>

  </body>
</html>



