<?php include 'navbar.php';
// echo "<br><br>"?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/home.css">
<html>
<body style="background-color:gainsboro;">
<div id="home" style="background-attachment: fixed;background-repeat: no-repeat;background-size:cover;
">
		<div class="content">
           <center> <img src="./Images/logo.png" style="width:80px"></center><br>
			<h1>Book a Table at Wendy's!</h1>
            <p>Worried we are full? Sign in to Book a table at what time and day you want</p><br>
			<?php 
			if(isset($_SESSION['User'])){
				if($_SESSION['User']==null){
					echo "<a href='clientreg.php'><button class='button'>REGISTER</button></a> &nbsp <a href='logboth.php'><button class='button'>Login</button></a><br>";
				}
				else
				echo " <a href='branches.php'><button class='button'>View Rastaurants</button></a>&nbsp<a href='Contact.php'><button class='button'>Contact Us</button></a>";
			}
			else
			echo "<a href='clientreg.php'><button class='button'>REGISTER</button></a> &nbsp <a href='logboth.php'><button class='button'>Login</button></a><br>";
			?>
			<br><br><br>
        </div>
</div>
	</div>
	<div id="about" >
		<div class="content">
		<br><center><h1 style="color:black">Information about us</h1></center><br>
		<div class="card-deck">
  			<div class="card" style="height:410px">
    			<div class="card-body">
      				<h5 class="card-header" style="background-color:white">About US</h5>
      				<p class="card-text" style="font-size:18px;padding-left:5px">fast-food company that is the third largest hamburger chain in the United States, behind McDonald’s and Burger King. Dave Thomas founded the first Wendy’s restaurant in Columbus, Ohio, in 1969. One of fast food’s most famous logos, Wendy’s cartoon image of a smiling redheaded girl, was based on the appearance of Thomas’s daughter, who also inspired the company’s name.</p>
    			</div>
  			</div>
			  <div class="card"style="height:410px">
    			<div class="card-body">
      				<h5 class="card-header" style="background-color:white">Why US</h5>
      				<p class="card-text"style="font-size:18px;padding-left:5px">If you're considering booking a table at a restaurant, we believe that our establishment is the perfect choice for you.First and foremost, we are known for our delicious food. Our chefs are highly trained and use only the freshest ingredients to create dishes that are bursting with flavor. we have something for everyone.
				In addition to the food, our restaurant has a warm and welcoming atmosphere. </p>
    			</div>
  			</div>
		</div>
</div>
</div>
	<div id="portfolio">
  <div class="columnp" style="background-color:#7e003b;">
    <h2 style="color: white;">Book a table!</h2><br>
    <p style="color: white;">By clicking on the button below, you can easily and quickly reserve a table at one of our amazing restaurants. Booking a table has never been easier. Simply click on the button below, choose the branch closest to you, your desired date and time, and select the number of guests in your party. In just a few clicks, you'll have a table reserved and ready for you and your loved ones.</p>
	<br><a href='branches.php' class='btn btn-dark' style='width:100%'>View Branches</a>
  </div>
  <div class="columnp" style="background:url(./Images/food.jpg);background-repeat:no-repeat;background-size:contain;height:600px">
  </div> 
</div>
</div>
</body>
</html>