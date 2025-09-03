<?php
include('db.php');
function insertion($title,$description,$new_name)
    {
        
        $sql_in= "insert into blogs 
        (title, description, img)
         values 
         ('$title','$description','$new_name')";
        $conn= getConnection();
        $insert= mysqli_query($conn, $sql_in);

        return $insert;
    }

function show()
{
    $conn= getConnection();
    $sql_show = "SELECT * FROM blogs";
    $show=mysqli_query($conn, $sql_show);
    return $show;
}

function delete($id)
    {
        $conn = getConnection();
        $sql_delete = "DELETE FROM blogs WHERE id = '$id'";
        $del=mysqli_query($conn, $sql_delete);

        return $del;
    }

function update($id)
    {
        $conn=getConnection();
        $sql_id = "SELECT * FROM blogs WHERE id = '$id'";
        $show_id = mysqli_query($conn, $sql_id);
        
        return $show_id;
    }
function edit($id, $title, $description, $image)
{
    $conn=getConnection();
    $id = (int)$id;

    if($image){
        $sql = "UPDATE blogs SET title = '$title', description = '$description', img = '$image' WHERE id = '$id'";
        $stmt = mysqli_prepare($conn, $sql);
    } else {
         $sql = "UPDATE blogs SET title='$title', description='$description' WHERE id = '$id'";
        $stmt = mysqli_prepare($conn, $sql);
        
    }
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

function getPostById($id)
{
    $conn = getConnection();
    $id = (int)$id;
    $sql = "SELECT * FROM blogs WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) return null;
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $post = mysqli_fetch_assoc($res);
    mysqli_stmt_close($stmt);
    return $post ?: null;
}
?>