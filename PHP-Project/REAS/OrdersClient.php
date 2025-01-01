<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php include 'navbar.php';
    require_once('dbCon.php');

$user = $_SESSION['User'];
$sql = "SELECT * FROM tborder where Username='$user'";
$result = $con->query($sql);

?>
<div style="padding-top:55px">
<table class="table table-striped table-borderrer">
    <tr>
        <th>Order Number</th>
        <th>Name</th>
        <th>Time</th>
        <th>Date</th>
        <th>PartySize</th>
        <th> Day </th>
        <th>Table</th>
        <th>BranchName</th>
        <th>Branch Address </th>
        <th>Change </th>
    </tr>

    <?php
    $user = $_SESSION['User'];
    $today = date("Y-m-d");
    $result = mysqli_query($con, "SELECT * FROM tborder where Username='$user' ");
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $status = $row['Status'];
            if ($status == 'Active') {
                if($row['Date']>=$today){
                echo "<tr>";
                echo "<td>" . $row['Number'] . "</td>";
                $sql = "SELECT Name FROM tbbranch WHERE BranchID=$row[BranchID]";
                $res = mysqli_query($con, $sql);
                $name = mysqli_fetch_assoc($res);
                $real_name = $name['Name'];
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Time'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['PartySize'] . "</td>";
               echo "<td>" .$row['Day']."</td>";
                //echo "<td>" . $row['Username'] . "</td>";
                //echo "<td>" . $row['TimeRemaining'] . "</td>";
                echo "<td>" . $row['TableNumber'] . "</td>";
                $brachID = $row['BranchID'];
                /*$val = mysqli_query($con,"SELECT Email FROM tbusers where Username='$use'");
                $real_val = mysqli_fetch_assoc($val);
                $mail = $real_val["Email"]; */

                //$brachID = $row['BranchID']; //select the branch's name and the address;
                echo "<td>" . $real_name . "</td>";
                $sql2 = "SELECT Address FROM tbbranch WHERE BranchID=$row[BranchID]";
                $res = mysqli_query($con, $sql2);
                $address = mysqli_fetch_assoc($res);
                //$real_address = $address['Address']
    
                echo "<td>" . $address['Address'] . "</td>";
                echo "<td>";
                echo "<div class='btn-group'>";
                echo "<a class='btn btn-secondary' href='EditClienOrder.php?ordernum=$row[Number]'> Update </a>";
               
                $params = array('num' => $row['Number'], 'table' => $row['TableNumber'], 'hour' => $row['Time'],'day'=>$row['Day']);
                $query = http_build_query($params);

                echo "<a class='btn btn-danger' href='deleteOrder.php?$query'> Delete</a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }

        }
    }
}
    mysqli_close($con); ?>
</table>
<div>