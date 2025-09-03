<?php

session_start();
require_once('../Database/alldb.php');

    if(isset($_GET['delete']))
    {
        // echo $_GET['delete'];
        $id = $_GET['delete'];
        $del = delete($id);
        header('location:../view/blogAdmin.php');
        
    }

    if(isset($_GET['edit']))
    {
        //echo $_GET['update'];
        $id = $_GET['edit'];
        header('location: ../View/updatePost.php?update='.$id);
        

    }

?>