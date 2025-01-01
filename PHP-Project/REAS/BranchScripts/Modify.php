<?php
    require_once('../dbCon.php');
    if(isset($_GET['id']) && isset($_POST['editForm'])){
        $id = $_GET['id'];
        $name = $_POST['pname'];
        $phone = $_POST['phone'];
        $Address = $_POST['Address'];
        $open = $_POST['open'];
        $close = $_POST['close'];
        $AID = $_POST['AID'];

        $sql = "UPDATE `tbbranch` SET 
                `Name`= '$name',
                `phone`= '$phone',
                `Address`= '$Address',
                `Open`= '$open',
                `Close`= '$close',
                `AdminID`= '$AID'
                
                WHERE BranchID = $id";

        if($con->query($sql) === TRUE){
            header('Location: ../Main.php#branches');
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "invalid";
    }
?>