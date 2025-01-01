<?php
        $server = "localhost";
        $user = "root";
        $pass = "";

        $con = new mysqli($server, $user, $pass, "php");

        if($con->connect_error){
            die("Connection Error");
        }

    ?>