<?php
require_once('./dbCon.php');
session_start();
?>
<div class="sidenav">
<a href="homepage.php"><img src="./Images/navLogo.png" style="height:50px;margin-left:35px"></a>
  <a href="#home">About</a>
  <a href="#branches">Manage Branches</a>
  <a href="#orders">View Orders</a>
  <a href="#Admins">Admins</a>
  <a href="#Reviews">Show Reviews</a>
  <a href='logout.php' style='background-color:white;color:black'>Logout</a>
</div>

<div id="home">
		<div class="content">
            <center>
            <img src="./Images/profile.png" style="height:190px;margin-bottom:15px;">
			<h1 style="color: black">Welcome<?php  echo " ".$_SESSION['User'];?>!</h1>
            <p style="color:#7e003b">This is the Manager's side of the website You can edit Branches' details, add and remove Admins, look at Complaints and view orders </p>
            <a style="background-color: black" class="btn btn" href="#branches" > Edit Branches </a>
            <a style="background-color: black" class="btn btn" href="#orders" > Show Orders</a>
            <a style="background-color: black" class="btn btn" href="#Admins" > View Admins</a><br><br>
            <a style="background-color: #7e003b;width:370px" class="btn btn" href="UpdateDetails.php" > Update Profile Details</a>
            <center>
		</div>
	</div>
	<div id="branches">
		<div class="content">
        <?php include "brnches.php"?>
    </div>
	</div>
	<div id="orders">
		<div class="content">
            <?php
            include "ViewOrders.php";
            ?>
    	</div>
	</div>
	<div id="Admins">
		<div class="content">
            <?php include "CAdmin.php"?>
        </div>
	</div>
    
	<div id="Reviews" >
		<div class="content">
            <?php include "Reviews.php"?>
        </div>
	</div>
<link href="./CSS/HomeP.css" rel="stylesheet">
