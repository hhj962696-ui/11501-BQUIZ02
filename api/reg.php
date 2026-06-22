<?php
    include_once "db.php";

    unset($_POST['pwd2']);
    echo $Member->save($_POST);


?>