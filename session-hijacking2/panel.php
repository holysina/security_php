<?php
session_start();
//session_regenerate_id(true);
if (isset($_SESSION['user']) && $_SESSION['user']==true){
    echo "login success";
}else{
    echo "first login";
}