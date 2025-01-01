<?php
include 'validateBooking.php';
include 'navbar.php';

$con = mysqli_connect("localhost", "root", "Kola12mm", "php");
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$day = $_POST["day"];
$branch = $_POST["branch"];
$table = $_POST["table"];
$hour = $_POST["hour"];
$party = $_POST["party"];



check($day, $hour, $table, $branch, $party);
/*<?php
$radioVal = $_POST["MyRadio"];

if($radioVal == "First")
{
    echo("You chose the first button. Good choice. :D");
}
else if ($radioVal == "Second")
{
    echo("Second, eh?");
} */
?>