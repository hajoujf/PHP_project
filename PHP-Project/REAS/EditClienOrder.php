<?php

require_once('dbCon.php');
include 'navbar.php';
session_start();
$user = $_SESSION['User'];
$numorder = $_GET['ordernum'];
$sql = "SELECT * FROM tborder where Username='$user' AND Number='$numorder'";
$result = $con->query($sql);

$data = $result->fetch_assoc();
mysqli_close($con);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="jumbotron">
    <h1 class="text-center">
        Orders
    </h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-12">
            <form action="ModifyClient.php" method="POST">
                <h3>Edit</h3>
                <div class="form-group">
                    <label for="name">OrderNumber</label>
                    <input type="text" class="form-control" name="ordernum" id="ordernum" value="<?= $numorder ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?= $data['Name'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">PartySize</label>
                    <input type="text" class="form-control" name="party" id="party" value="<?= $data['PartySize'] ?>">
                </div>
                <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">
            </form>
        </div>
    </div>
</div>
</body>