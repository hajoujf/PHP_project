<?php
    if(!isset($_GET['id'])){
        // redirect to show page
        die('id not provided');
    }
    require_once('../dbCon.php');
    $id =  $_GET['id'];
    $sql = "SELECT * FROM `tbbranch` where AdminID = $id";
    $result = $con->query($sql);
    if($result->num_rows != 1){
        // redirect to show page
        die('id is not in db');
    }
    $data = $result->fetch_assoc();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<a href="./../Main.php"><img src="../Images/navLogo.png" style="height:50px;margin-left:35px"></a>
<div class="jumbotron">
        <h1 class="text-center">
            Product Company
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="Modify.php?id=<?= $id ?>" method="POST">
                <h3>Edit Form</h3>
                    <div class="form-group">
                        <label>BranchID</label>
                        <input type="text" class="form-control" name="branchid" id="branchid" value="<?= $data['BranchID']?>">
                    </div>
                    <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
    
</body>
