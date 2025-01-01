<?php
    require_once('../dbCon.php');

    if(isset($_POST['submitForm'])){
        $name = $_POST['pname'];
        $phone = $_POST['phone'];
        $Address = $_POST['Address'];
        $open = $_POST['open'];
        $close = $_POST['close'];
        $AID = $_POST['AID'];
        $BID = $_POST['BID'];
        $sql = "INSERT INTO `tbbranch`(`BranchID`,`Name`, `Phone`, `Address`,`Open`, `Close`, `AdminID`) 
                VALUES ('$BID','$name', $phone, '$Address','$open','$close','$AID')";
       
        if($con->query($sql) === TRUE){
            header('Location: ../Main.php#branches');
        }
        else{
            echo "something went wrong";
        }

    }else{
        echo "no submit";
        
    }

?>