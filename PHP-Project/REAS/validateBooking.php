<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
STATIC $count = 1;
$currenttable = 0;
$currentbranch = 0;
$currentuser = $_SESSION['User'];
$currentPartySize = 0;
$currentDay = 0;
$currenttime = 10;
require_once('dbCon.php');
function checkTableandPartySize($tableNumber, $Partysize, $branchID)
{
    $result = mysqli_query($GLOBALS['con'], "SELECT * FROM tbtable WHERE Number='$tableNumber'");
    $row = mysqli_fetch_array($result);
    if ($row != null && $row['PartySize'] <= $Partysize && $row['BranchID'] == $branchID) {
        return true;
    }
    return false;

}

function checkTableInBranch($branchID, $tableNumber)
{
    $result = mysqli_query($GLOBALS['con'], "SELECT * FROM tbtable WHERE BranchID='$branchID'");

    while ($row = mysqli_fetch_array($result)) {
        if ($row['Number'] == $tableNumber)
            return true;
    }
    return false;
}
function checkBranchInBranches($branchID)
{
    $result = mysqli_query($GLOBALS['con'], "SELECT * FROM tbbranch");

    while ($row = mysqli_fetch_array($result)) {
        if ($row['BranchID'] == $branchID)
            return true;
    }
    return false;
}
function saveOrder($table, $branch, $user, $partysize, $day, $time)
{
    $date = date_create("NOW");
    date_add($date, date_interval_create_from_date_string("1 days"));
    $GLOBALS['currenttable'] = $table;
    $GLOBALS['currentbranch'] = $branch;
    $GLOBALS['currentPartySize'] = $partysize;
    $GLOBALS['currentDay'] = $day;
    $GLOBALS['currenttime'] = $time;
    $sql = "INSERT INTO tborder VALUES (10,'Active',$time,$date,$partysize,$time,'$_POST[holder]','$user','$table','$branch',0)";
    mysqli_query($GLOBALS['con'], $sql);

    
}

function TableForDay()
{
    $daytable = 'tbsunday';
    $day = $GLOBALS['currentDay'];
    if ($day == 1)
        $daytable = 'tbsunday';
    if ($day == 2)
        $daytable = 'tbmonday';
    if ($day == 3)
        $daytable = 'tbtuesday';
    if ($day == 4)
        $daytable = 'tbwednesday';
    if ($day == 5)
        $daytable = 'tbthursday';

    return $daytable;



}/*
function findmail($dateVal, $time)
{
    $user = $_SESSION['User'];
    $sql = "SELECT Email from tbusers WHERE Username='$user'";

    $val = mysqli_query($GLOBALS['con'], $sql);
    if ($val == null)
        return;
    $real_val = mysqli_fetch_assoc($val);
    $to_email = $real_val["Email"];
    $body = '<html><body>';
    $body .= '<h1">Order Confirmation</h1>';
    $body .= '<p>Thank you for using our site :) glad to have helped!This is an email confirmation';
    $body .= '</p>';
    $body .= '<p style="color:#FF0000;font-size:18px;">Here are the details</p>';
    $body .= '<p> Date:</p>';
    //$body .= date("Y-m-d", strtotime("$dateVal"));
    $body .= '<p> Time:</p>';
    $body .= $time;
    $body .= '</body></html>';
    $header = "From:brazialaa@gmail.com";
    $subject = "Order Confirmation";
    mail($to_email, $subject, $body, $header);
}*/

$count+=7;
function makeOrder($creditnumber)
{
    $dateVal = date_create("NOW");
    date_add($dateVal, date_interval_create_from_date_string("$GLOBALS[currentDay] days"));
    
    $tabletouse = TableForDay();
    $time = date("h", $GLOBALS['currenttime']);
    $date = date("Y-m-d",strtotime("NOW+ $GLOBALS[currentDay] days"));
    //date_add($date, date_interval_create_from_date_string("$GLOBALS[currentDay] days"));
    $sql = "UPDATE $tabletouse SET Booked='TRUE' WHERE TableNumber='$GLOBALS[currenttable]'";
    mysqli_query($GLOBALS['con'], $sql);
   // $sql="UPDATE tborder SET CreditCardNumber=$creditnumber WHERE Number=$num";
    $sql = "INSERT INTO tborder VALUES ($GLOBALS[count],'Active',$GLOBALS[currenttime],$date,$GLOBALS[currentPartySize],'00:00','$_POST[holder]','$GLOBALS[currentuser]','$GLOBALS[currenttable]','$GLOBALS[currentbranch]',$creditnumber)";
    mysqli_query($GLOBALS['con'], $sql);
    findmail($dateVal, $GLOBALS['currenttime']);

    echo '<script>alert("Order Confirmed")</script>';
    header('Location: OrdersClient.php');


}
function check($day, $time, $table, $branchID, $partysize)
{
    if (!(checkTableandPartySize($table,$partysize,$branchID)&& checkTableInBranch($branchID,
            $table) && checkBranchInBranches($branchID))
    ) {
        echo '<script>alert("Wrong Inputs")</script>';
        header('Location: OptionsForBooking.php');
    } else {
        header('Location: PayingForm.php');
        //send href='Edit.php?number=" .$row['BranchID'] ."'
        //reciecve $_GET['number']
        /*$_GET['name] */
        $num = $_GET['number'];
        saveOrder($table, $branchID, $_SESSION['User'], $partysize, $day, $time);
        $tabletouse = TableForDay();
        $sql = "UPDATE $tabletouse SET Booked='TRUE' WHERE TableNumber='$GLOBALS[currenttable]'";
        mysqli_query($GLOBALS['con'], $sql);
        $sql = "INSERT INTO tborder VALUES ('1','Active',$time,date(),$partysize,'00:00','$_SESSION[User]','$_SESSION[User]','$table','$branchID','$num')";
        mysqli_query($GLOBALS['con'], $sql);
        findmail("2023-05-20", 10);
        echo '<script>alert("Order Confirmed")</script>';
        header('Location: OrdersClient.php');

    }
}

mysqli_close($con);
?>