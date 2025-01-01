<?php
    require_once('../dbCon.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `tbbranch` WHERE BranchID = $id";

        if($con->query($sql) === TRUE){
            header('Location: ../brnches.php');
        }else{
            echo "something went wrong";
        }
        
    }else{
        // redirect to show with error
        die('id not provided');
    }

?>
