<?php
include('../Database/alldb.php');

if (isset($_POST['upload'])) {
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_FILES['image'];

    if (empty($title) || empty($description)) {
        echo 'Fill title & description.';
    } else {
        $target_directory = '../Upload/postImage';
    }
    $file = $img['name'];
    $new_name = uniqid() . "_" . basename($file);
    $target_file = $target_directory ."/". $new_name;


    if (move_uploaded_file($img['tmp_name'], $target_file)) {
        $insert=insertion($title,$description,$new_name);
        
        if($insert){
            header('location: ../view/blogAdmin.php');
        }else{
            echo 'Wrong';
        }
    }

}
?>