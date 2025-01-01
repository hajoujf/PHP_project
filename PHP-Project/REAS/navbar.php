<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="CSS/navbar.css">
<?php
 session_start();
?>
<body>
<div class="topnav">
  <a href="ClientsideReviews.php">Reviews</a>
  <?php
  if(isset($_SESSION['User'])){
    if($_SESSION['User']==null)
      echo "<a href='nosession.php'>Orders History</a>";
    else
      echo "<a href='OrdersClientHistory.php'>Orders History</a>";
  }
  else
    echo "<a href='nosession.php'>Orders History</a>";
  ?>
  <a href="branches.php">Resturaunts</a>  
  <a href="homepage.php"><img src="./Images/navLogo.png" style="height:27px"></a>
  <?php
  if(isset($_SESSION['User'])){
    if($_SESSION['User']==null){
      echo "<a href='nosession.php'>Orders</a>";
      echo "<a href='nosession.php'><i class='fa fa-ticket' aria-hidden='true'></i>Coupon</a>";
    }      
    else{
      echo "<a href='OrdersClient.php'>Orders</a>";
      echo "<a href='Coupon.php'><i class='fa fa-ticket' aria-hidden='true'></i>Coupon</a>";
    }
  }
  else{
    echo "<a href='nosession.php'>Orders</a>";    
    echo "<a href='nosession.php'><i class='fa fa-ticket' aria-hidden='true'></i>Coupon</a>";
  }
  ?>
  <a href='help.php'><i class='fa fa-question'  aria-hidden='true'></i> Help</a>
  <?php
  if(isset($_SESSION['User'])){
  if($_SESSION['User']==null){
    echo "<a href='logboth.php' style='margin-left:60px' >Login</a>";
    echo "<a href='clientreg.php' style='background-color:#7e003b;'><i class='fa fa-user-plus' aria-hidden='true'></i> SignUp</a>";
  }
  else{
    echo "<a href='profile.php' style='margin-left:60px'>Profile</a>";  
    echo "<a href='logout.php' style='background-color:#7e003b;'>Logout</a>";
  }
  }
  else{
    echo "<a href='logboth.php' style='margin-left:60px' >Login</a>";  
    echo "<a href='clientreg.php' style='background-color:#7e003b;'><i class='fa fa-user-plus' aria-hidden='true'></i> SignUp</a>";
  }
  ?>

</div>
</body>