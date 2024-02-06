<?php

if (isset($_POST['email']) && $_POST['email'] != ''&&isset($_POST['password']) && $_POST['password'] != ''
&&isset($_POST['username']) && $_POST['username'] != ''){

    try {
        $dbhost= 'localhost';
        $username='root';
        $dbname= "sql-injection";
        $dbpassword='';
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $db=new PDO("mysql:host=".$dbhost.";dbname=".$dbname,$username,$dbpassword,$options);

        $email=$_POST['email'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $username=$_POST['username'];

        $query="INSERT INTO `users` (`email`,`username`,`password`)VALUES (?,?,?)";
      $stmt=$db->prepare($query);
   $stmt->execute([$email,$username,$password]);
    }
    catch (PDOException $e){
        echo $e->getMessage();

    }

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
    />
</head>
<body>
<div class="container border mt-4 p-3">
    <form class="row g-3" action="register.php" method="post" autocomplete="off">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input
                    type="email"
                    class="form-control"
                    id="inputEmail4"
                    name="email"
            />
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input
                    type="password"
                    class="form-control"
                    id="inputPassword4"
                    name="password"
            />
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Username</label>
            <input
                    type="text"
                    class="form-control"
                    id="inputPassword4"
                    name="username"
            />
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>
</body>
</html>