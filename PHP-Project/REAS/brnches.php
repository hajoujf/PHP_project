<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    require_once('dbCon.php');
    $sql = "SELECT * FROM `tbbranch`";
    $result = $con->query($sql);

?>
<body>
<center><h1 style=" margin-top:40;color: white">Manage Your Branches!</h1></center><br>
    <?php
    echo "<center><a href='./BranchScripts/MForm.php' ><button class='btn btn' style='background-color:#7e003b;color:white ;width:150px' > Add Resturaunt </button></a></center>";

    if($result->num_rows > 0 ){
        echo "<div class='container' style='margin-top:10px'>";
        echo "<div class='row' style='width:1260px'>";
        while($row = $result->fetch_assoc()){
            echo "<div class='card border-dark' style='width:215px;margin-right:20px;margin-top:20px;height:230px'>";
                echo "<div class='card-header'><font style='color:#7e003b;font-size:16px'>Call us:</font>+972" .$row['Phone']."</div>";
                    
                echo "<div class='card-body'>";
                    echo "<h5 style='font-size:16px;margin-bottom:14px'> Address: ". $row['Address'] ."</h5>";
                    echo "<div style='font-size:15px' ><font style='color:#7e003b;font-size:15px'>Opening Hours: </font>". $row['Open'] ."</div>";
                    echo "<div style='font-size:15px;margin-bottom:14px'><font style='font-size:14px;color:#7e003b;margin-top:10px'>Closes at: </font>". $row['Close'] ."</div>";
                    echo "<a class='btn btn-dark' href='./BranchScripts/Edit.php?id=" .$row['BranchID'] ."'> Update </a>";
                    echo "<a class='btn btn-' style='background-color:#7e003b;color:white;margin-left:10px' href='./BranchScripts/delete.php?id=" .$row['BranchID'] ."'> Delete</a>";
                    echo "</div>";
                echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    }
?>
        <!-- // if($result->num_rows > 0 ){
        //     while($row = $result->fetch_assoc()){
        //         echo "<tr class='table-hover'>";
        //         echo "<td>" . $row['BranchID'] . "</td>";
        //         echo "<td>" . $row['Name'] . "</td>";
        //         echo "<td> Rs. " . $row['Phone'] . "</td>";
        //         echo "<td>" . $row['Address'] . "</td>";
        //         echo "<td>" . $row['Open'] . "</td>";
        //         echo "<td>" . $row['Close'] . "</td>";
        //         echo "<td>";
        //         echo "<div class='btn-group' style='width:60px'>";
        //         echo "<a class='btn btn-dark' href='./BranchScripts/Edit.php?id=" .$row['BranchID'] ."'> Update </a>";
        //         echo "<a class='btn btn-danger' href='./BranchScripts/delete.php?id=" .$row['BranchID'] ."'> Delete</a>";
        //         echo "</div>";
        //         echo "</td>";
        //         echo "</tr>";
        //     }
        // }
        //         echo "<tr class='table-secondary'>";
        //         echo "<td></td>";
        //         echo "<td></td>";
        //         echo "<td> </td>";
        //         echo "<td></td>";
        //         echo "<td> </td>";
        //         echo "<td></td>";
        //         echo "<td style='width:220px' >";
        //         echo "<a href='./BranchScripts/MForm.php' ><button class='btn btn' style='background-color:black;color:white ;width:150px' > Add Resturaunt </button></a>";
        //         echo "</td>";
        //         echo "</tr>";                 -->
</div>
</body>
