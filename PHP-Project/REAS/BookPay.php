<?php 
     require_once('dbCon.php');
    $branch = $_GET['branch'];
    ?>
<html>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
    *{
        font-family:Arial;
    }
    #sunday:checked~.sunday {
    display: block;
  }
  
  #monday:checked~.monday {
    display: block;
  }
  
  #tuesday:checked~.tuesday {
    display: block;
  }
  
  #wednesday:checked~.wednesday {
    display: block;
  }
  
  #thursday:checked~.thursday {
    display: block;
  }
  body{
    margin: 0px;
    padding: 0px;
  }
  .topnav {
    padding-top: 12px;
  position: fixed!important; 
  z-index: 1!important; 
  overflow: hidden!important;
  padding-left: 89.3%!important;
  width: 100%!important;
  }
</style>
<body>
    <div class='topnav'>
<a href='branches.php' style="text-align: center;height:10px;padding-top:30px"><input  type="button" style='cursor:pointer;font-weight:bold;background-color:red;' value="BACK"></a>
<a href="homepage.php"><img src="./Images/navLogo.png" style="height:40px;"></a>
</div>
    <form method='POST' action='startbooking.php' style="padding-top: 2px;">
        <center>
            <h1> Book A Table </h1>
              <h3> Pick A day </h3>
        <input type='radio' name='day' value='tbsunday' id='sunday' /> Sunday <br>
        <div  class='sunday' hidden> 
        <table border='1'>
            <?php
            $branch = $_GET['branch'];
            $sql = "SELECT * from tbsunday WHERE Booked='FALSE'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $sql2 = "SELECT * from tbtable WHERE BranchID='$branch' AND Number='$row[TableNumber]' ";
                $row2 = mysqli_fetch_array(mysqli_query($con, $sql2));
                if ($row != null && $row2 != null) {
                    echo "<tr><th>Option</th></tr> ";
                    echo "<td>";
                    echo "<input type='radio' name='branch' value='$row2[BranchID]' />Branch Number: " . $row2['BranchID'];
                    echo "<br>";
                    echo " <input type='radio' name='table' value='$row[TableNumber]'/>Table Number:" . $row['TableNumber'];
                    echo "<br>";
                    echo "<input type='radio' name='hour' value='$row[Hour]'/>At:" . $row['Hour'];
                    echo "<br>";
                    echo "<input type='radio' name='party' value='$row2[PartySize]' />People:" . $row2['PartySize'];
              
                    echo "</td>";
                }
            }
            ?>
        </table>
        </div>
        <hr style="width:40%;height:0.5%;border: 1px solid red;">
        <br>
        
        <input type='radio' name='day' value='tbmonday' id='monday' /> Monday <br>
        <div class='monday' hidden> 
        <table border='1' >
            <?php
            $sql = "SELECT * from tbmonday WHERE Booked='FALSE'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $sql2 = "SELECT * from tbtable WHERE Number='$row[TableNumber]' AND BranchID='$branch'";
                $row2 = mysqli_fetch_array(mysqli_query($con, $sql2));
                if ($row != null && $row2 != null) {
                    echo "<tr> <th>Option </th> </tr> ";
                    echo "<td>";
                    echo "<input type='radio' name='branch' value='$row2[BranchID]'/>Branch Number: " . $row2['BranchID'];
                    echo "<br>";
                    echo " <input type='radio' name='table' value='$row[TableNumber]'/>Table Number:" . $row['TableNumber'];
                    echo "<br>";

                    echo "<input type='radio' name='hour' value='$row[Hour]'/>At:" . $row['Hour'];
                    echo "<br>";
                    echo "<input type='radio' name='party' value='$row2[PartySize]'/>People:" . $row2['PartySize'];
                    echo "</td>";
                }
            }

            ?>
        </table>   </div>
        <hr style="width:40%;height:0.5%;border: 1px solid red;">
        <br>
      
        <input type='radio' name='day' value='tbtuesday' id='tuesday' /> Tuesday <br>
        <div class='tuesday' hidden>
        <table border='1' >
            <?php
            $sql = "SELECT * from tbtuesday WHERE Booked='FALSE'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $sql2 = "SELECT * from tbtable WHERE Number='$row[TableNumber]' AND BranchID='$branch'";
                $row2 = mysqli_fetch_array(mysqli_query($con, $sql2));
                if ($row != null && $row2 != null) {
                    echo "<tr> <th>Option </th> </tr> ";
                    echo "<td>";
                    echo "<input type='radio' name='branch' value='$row2[BranchID]'/>Branch Number: " . $row2['BranchID'];
                    echo "<br>";
                    echo " <input type='radio' name='table' value='$row[TableNumber]'/>Table Number:" . $row['TableNumber'];
                    echo "<br>";

                    echo "<input type='radio' name='hour' value='$row[Hour]'/>At:" . $row['Hour'];
                    echo "<br>";
                    echo "<input type='radio' name='party' value='$row2[PartySize]'/>People:" . $row2['PartySize'];

                    echo "</td>";
                }
            }
            ?>
        </table>  </div>
        <hr style="width:40%;height:0.5%;border: 1px solid red;">
        <br>
       
        <input type='radio' name='day' value='tbwednesday' id='wednesday' /> Wednesday <br>
        <div class='wednesday' hidden>
        <table border='1' >
            <?php
            
            $sql = "SELECT * from tbwednesday WHERE Booked='FALSE' ";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $sql2 = "SELECT * from tbtable WHERE Number='$row[TableNumber]'AND BranchID='$branch' ";
                $row2 = mysqli_fetch_array(mysqli_query($con, $sql2));
                if ($row2 != null && $row!=null) {
                    echo "<tr> <th>Option </th> </tr> ";
                    echo "<td>";
                    echo " <input type='radio' name='branch' value='$row2[BranchID]'/>Branch Number:" . $row2['BranchID'];
                    echo "<br>";
                    echo " <input type='radio' name='table' value='$row[TableNumber]'/>Table Number:" . $row['TableNumber'];
                    echo "<br>";
                    echo "<input type='radio' name='hour' value='$row[Hour]'/>At:" . $row['Hour'];
                    echo "<br>";
                    echo "<input type='radio' name='party' value='$row2[PartySize]'/>People:" . $row2['PartySize'];
                    echo "</td>";
                }
            }
            echo "</tr>";
            ?>
        </table> </div>
        <hr style="width:40%;height:0.5%;border: 1px solid red;">
        <br>
        
        <input type='radio' name='day' value='tbthursday' id='thursday' /> Thursday <br>
        <div class='thursday' hidden>
        <table border='1' >
            <?php
            $sql = "SELECT * from tbthursday WHERE Booked='FALSE'";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {

                $sql2 = "SELECT * from tbtable WHERE Number='$row[TableNumber]' AND BranchID='$branch'";
                $row2 = mysqli_fetch_array(mysqli_query($con, $sql2));
                if ($row2 != null && $row != null) {
                    echo "<tr><th>Option </th> </tr> ";
                    echo "<td>";
                    echo " <input type='radio' name='branch' value='$row2[BranchID]'/>Branch Number:" . $row2['BranchID'];
                    echo "<br>";
                    echo " <input type='radio' name='table' value='$row[TableNumber]'/>Table Number:" . $row['TableNumber'];
                    echo "<br>";
                    echo "<input type='radio' name='hour' value='$row[Hour]'/>At:" . $row['Hour'];
                    echo "<br>";
                    echo "<input type='radio' name='party' value='$row2[PartySize]'/>People:" . $row2['PartySize'];

                    echo "</td>";
                }

            }
           
            ?>

        </table>
        </div>
        <hr style="width:40%;height:0.5%;border: 1px solid red;">        
        <input type="submit" value="BOOK A TABLE" style='cursor:pointer;font-weight:bold;background-color:red;'/>
        </center>
        <img src="images/booktable.png" width="500px"/>
    </form>
<?php



mysqli_close($con);
?>