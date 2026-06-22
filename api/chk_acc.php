<?php
    include_once "db.php";
    // $_GET['acc'];
    // $_GET['pwd1'];
    // $_GET['pwd2'];
    // $_GET['email'];

    echo $Member->count(['acc'=>$_GET['acc']]);


?>