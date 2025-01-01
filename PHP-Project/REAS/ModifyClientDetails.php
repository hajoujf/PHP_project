<?php
include 'navbar.php';
require_once('dbCon.php');

$user = $_SESSION['User'];

    if(isset($_POST['editDetails'])){
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $sql = "UPDATE tbusers SET 
                Username = '$name',
                Email = '$email',
                Phone = '$phone'
                WHERE Username = '$user'";

        if($con->query($sql) === TRUE){
            //Later direct to profile
            header('Location:Login.php');
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "invalid";
    }



mysqli_close($con);
?>