    <?php include 'navbar.php';?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel='stylesheet' href="CSS/clientreg.css"/>
      <div style="padding-top:70px">
        <form action=""  method='post'>
            <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
              <input type="text" placeholder="Username" name="uname" id="uname" required>
             <!-- <input type="text" placeholder="Last Name" name="lname" id="lname" required>
                <br>-->
              <input type="text" placeholder="Email" name="email" id="email" required>             
              <input type="text" placeholder="Phone Number" name="pnum" id="pnum" required>
              <br>
              <input type="password" placeholder="Password" name="psw" id="psw" required>                
              <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
             <div class="buttons"> 
             <button type="submit" class="registerbtn" name='reg'>Register</button>
             <button type="reset" class="resetbtn">Reset</button>
             </div>
            </div>
            <br>
            <div class="container signin">
              <p>Already have an account? <a href="logboth.php">Sign in</a>.</p>
            </div>
          </form>
</div>
<?php include 'NewUser.php';?>
