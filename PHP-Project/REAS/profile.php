<?php
require_once('./dbCon.php');
include "navbar.php";
$name=$_SESSION['User'];
$sql = "SELECT * FROM `tbusers` WHERE Username='$name'";
$result = $con->query($sql);
$data = $result->fetch_assoc();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
.d{
    padding-top: 180px;
}
.cardee {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 350px;
    height:300px;
    margin: auto;
    font-family: arial;
    text-align: center;
  }
  body{
    background-color: #7e003b;
    
  }
</style>
<div class="d">
<div class="container d-flex justify-content-center align-items-center">
  <div class="card py-4">
    <div class="d-flex justify-content-center align-items-center">
      <div class="round-image">
        <img src="./Images/pfp.jpg" class="rounded-circle" width="97">
      </div>
    </div>
    <div class="text-center">
      <h4 class="mt-3"><?php echo "".$_SESSION['User'].""?></h4>
      <span>Email: <?= $data['Email']?></span>
      <div class="px-5">
        <p class="content">Phone: +972<?= $data['Phone']?></p>
        <a href="UpdateDetails.php"><button class="btn btn-dark">Edit Details</button></a>
        </div>          
    </div>
  </div>
</div>
</div>