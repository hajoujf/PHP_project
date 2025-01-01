<?php
    require_once('../dbCon.php');
    session_start();
    if(isset($_POST['submitForm'])){
        $comment = $_POST['comment'];
        $name =  $_SESSION['User'];
        $sql = "INSERT INTO `tbreviews`(`Name`, `comment`) 
                VALUES ('$name', '$comment')";
        // echo $sql;
        if($con->query($sql) === TRUE){
            header('Location: ../ClientsideReviews.php');
        }
        else{
            echo "something went wrong";
        }

    }else{
        echo "no submit";
        // redirect to homepage
    }

?>