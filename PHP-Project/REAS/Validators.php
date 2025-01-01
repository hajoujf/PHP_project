<?php
require_once('dbCon.php');
/*
function checkCreditCard($number, $cvv, $holder, $username, $date)
{
    echo '<script type="text/javascript">
    window.onload = function ()  { alert("hihi"); } 
        </script>';
    if ($cvv >=100 && $cvv<=999 && userExists($username) && ctype_alpha($holder) ) {
        
        return true;
    }
    return false;



}*/
function userExists($user)
{
    $result = mysqli_query($con, "SELECT * FROM tbusers");
    while ($row = mysqli_fetch_array($result)) {
        if ($row['Username'] == $user) {
            return true;
        }
    }
    return false;
}

function checkname($name)
{
    for ($i = 0; $i < strlen($name); $i++) {
        if (!($name[$i] >= 'a' && $name[$i] <= 'z' || $name[$i] >= 'A' && $name[$i] <= 'Z')) {
            return false;
        }
    }
    return true;
}

function checkPassword($password)
{
    if (strlen($password) < 8) {
        return false;
    }
    $cnt1 = 0;
    $cnt2 = 0;
    for ($i = 0; $i < strlen($password); $i++) {
        if ($password[$i] >= 'A' && $password[$i] <= 'Z' || $password[$i] >= 'a' && $password[$i] <= 'z')
            $cnt1++;
        else if ($password != ' ')
            $cnt++;
        else
            return false;

    }
    return $cnt1 > 0 && $cnt2 > 0;
}

mysqli_close($con);
?>