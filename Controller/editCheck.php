<?php

session_start();
require_once('../Database/alldb.php');


 if(isset($_POST['update'])){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_FILES['image'];

    $oldPost = update($id); 
    $oldPost = getPostById($id); 
    
    if (!empty($img['name'])) {
        $target_directory = "../Upload/postImage/";
        $new_name = uniqid() . "_" . basename($img['name']);
        $target_file = $target_directory . $new_name;

        if (move_uploaded_file($img['tmp_name'], $target_file)) {
            $imageName = $new_name;
        }
    }

    $edit=edit($id, $title, $description, $imageName);
    header(header: "location:../View/blogAdmin.php");
 }

?>