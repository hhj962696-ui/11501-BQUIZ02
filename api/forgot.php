<?php
    include_once "db.php";

    // echo $_GET['email'];

    $user = $Member->find(['email'=>$_GET['email']]);


    if (!empty($user)){
        echo "您的密碼為:".$user['pwd'];
    }else{
        echo "查無此資料";
    }


?>