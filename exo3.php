<?php
    setcookie('login',$_POST['login'],time()+3600,"/","localhost");
    setcookie('password',$_POST['password'],time()+3600,"/","localhost");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="exo2.css">
    <title>exo1</title>
  </head>
  <body>
  <form method="post">
     <div>
       <div>
           <label>login</label>
       </div>
       <input class='login' type="text" name="login" placeholder="login">
   </div>
   <div>
       <div>
           <label>password</label>
       </div>
       <input class='mdp'type="password" name="password">
   </div>

   <button class='btn'type="submit">valider</button>
</form>

  </body>
</html>
