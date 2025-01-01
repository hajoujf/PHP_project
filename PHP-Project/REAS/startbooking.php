<?php
session_start();
require_once('dbCon.php');
$Ordernum = '';
$include_chars = "0123456789";
$charLength = strlen($include_chars);

for ($i = 0; $i < 4; $i++) {
    $Ordernum .= $include_chars [rand(0, $charLength - 1)];
}
$day = $_POST["day"];
$branch = $_POST["branch"];
$table = $_POST["table"];
$hour = $_POST["hour"];
$party = $_POST["party"];
/* $date = date("Y-m-d", strtotime("+10 days"));
echo $date; */

$daystoadd = 0;
if($day=="tbsunday"){
    $daystoadd = 1;
}
if($day=="tbmonday"){
    $daystoadd = 2;
}
if($day=="tbtuesday"){
    $daystoadd = 3;
}
if($day=="tbwednesday"){
    $daystoadd = 4;
}
if($day=="tbthursday"){
    $daystoadd = 5;
}
/*$date = new DateTime();
$day_of_week = substr($day, 2);

$date->modify('next '.$day_of_week);
$date->format('Y-m-d');*/

$date = date("Y-m-d", strtotime("+$daystoadd days"));
$params = array('ordernum' => $Ordernum, 'hour' => $hour, 'date' => $date,
'party' => $party,'table' => $table,'branch'=> $branch,'usetable' => $day);
$query = http_build_query($params);



/*$sql = "INSERT INTO tborder VALUES ($Ordernum,'Active',$hour,$date,$party,0,'$_SESSION[User]','$_SESSION[User]','$table','$branch',NULL)";
mysqli_query($con, $sql);*/
header("Location:CreditCard.php?$query");




mysqli_close($con);
?>