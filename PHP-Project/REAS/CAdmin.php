<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./CSS/Bran.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    require_once('dbCon.php');
    $sql = "SELECT * FROM `tbadmin`";
    $result = $con->query($sql);

?>
<center><h1 style=" margin-top:70;color: white">Manage Your Admins!</h1></center>
<table class="table table-striped table-borderrer table-light" style="width:1200px; margin:90px auto">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>email</th>
        <th>action</th>
    </tr>
    <?php
        if($result->num_rows > 0 ){
            while($row = $result->fetch_assoc()){
                echo "<tr class='table-hover'>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>";
                echo "<div class='btn-group' style='width:60px'>";
                echo "<a class='btn btn-dark' href='./AdminScripts/Edit.php?id=" .$row['ID'] ."'> Update </a>";
                echo "<a class='btn btn-danger' href='./AdminScripts/delete.php?id=" .$row['ID'] ."'> Delete</a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
        }
                echo "<tr class='table-secondary'>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td> </td>";
                echo "<td></td>";
                echo "<td style='width:220px' >";
                echo "<a href='./AdminScripts/newAdminForm.php' ><button class='btn btn' style='background-color:black;color:white ;width:150px' > Add Admin </button></a>";
                echo "</td>";
                echo "</tr>";                
    ?>
</table>
</div>