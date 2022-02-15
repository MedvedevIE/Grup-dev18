<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Регистрация</title>
  </head>
  <body>

  <?php
   if($_COOKIE['user'] == ''): 
    ?>
  
    <div class="reg">
      <form action="php/go.php" method="post">
        <h1>Регистрация</h1>
        <input type="text" name="login" id="login" required="required" placeholder="Введите ваш логин"><br>
        <input type="password" name="pass" id="pass" required="required" placeholder="Придумайте пароль"><br>
        <input type="email" name="email" id="email" required="required" placeholder="Введите почту"><br>
        <button>Зарегистрироваться</button>
      </form>
    </div>
    <?php else: ?>
      <h1> Привет, <?= $_COOKIE['user'] ?> </h1>
      <?php endif; ?>
      
  </body>
</html>
