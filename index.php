<?php

  session_start();
  
  if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
  {
    header('Location: client.php');
    exit();
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Zaloguj się</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form action="zaloguj.php" method="post" class="form-signin">

        <label for="text" class="sr-only">Adres e-mail</label>

        <input type="text" id="login" name="login" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Hasło</label>

        <input type="password" name="haslo" id="haslo" class="form-control" placeholder="Hasło" required>
        <div class="checkbox">

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj się
        </button>

      </form>

      <?php
        if(isset($_SESSION['blad']))  echo $_SESSION['blad'];
      ?>

    </div> <!-- /container -->
  </body>
</html>
