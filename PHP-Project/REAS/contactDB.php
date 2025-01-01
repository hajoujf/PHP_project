<?php 
require_once('dbCon.php');
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$subject = $_POST['subject'];

$sql = "INSERT INTO tbcontacts VALUES('$firstName','$lastName','$subject')";
if($result = mysqli_query($con, $sql)){

    echo '<script type="text/javascript">
        window.onload = function () { alert(Thank You"); } </script>';
    header('Location: homepage.php');
}


mysqli_close($con);
?>