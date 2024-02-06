<?php
namespace login;
class login{
    public function login($request){
        $request['password']=password_hash($request['password'],PASSWORD_DEFAULT);
        echo $request['password'];



    }





}