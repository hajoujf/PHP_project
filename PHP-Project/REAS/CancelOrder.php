<?php
require_once('dbCon.php');
    session_start();
$user = $_SESSION['User'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tborder WHERE Username = '$user'";

    if ($con->query($sql) === TRUE) {
        header('Location: OrdersClient.php');
    } else {
        echo "something went wrong";
    }

} 
mysqli_close($con);
?>