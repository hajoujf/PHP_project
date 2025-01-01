<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php 
include 'navbar.php';
require_once('dbCon.php');
$today = date("Y-m-d");



//check if had coupons
$sql = "SELECT * FROM tbcoupon";
$result = mysqli_query($con, $sql);

$cnt1 = 0; $cnt2 = 0;
while($row=mysqli_fetch_assoc($result)){
    if($row['Username']==$_SESSION['User'] ){
        $cnt1++;
    }
}
//check if ordered al least 5 times
$sql2 = "SELECT * FROM tborder";
$result2 = mysqli_query($con,$sql2);
while($row2=mysqli_fetch_assoc($result2)){
    if($row2['Username']==$_SESSION['User'] && $row2['Date']<$today){
        $cnt2++;
    }
}
if($cnt1==0 && $cnt2>=5){
    $coupon = randCouponNumber();
    $sql3 = "INSERT INTO tbcoupon VALUES('$coupon','$_SESSION[User]')";
    mysqli_query($con, $sql3);
    findmail($coupon);
    header('Location: GetCoupon.php');
    echo '<script type="text/javascript">
        window.onload = function () { alert("Check youre Email"); } </script>';
}
else{
    
    if($cnt2<5){
        echo '<script type="text/javascript">
        window.onload = function () { alert("You didnt order enought times to get coupon!try next time!:)"); } </script>';
    //    header('Location: homepage.php');
    }
    else{
        echo '<script type="text/javascript">
        window.onload = function () { alert("You"ve already got coupon"); } </script>';
       // header('Location: homepage.php');
    }
}
function findmail($coupon)
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
        $body .= '<h1>Once in a life time coupon</h1>';
        $body .= '<p>Thank you for using our site :) ';
        $body .= '</p>';
        $body .= '<p style="color:#FF0000;font-size:18px;">Show this to the manager when you arrive to the restaurant</p>';
        //another image cant send this one its internal
        //$body .= "<img src='/images/coupon.jpg'/>";
        $body .= "<img src='http://www.hamburguesaperfecta.com/sites/default/files/blogger_importer/s1600/wendy-logo.jpeg'/>";
        $body .= '</body></html>';
        $subject = "Coupon!!";
        mail($to_email, $subject, $body, $header);

        
    }

function randCouponNumber(){
    $num = mt_rand(1000000000000, 10000000000000000);
    return $num;
}

?>