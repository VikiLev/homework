<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="formacsslog.css"/>

    <title>FORM_registration</title>
  </head>
  <body>
    <div class ="container mt -4">
      
      <?php
      if ($_COOKIE['user']==''):
      ?>


    <div class="row">

        <div class="col">
           <h1>Регистрация</h1> 
      <form action="action.php" method="post">
    
      <img src="https://e-tender.ua/storage/editor/fotos/0f6769e17b8636cbe3ec17a42767ddd0_1550239021.png"/ width="100px" height="100px"/><br/>
      <input type="text" name="username1" id = "username1" placeholder="Введите ваше Имя"> <br/>
      <input type="text" name="username2" id = "username2" placeholder=" Введите ваше Фамилию"> <br/>
      <input type="text" name="username3" id = "username3" placeholder="Введите ваше Отчество"> <br/>
      <input type="text" name="email" id = "email" placeholder="Ввведите вашу почту"> <br/>
      <input type="password" name="" id = "password" placeholder="Введите пароль"><br/>
      <input type="password" name="passwordpassword2" id = "password2" placeholder="Введите пароль повторно"><br/>
      <input type="text" name="login" id = "login"placeholder="Введите логин"> <br/>
      <input type="submit" value="РЕГИСТРАЦИЯ"><br/>
      </form>
        </div>

  
        <div class="col">
           <h1>Авторизация</h1> 
     <form action="action1.php" method="post">
    
      <img src="https://st4.depositphotos.com/11956860/22521/v/1600/depositphotos_225211244-stock-illustration-vector-illustration-icon-mobile-based.jpg"/ width="100px" height="100px"/><br/>
      
      <input type="text" name="email" id = "email" placeholder="Ввведите вашу почту"> <br/>
      <input type="password" name="" id = "password" placeholder="Введите пароль"><br/>
      <input type="submit" value="ВХОД"><br/>
      </form>
    </div>

  <?php else: ?>
    <p>Hello, <?=$_COOKIE['user']?>.To exit click <a href="/exit.php">EXIT</a>.</p>
  <?php endif; ?>
    

  </div>
  </div>
  
</body>
</html>