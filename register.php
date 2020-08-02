<!DOCTYPE html>
<html>
<head>
	<title>Pigs Can too fly</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgray">
    
	<nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top">
	<div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.html"><span class="fa fa-home"></span> Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><span class="fas fa-book-open"></span> Stories</a>
        <div class="dropdown-menu">
        	<a class="dropdown-item" href="story1.html">Share your story</a>
        	<a class="dropdown-item" href="story2.html">Read a Real life inspirational story</a>
      	</div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Quotes.html"><span class="fa fa-quote-right"></span> Quotes</a> 
         
      </li> 

      <li class="nav-item">
        <a class="nav-link" href="contact.html"><span class="fa fa-phone"></span> Contact Us</a>
        <pre>				                </pre>
      </li> 


       <li class="nav-item ">
       	<form class="form-inline " action="#">
    	<input class="form-control mr-sm-2 " type="text" placeholder="Search">
    	<button class="btn btn-primary " type="submit"><span class="fa fa-search"></span> Search</button>
  		</form> 
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="register.php"> Register </a> 
         
      </li> 
   </ul>
  </div>  
  </div>
</nav>
<div class="container p-3 my-3 bg-dark text-white">
  
<h4>Become a part of our community today!</h4>
    <br>
    <br>
<form method="post" action="register.php" name="sign">
	  		Username   <input type="text" name="user" size="50"  ?> <br><br>
     	 	 
            Password   <input type="text" name="pass" size="50" ?><br><br>
	  		<input type="submit" name="check" value="Register"><br><br>
			</form>
			</div>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inspire";


$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) 
{
  die("Connection failed: <br> " . mysqli_connect_error());
}
if(isset($_POST['check']))
{
 
$sql = "INSERT INTO  inspire (username, password)
VALUES 
('$_POST[user]','$_POST[pass]')";

if (mysqli_query($conn, $sql)) {
  echo "<br>Welcome to our Community!!";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
    </body>
    </html>

