<?php  
    require_once('dbCon.php');

if (isset($_POST['reg'])){
    $user=$_POST['uname'];
    $psw=$_POST['psw'];
    $email=$_POST['email'];
    $phone=$_POST['pnum'];

    $result = mysqli_query($con,"INSERT INTO  tbusers (Username,Password,Email,Phone)
    VALUES ('$user', '$psw','$email','$phone')");

    if($result){
        header('Location: logboth.php');
    }
   
}
    
    mysqli_close($con);
?>
</body>
</html>








?>