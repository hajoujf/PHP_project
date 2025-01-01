<link rel=stylesheet href="CSS/ViewOrders.css">
<?php
    require_once('dbCon.php');
    $sql = "SELECT * FROM `tborder`";
    $result = $con->query($sql);
?>
<div style="color: #7e003b;text-align: center;padding-top:20px">
  <h1>Orders</h1>
  <p>View Orders since day One</p>
</div>
    <table class="table table-striped table-borderrer table-light" style="width:1200px; margin:0px auto">
    <tr>
        <th>Order_Id</th>
        <th>Customer Name</th>
        <th>Date</th>
        <th>Party Size</th>
        <th>Status</th>
    </tr>
    <?php
        if($result->num_rows > 0 ){
            while($row = $result->fetch_assoc()){
                echo "<tr class='table-hover'>";
                echo "<td>" . $row['Number'] . "</td>";
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['PartySize'] . "</td>";
                echo "<td>" . $row['Status'] . "</td>";
                echo "</div>";
                echo "</tr>";
            }
        }              
    ?>
    </table>
</div>