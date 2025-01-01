<?php
    require_once('dbCon.php');
function checkDiff3($newpass,$user){
    $notfound = 0;
    $sql = "SELECT * from tblastpasswords where Username='$user'";
    $result=mysqli_query($GLOBALS['con'], $sql);
    while($row=mysqli_fetch_array($result)){
        if($row==null){
            break;
        }
        else{
            if($row['Password']==$newpass){
                $notfound = 1;
                return false;
            }
        }
    }
    /*if ($result = mysqli_query($con, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result ); */
    $sql = "SELECT * FROM tblastpasswords WHERE Username='$user'";
    $result2 = mysqli_query($GLOBALS['con'], $sql);
    //$rowcount = mysqli_num_rows($result2);
    //count manually in while with row fetch array
    //while()
    $countpassword = 0;
    while($row=mysqli_fetch_assoc($result2)){
        if($row['Username']==$user){
            $countpassword++;
        }
    }
    if($countpassword<3){
        $sql2 = mysqli_query($GLOBALS['con'],"INSERT INTO tblastpasswords VALUES ('$newpass',NOW(),'$user')");
        return true;
    }
    else{
       $sql3= mysqli_query($GLOBALS['con'],"DELETE FROM tblastpasswords WHERE Username='$user' ORDER BY Date ASC LIMIT 1");
       $sql2 = mysqli_query($GLOBALS['con'],"INSERT INTO tblastpasswords VALUES ('$newpass',NOW(),'$user')");
        return true;
    }
    
    //first check if there are three lines for this user
    // if yes check that the new one not found there
    //      if not there delete the oldest one and putthe new one(find the oldest with sort)
    //      if found return false already there...
    //if now just insert
    
}
if (isset($_POST['Reset'])) {
    $random = $_POST['Randpass'];
    $username = $_POST['Username'];
    $Password = $_POST['Password'];
    $RepeatPassword = $_POST['PasswordAgain'];
    $result = mysqli_query($con, "SELECT * FROM tbusers where Username ='$username'");
    $row = mysqli_fetch_array($result);
    if ($row!=null && $row['RandomPassword'] == $random &&$Password!=$row['Password'] && $Password == $RepeatPassword && checkDiff3($Password,$username)) {
        $sql1 = mysqli_query($con, "UPDATE tbusers SET RandomPassword = '$random' WHERE Username='$username'");
        $sql = mysqli_query($con, "UPDATE tbusers SET Password = '$Password' WHERE Username='$username'");
        //Update queries
        echo '<script type="text/javascript">
        window.onload = function () { alert("Password Changed"); } </script>';
        header('Location: logboth.php');
    } 
   
    else {
        if ($Password != $RepeatPassword) {
            echo '<script type="text/javascript">
        window.onload = function () { alert(Different Passwords"); } </script>';
        } else {
            echo '<script type="text/javascript">
        window.onload = function () { alert("Old Password"); } </script>';
        }
    }

}



mysqli_close($con);
?>
</body>

</html>