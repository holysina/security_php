<?php
require_once "login.php";
if (isset($_REQUEST['username'])&&$_REQUEST['username']!=''){
    $login=new \login\login();
    $login->login($_POST);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="username" placeholder="username">
    <input type="text" name="password" placeholder="inter your pass">
  <input type="submit">
</form>
</body>
</html>