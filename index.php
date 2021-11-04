<?php

//allow the config
define('__CONFIG__', true);
//require the config
require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.8.0/dist/css/uikit.min.css" />
  <title>PHP Login System</title>
</head>

<body>

  <div class="uk-section uk-container">
    <?php echo "Hello world";
    echo date("Y m d");
    ?>
    <p>
      <a href="/PHP-login-registration/login.php">Login</a>
      <a href="/PHP-login-registration/register.php">Register</a>
    </p>
  </div>

  <?php require_once "inc/footer.php" ?>


</body>

</html>