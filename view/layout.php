<html>
  <head>
    <title>Тестовое задание</title>
    <!-- Подключаем стили и библиотеку jqwery -->
    <link href="view/css/style.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <!-- Подключаем js файл -->
    <script src="view/js/script.js"></script>
    </head>
    <body>
    <br>
       <div class="row">
         <div class="col-md-3"></div>
          <div class="col-md-6"> 
            <div class="row">  
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <h2 align="center">Assignment</h2>
              <hr> 
              </div>
              </div>     
          </div>
        </div>
      <!-- Форма получения данных -->
      <form  method="post" enctype="multipart/form-data">
      <!-- Поле Call center -->
        <div class="row"> 
          <div class="col-md-3"></div>
           <div class="col-md-6"> 
            <div class="row">  
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p>
                <label>Call center:</label>
               <!-- Установливаем функцию-обработчик на изменение значения Call center -->   
               <select name="call_center" id="call_center" onchange="change(this.value, this.name)">
               <option  value="" disabled selected>Call center</option>         
               </select>
               </p>   
               <hr>
            </div>
            </div>     
          </div>
        </div>
      <!-- Поле Desk -->
      <div class="row"> 
        <div class="col-md-3"></div>
        <div class="col-md-6"> 
          <div class="row">  
           <div class="col-md-3"></div>
           <div class="col-md-6">    
             <p>   
              <label>Desk:</label>
             <!-- Установливаем функцию-обработчик на изменение значения Desk -->   
             <select name="desk" id="desk" onchange="change(this.value, this.name)">
             <option  value="" disabled selected>Desk option</option>
             </select>
             </p>
           <hr>
          </div>
          </div>     
        </div>
      </div>   
       <!-- Поле Team -->
      <div class="row"> 
        <div class="col-md-3"></div>
        <div class="col-md-6"> 
          <div class="row">  
           <div class="col-md-3"></div>
           <div class="col-md-6">         
             <p>
             <label>Team:</label>
              <!-- Установливаем функцию-обработчик на изменение значения Team -->  
              <select name="team" id="team" onchange="change(this.value, this.name)">
              <option  value="" disabled selected>Team option</option>
              </select>
             </p>
            <hr>
            </div>
          </div>     
        </div>
      </div>  
    <!-- Поле Sales: -->
      <div class="row"> 
        <div class="col-md-3"></div>
        <div class="col-md-6"> 
          <div class="row">  
           <div class="col-md-3"></div>
           <div class="col-md-6">   
           <p>
            <label>Sales:</label>
            <!-- Установливаем функцию-обработчик на изменение значения Sales -->
              <select name="sales" id="sales" onchange="change(this.value, this.name)">
              <option  value="" disabled selected>Sales option</option>
              </select>
              </p>     
              <hr>
              </div>
          </div>     
        </div>
      </div>      
      <div class="row"> 
        <div class="col-md-3"></div>
        <div class="col-md-6"> 
          <div class="row">  
           <div class="col-md-3"></div>
           <div class="col-md-6">     
             <!-- Кнопка Save -->
             <input id="submit" type="submit" name="submit" value="Save">
             <!-- Кнопка Close -->
             <!-- Устанавливаем событие на нажатие -->
            <input id="reset" type="reset" name="reset" onclick="click()" value="Close">
           </div>
           </div>     
        </div>
      </div>      
     </form>
       <div class="row"> 
          <div class="col-md-3"></div>
          <div class="col-md-6"> 
            <div class="row">  
             <div class="col-md-3"></div>
             <div class="col-md-6">      
             <p id="save"></p>
             </div>
             </div>     
          </div>
        </div>  
  </body>
</html>



