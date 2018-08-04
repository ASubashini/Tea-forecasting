<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

</head>
<body >

<div class="headerDiv">
  <h1>Tea Forecasting System</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
  
      
    <a href="HomeLogin.php">Home</a>
	<a href="ViewDetail.php">Profile</a>
	<a href="Prediction.php">Prediction</a>
	<a href="PredictionDetails.php">Prediction Log</a> 
	<a href="ViewLoginDetails.php">Login Log</a> 
	<a href="logout.php">Logout</a>
	<ul>
	<a class ="yy" href="">Price History</a>
	<li>
	<div class="xx">
	<a href="UvaHigh.php">Uva High</a>
	<a href="UvaMedium.php">Uva Medium</a>
	<a href="UvaLow.php">Uva Low</a>
	<a href="WesternHigh.php">Western High</a>
	<a href="WesternMedium.php">Western Medium</a>
	<a href="WesternLow.php">Western Low</a>
	</div>
	</li>
	</ul>
  </div>

  <div class="main">
   <h3> <?php session_start();
  echo "welcome ";
  echo $_SESSION['Name'];
  echo"</br>";
  echo $_SESSION['Email'];?> </h3>
  <h2>view details</h2>
	<table id="PredictLog">
  <tr>
   <th>email</th>
    <th>logintime</th>
    <th> logouttime </th
  </tr>
	<?php

	 $connection = mysqli_connect("localhost","root","","factors")
or die("Could not connect to server");

$db = mysqli_select_db($connection , "factors")
or die("<b> Connection Fails");

	 $Email=$_SESSION['Email'];
	 
	 $sql ="SELECT * FROM userlog WHERE Email= '".$Email."' ORDER BY Id DESC";
	
      $result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($result)){
			$email=$row['email'];
			$logintime=$row['logintime'];
			$logouttime=$row['logouttime'];
			
			
		echo "<tr>";
		echo "<th>". $email."</th>";
		echo "<th>". $logintime."</th>";
		echo "<th>". $logouttime."</th>";
		
		echo "</tr>";
		
	}
	?>
	</table>
  </form>

  </div>

  <div class="right">
    <h2>About</h2>
    <p>This platform is a responsive website that is used to view the tea prices from the factors </p>
	<h2>Tea price prediction</h2>
	<p>The technologies and languages used to write the programs are HTML5, CSS3, JavaScript, PHP and MySQL. The system was developed using WAMPP server and PHPMyAdmin. The factors are trained by MATLAB code </p>
  </div>
</div>

<div class="footer">© 2018 copyright reserved. Develop by Subashini</div>

</body>
</html>