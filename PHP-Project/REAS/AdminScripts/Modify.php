<?php
    require_once('../dbCon.php');
    if(isset($_GET['id']) && isset($_POST['editForm'])){
        $id = $_GET['id'];
        $BranchID = $_POST['branchid'];

        $sql = "UPDATE `tbadmin` SET 
                `BranchID`= '$BranchID'
                WHERE ID = $id";

        if($con->query($sql) === TRUE){
            header('Location: ../Main.php#Admins');
        }else{
            echo "something went wrong";
        }
    }
    else{
        echo "invalid";
    }
?>