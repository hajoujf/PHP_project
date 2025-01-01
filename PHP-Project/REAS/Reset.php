<?php include 'CheckReset.php' ?>
<html>
<link rel=stylesheet href="CSS/Reset.css">
<body>
    <form action="" method="post">
        <div class="imgcontainer">
            <img src="https://images.unsplash.com/photo-1587899897387-091ebd01a6b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cmVzdGF1cmFudCUyMHRhYmxlfGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                width="400" height="268">
        </div>
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="Username" required>
            <label><b>Given Password</b></label>
            <input type="text" placeholder="Password from mail" name="Randpass" required>
            <label><b>New Password</b></label>
            <input type="password" placeholder="New Password" name="Password" required>
            <label><b>Repeat New Password</b></label>
            <input type="password" placeholder="Repeat Password" name="PasswordAgain" required>
            <button type="submit" name="Reset">Reset</button>
        </div>
    </form>
</body>
</html>