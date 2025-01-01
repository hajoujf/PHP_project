<?php
    require_once('../dbCon.php');

    if(isset($_POST['submitForm'])){
        $AID = $_POST['AID'];
        $name = $_POST['pname'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $BranchID = $_POST['branchid'];
        $sql = "INSERT INTO `tbadmin`(`ID`,`Name`, `Phone`, `Paasword`,`Email`, `BranchID`) 
                VALUES ('$AID','$name', $phone ,'$pass','$email','$BranchID')";
        // echo $sql;
        if($con->query($sql) === TRUE){
            header('Location: ../Main.php#Admins');
        }
        else{
            echo "something went wrong";
        }

    }else{
        echo "no submit";
        // redirect to homepage
    }

?>