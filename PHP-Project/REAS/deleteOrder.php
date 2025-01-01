<?php
require_once('dbCon.php');
if (isset($_GET['num'])) {
    $number = $_GET['num'];
    $table = $_GET['table'];
    $hour = $_GET['hour'];
    $day = $_GET['day'];
    $realtable = "tb"."$day";
   

$realhour = date("H", strtotime($hour));


    //$result1 = mysqli_query($con, "SELECT * FROM $realtable");
  //take only hour from hour only10
   // if ($row = mysqli_fetch_array($result1)) {
    //BookingOption	
        $sql = "UPDATE $realtable SET Booked ='FALSE' WHERE TableNumber = '$table' AND Hour = '$realhour'";

    $con->query($sql);
   // }
    $sql = "DELETE FROM `tborder` WHERE Number = $number";
   if ($con->query($sql) === TRUE) {
        header('Location: OrdersClient.php');
    } else {
        echo "something went wrong";
    }

}
mysqli_close($con);
?>