<?php
//cross site request-forgery
//-TIP1
//for example only request for edit and post most send with method "POST"  JUSTTTTTTTTTTT $_POST NO $_GET
////// برای مثال تمامی درخواست های ما باید با متد post  ارسال شود و از form استفاده کنیم و اکشن با سیستم روتینگ استفاده میشود:)
//kjnnj
//tip2
///
///
///

//TIP 2 EXAMPLE
session_set_cookie_params(0,'/','localhost',false , true);
session_start();
session_regenerate_id(true);
if (!empty($_SESSION['_token'])){
  $token=  $_SESSION['_token']=bin2hex(random_bytes(32));
}
?>

<input type="hidden" name="token" value="<?= $token ?>">
<?php
//پایین value ارسالی ارسال میشه معمولا برای چک اینکه درخواست ها از این سایت صادر شده و سایت خارجی هیچ غلطی نمیتونه بکنه
?>

<?php

if (hash_equals($_SESSION['_token'],$_POST['token'])==true){

    echo 'hi ';//عملیات انجامی
}
echo $_SESSION['_token'];




