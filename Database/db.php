<?php 

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="blogdb";
    
    function getConnection(){
        global $servername;
        global $username;
        global $password;
        global $dbname;

        return $conn= new mysqli($servername,$username,$password,$dbname,3306);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
    }

?>