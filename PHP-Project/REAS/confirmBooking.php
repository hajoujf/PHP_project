<?php 
require_once('dbCon.php');
    // Check connection
session_start();
if (isset($_POST['pay'])) {
    $creditnumber = $_POST['cardnumber'];
    $username = $_SESSION['User'];
    

    function findmail($dateVal, $time)
    {
        $header = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $header .= "From:brazialaa@gmail.com";
        $user = $_SESSION['User'];
        $sql = "SELECT Email from tbusers WHERE Username='$user'";

        $val = mysqli_query($GLOBALS['con'], $sql);
        if ($val == null)
            return;
        $real_val = mysqli_fetch_assoc($val);
        $to_email = $real_val["Email"];
        $body = "<html><body>";
        $body .= '<h1>Order Confirmation</h1>';
        $body .= '<p>Thank you for using our site :) glad to have helped!This is an email confirmation';
        $body .= '</p>';
        $body .= '<p style="color:#FF0000;font-size:18px;">Here are the details</p>';
        $body .= '<p> Date:</p>';
        $body .= "$dateVal";
        $body .= '<p> Time:</p>';
        $body .= "$time";
        $body .= "<img src='https://upload.wikimedia.org/wikipedia/en/thumb/3/32/Wendy%27s_full_logo_2012.svg/1200px-Wendy%27s_full_logo_2012.svg.png'/>";
        $body .= '</body></html>';

        $subject = "Order Confirmation";
        mail($to_email, $subject, $body, $header);
    }

    /*if (!(checkCreditCard($number, $CVV, $holder, $_SESSION['User'], $Expire))) {

        echo '<script type="text/javascript">
            window.onload = function ()  { alert("Wrong Details"); } 
                </script>';
    } 
    else {*/
        $ordernum = $_GET['ordernum'];
        $usetable = $_GET['usetable'];
        $hour = $_GET['hour'];
      //  $date = $_GET['date'];
        $party = $_GET['party'];
        $numtable = $_GET['table'];
        $branch = $_GET['branch'];
     
/* $day = "thursday";
   $next_monday = strtotime("next ".$day);
$date = date("Y-m-d", $next_monday); */

        
        $day = substr($usetable,2);
        $realdate = strtotime("next ".$day);
     $date = date("Y-m-d", $realdate);

        $sql = "INSERT INTO tborder VALUES ('$ordernum','Active',$hour,$date,$party,0,'$_SESSION[User]','$_SESSION[User]',$numtable,$branch,'$creditnumber')";
        mysqli_query($con, $sql);
        $sql = "UPDATE $usetable SET Booked='TRUE' WHERE TableNumber='$numtable'";
        //Set order number at the same place;
        //$SQL2="UPDATE $usetable SET OrderNumber='$ordernum' WHERE TableNumber='$numtable';
        mysqli_query($con, $sql);
        findmail($hour, $date);
        header('Location: OrdersClient.php');
    //}




}
mysqli_close($con);
?>