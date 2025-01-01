<?php include 'sendmail.php';
require_once('dbCon.php');
if(!isset($_SESSION)){
session_start();
}

    if (isset($_POST['submit'])){
    $_SESSION["User"]=$_POST['uname'];
    $use=$_POST['uname'];
    $psw=$_POST['psw']; 
    $result = mysqli_query($con,"SELECT * FROM tbusers");
    
     while($row = mysqli_fetch_array($result)){
        if($row['Username']==$use){
            if($row['Password']==$psw){
                if($row['UType']=="Admin")
                    header('Location: ./Main.php');
                else
                    header('Location: ./homepage.php');
            }
            else {
                echo '<script type="text/javascript">
                window.onload = function () { alert("Wrong password"); } 
                </script>'; 
               
                $use = "$use";
                $val = mysqli_query($con,"SELECT Attempt FROM tbusers where Username='$use'");
                $real_val = mysqli_fetch_assoc($val);
                $property = $real_val["Attempt"];
                $property++; 
                $sql = mysqli_query($con,"UPDATE tbusers SET Attempt = $property WHERE Username='$use'");
                if($property>=3){
                    $val = mysqli_query($con,"SELECT Email FROM tbusers where Username='$use'");
                    $real_val = mysqli_fetch_assoc($val);
                    $mail = $real_val["Email"];
                    $property = 0;
                    $sql = mysqli_query($con,"UPDATE tbusers SET Attempt = $property WHERE Username='$use'");
                    //change use to name in next line
                    $random_Password=send_mail($mail,$use);
                    $sql = mysqli_query($con,"UPDATE tbusers SET RandomPassword = '$random_Password' WHERE Username='$use'");
                    header('Location: Reset.php');
                    echo '<script type="text/javascript">
                        window.onload = function () { alert("User Banned"); } 
                    </script>'; 
                    
                }
                
        }
    }
        
    }
}
    
    
    mysqli_close($con);
?>
</body>
</html>


<?php

//$Username=array('alaa'=>'alaabarazi','hfr'=>'alaa_barazi','h'=>'h','hfdhfv'=>'abarazi','hello'=>'alaab');

/*$Username=array("alaa","hfr","h","hchvd","hello","ab","alaaba");
$Password=array("alaabarazi","h","alaa_barazi","alaab","alaaba");

function isTrue($use,$pas){
    global $Username,$Password;
    for($i=0;$i<count($Username);$i++){
        if($Username[$i]==$use && $Password[$i]==$pas){
                return TRUE;
        }
    }
    return FALSE;
}*/



?>