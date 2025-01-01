<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/credit.css">

</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="row" style="padding-top:70px">
    <div class="col">
      <div class="container">
        <form action="" method='POST'>
          <div class="col">
            <br>
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="Alaa Hajouj">
            <label for="cname">ID on Card</label>
            <input type="text" id="id" name="id" placeholder="123456789">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="January">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2022">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
              <input type="submit" value="Continue to checkout" class="btn" name='pay'>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
  </div>
  <br>
</body>

</html>

<?php

include 'dbCon.php';
if (isset($_POST['pay'])) {
  $creditnumber = $_POST['cardnumber'];
  $cardname = $_POST['cardname'];
  $year = $_POST['expyear'];
  $month = $_POST['expmonth'];
  $cvv = $_POST['cvv'];
  $id = $_POST['id'];
  $timestamp = mktime(0, 0, 0, $month, 1, $year);
  $date2 = date('Y-m-d', $timestamp);

  $username = $_SESSION['User'];
  function ISEXISTS($number)
  {
    $sql = "SELECT * FROM tbcreditcard   WHERE Number='$number'";
    $result = mysqli_query($GLOBALS['con'], $sql);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
      return true;
    }
    return false;

  }
  function checkCredit($number, $cvv, $month, $year)
  {
    if (strlen($number) > 3 && $cvv >= 100 && $cvv <= 999) {
      $current_month = date('m');
      $current_year = date('Y');
      if ($month == $current_month && $year > $current_year) {
        return true;
      } else if ($month > $current_month && $year >= $current_year) {
        return true;
      }
    }
    return false;
  }
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
    $body .= "$time";
    $body .= '<p> Time:</p>';
    $body .= "$dateVal";
    $body .= "<br>";
    $body .= "<img src='http://www.hamburguesaperfecta.com/sites/default/files/blogger_importer/s1600/wendy-logo.jpeg'/>";
    $body .= '</body></html>';

    $subject = "Order Confirmation";
    mail($to_email, $subject, $body, $header);
  }
  function checkOrder($usetable,$numtable,$hour,$branch,$party){
    $sql = "SELECT * FROM tbtable WHERE Number=$numtable";
    $result = mysqli_query($GLOBALS['con'], $sql);
    $row = mysqli_fetch_assoc($result);
    $sql1 = "SELECT * FROM $usetable WHERE TableNumber=$numtable AND Hour='$hour'";
    $result1 = mysqli_query($GLOBALS['con'], $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    if($row1==null || $row==null){
      return false;
    }
    if($row['Number']==$numtable && $row['BranchID']==$branch && $row['PartySize']==$party&& $row1['Hour']==$hour) {
      return true;
    }
    return false;
  }
  
  $ordernum = $_GET['ordernum'];
  $usetable = $_GET['usetable'];
  $hour = $_GET['hour'];
  $date = $_GET['date'];
  $party = $_GET['party'];
  $numtable = $_GET['table'];
  $branch = $_GET['branch'];
  $day = substr($usetable,2);
  $realdate = strtotime("next ".$day);
$date = date("Y-m-d", $realdate);
  if (checkCredit($creditnumber, $cvv, $month, $year) && !ISEXISTS($creditnumber)) {
    $sql = "INSERT INTO tbcreditcard VALUES('$creditnumber','$id','$cardname','$date2',$cvv,'$_SESSION[User]')";
    mysqli_query($con, $sql);
  } if (ISEXISTS($creditnumber) && checkOrder($usetable,$numtable,$hour,$branch,$party)) {
    $substring = substr($usetable, 2); 
    $sql = "INSERT INTO tborder VALUES ('$ordernum','Active','$hour:00:00','$date','$substring',$party,0,'$_SESSION[User]','$_SESSION[User]',$numtable,$branch,'$creditnumber')";
    mysqli_query($con, $sql);
    $sql = "UPDATE $usetable SET Booked='TRUE' WHERE TableNumber='$numtable' AND Hour='$hour'";
    mysqli_query($con, $sql);
    findmail($hour, $date);
    echo "<script>window.alert('Order Confirmed!! Details in mail')</script>";
  } 
  else if(!checkOrder($usetable,$numtable,$hour,$branch,$party)){
    echo "<script>window.alert('Wrong details for order, mark all buttons in the same square')</script>";
  }
  else {
    echo "<script>window.alert('Wrong details for credit card!Try Again')</script>";
  }





}
mysqli_close($con);
?>