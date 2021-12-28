<?php

    // fast name 

    $name = filter_var($_POST["fname"],FILTER_SANITIZE_STRING);
    if(empty($name)){
        header('location:index.php?nameAlart=');   
    }else{
        echo $name;
    }

    // email

    $mail = filter_var($_POST["fname"],FILTER_SANITIZE_STRING);
    if(empty($mail)){
        header('location:index.php?emailAlart=');
        
    }else{
        echo $mail;
    }

    // password
    $pass       = $_POST["password"];
    $filterPass = preg_match('@[A-Z]@',$pass);
        if(empty($filterPass)){
            header('location:index.php?passAlart=');
    }
    // confirm password

    $conPass       = $_POST["confirm_password"];
    $filterConPass = preg_match('@[A-Z]@',$conPass);
    if($filterConPass === $filterPass){
        echo $filterConPass;
    }else{
        header('location:index.php?passAlart=');
    }









?>