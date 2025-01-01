
<html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <body>

 

<?php
include 'navbar.php';
require_once('dbCon.php');
$sql = "SELECT * FROM tbbranch";
$result = mysqli_query($con, $sql);
echo " <center><h1 style='padding-top:90px'> Our Branches </h1><br>";
echo '<div class="card-deck col d-flex justify-content-center" >';
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='card border-dark' style='max-width: 20rem;'><center>";
    echo "<div class='card-footer'><font style='color:#7e003b;font-size:16px'>Call us:</font>+972-" .$row['Phone']."</div><br>";
  echo "<img class='card-img' style='width:100%' src='images/branch.png'>";
  echo "<div class='card-body'>";
    echo "<h5 class='card-title'>$row[Address]</h5>";
    echo "<div style='font-size:15px' ><font style='color:#7e003b;font-size:15px'>Opening Hours: </font>". $row['Open'] ."</div>";
    echo "<div style='font-size:15px;margin-bottom:14px'><font style='font-size:14px;color:#7e003b;margin-top:10px'>Closes at: </font>". $row['Close'] ."</div>";
    if(isset($_SESSION['User'])){
        if($_SESSION['User']==null)
            echo "<a href='nosession.php'><p class='btn btn-danger' >Book A Table</p></a>";   
        else
            echo "<a href='BookPay.php?branch=$row[BranchID]'><p class='btn btn-danger' >Book A Table</p></a>";   
    }
    else
        echo "<a href='nosession.php'><p class='btn btn-danger' >Book A Table</p></a>";   
    echo "</div>";
    echo "</div>";


}
 echo "</div>  </center></center> <br> <br>";

//echo "<center> <a class='btn btn-danger' href='BookPay.php' > BOOK A TABLE! </a> </center>";
?>

</body>
</html>
