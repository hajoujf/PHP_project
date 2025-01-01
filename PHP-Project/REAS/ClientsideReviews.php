<?php include 'navbar.php';?>
<body style="background-color:#7e003b">
<div style="padding-left:160px">
<?php 
session_start();
if(isset($_SESSION['User'])){
    echo "<div style='padding-top:30px; width:1200px;'>";
    echo "<div class='row d-flex justify-content-center'>";
        echo "<div class='col-md-12 col-lg-10' >";
          echo "<div class='card text-dark' >";
            echo "<div class='card-body p-4'>";
            echo "<h4 class='mb-0' style='color:#7e003b'>Express your Thoughts</h4><br>";
              echo "<div class='d-flex flex-start' style='margin-bottom:10px;margin-top:15px; ' >";
                echo "<img class='rounded-circle shadow-1-strong me-3' style='margin-top:-5px;'  src='./Images/pfp.jpg' alt='avatar' width='60' height='60' />";
                echo "<div style='margin-left:15px;'>";
                echo "<form action='./ReviewsScripts/submit.php' method='POST'>";
                  echo "<h6 class='fw-bold mb-1' style='padding-top:3px' name='uname' id='uname'>". $_SESSION['User'] ."</h6>";
                  echo "<p style='padding-left:3px'>Leave a Massage!</p>";
                  echo "<textarea class='form-control' id='comment' name='comment' rows='4' placeholder='Comment' style='background: #fff;margin-top:10px;margin-bottom:10px;width:850px'></textarea>";
                  echo "<input type='submit' name='submitForm' value='submit' class='btn btn-dark' style='float:right'>";
                  echo "</form>";
                  echo "</div>";
                  echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";    
    echo "</div>";    
 }
include "Reviews.php";
?>
</div>
</body>