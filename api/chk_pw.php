<?php
    include_once "db.php";
    // $_GET['acc'];
    // $_GET['pwd1'];
    // $_GET['pwd2'];
    // $_GET['email'];

    $chk = $Member->count($_POST);

    if ($chk){
        echo 1;
        $_SESSION['login']=$_POST['acc'];
    }else{
        echo 0;
    }


?>