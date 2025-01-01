
<?php
include 'navbar.php';
require_once('dbCon.php');
    session_start();
$user = $_SESSION['User'];
$sql = "SELECT * FROM tbusers where Username='$user'";
$result = $con->query($sql);

$data = $result->fetch_assoc();
mysqli_close($con);
?>
<html>
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>
<div class="jumbotron">
    <h1 class="text-center">
        Your Details
    </h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-12">
            <form action="ModifyClientDetails.php" method="POST">
                <h3>Edit</h3>
                <div class="form-group">
                    <label for="name">UserName</label>
                    <input type="text" class="form-control" name="Name" value="<?= $data['Username'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">Email</label>
                    <input type="text" class="form-control" name="Email" value="<?= $data['Email'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">Phone</label>
                    <input type="text" class="form-control" name="Phone" value="<?= $data['Phone'] ?>">
                </div>
                <input type="submit" name="editDetails" value="submit" class="btn btn-primary btn-block">
            </form>
        </div>
    </div>
</div>
</body>
</html>


