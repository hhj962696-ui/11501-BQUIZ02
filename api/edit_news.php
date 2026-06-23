<?php
    include_once "db.php";

    // $_POST['del'];
    // $_POST['sh'];
    // $_POST['id'];

    foreach($_POST['id'] as $id){
        if (isset($_POST['del']) && in_array($id, $_POST['del'])){
            $News->del($id);
        }else{
            $news = $News->find($id);
            $news['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ?1:0;
            $News->save($news);
        }
    }

    to("../admin.php?do=news");