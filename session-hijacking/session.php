<?php
session_set_cookie_params(0,'/','localhost',false , true);
session_start();
//استارت سشن :)
session_regenerate_id(true);
//جلوگیری از حمله session hijacking


//برای اینکه هکر نتونه از کلید سشن ها استفاده کنخ و کیرم کنه
// از این جرکت میشه استفاده کردن و همه درخواست ها به صورت رسمی خواهند بود
// و سه پارامتر ورودی میگیره یک life time 2 مسیر ذخیره سازی  سه رو چه دامین این کارا انجام میشه :)
//اینو هم باید به امیر بگویم
//ارگمان چهارم http رو مشخص میکنه که اگه false درخواست ها اینطوری ثبت میشن و ارگمان اخر اگه TRUE باشه
//رو HTTP ONLY میمونه
if (isset($_SESSION['active'])){
    var_dump($_SESSION);
}
if (isset($_REQUEST['username'])&&$_REQUEST!=''){
$userNAME='sinalegend';
$fullname='sina';
$password='2369456366';
$lanme='vaeli';
}
if ($_REQUEST['username']==$userNAME && $_REQUEST['password']==$password){
    $_SESSION['username']=$userNAME;
    $_SESSION['password']=$password;
    $_SESSION['fullname']=$fullname;
    $_SESSION['laname']=$lanme;
    $_SESSION['active']=true;
    var_dump($_SESSION);
    echo   $_SESSION['username'].'<pre>'.  $_SESSION['password'].'</pre>'. $_SESSION['fullname'].'<pre>'.  $_SESSION['laname'].'</pre>';
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