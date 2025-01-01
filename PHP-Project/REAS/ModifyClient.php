<?php

    require_once('dbCon.php');
    session_start();
    $user = $_SESSION['User'];
    
    if(isset($_POST['editForm'])){
        $name = $_POST['name'];
        $party = $_POST['party'];
        $num = $_POST['ordernum'];
        $sql = "UPDATE tborder SET 
                `Name`= '$name',
                PartySize= '$party'
                WHERE Username = '$user' AND Number = $num";

        if($con->query($sql) === TRUE){
            header('Location:OrdersClient.php');
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "invalid";
    }


    mysqli_close($con);
?>