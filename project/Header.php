<?php
if(session_status() === PHP_SESSION_NONE) session_start();
if(!isset($_SESSION['lang']))
{
	// default english
	$_SESSION['lang']=1000;
}
if (isset($_GET["l"])){
	$_SESSION['lang']=$_GET["l"];
}
?>
<head>
</head>
<link rel="stylesheet" href="style.css">
<body>
<center>
<header>
      <h1> Free Library</h1>
	  <li class="menu-item"><a href="#" class="drp"><img src="book1.jpg" alt="Logo" class="logo"></a>
	  <div class="menu-content">
			<a href="my_profile.php">Profile</a><br>
			<a href="return_books.php">Returns</a><br>
			<a href="../signup.php">Sign Up</a><br>
			<a href="../login.php">Log Out</a><br>
		</div>
	  </li>
	  <span style="position:realtive;float:right;">
		<a href="?l=1000">
		  <span>EN: <img src="img/~EN.png" style="width:18px;height:12px;" /></span>
		</a>
		<a href="?l=2000">
		  <span>ES: <img src="img/~ES.png" style="width:18px;height:12px;" /></span>
		</a>
	  </span>
    </header>
 <ul style="background-color: #FAD7A0;">
		<li class="menu-item"><a href="index.php" class="drp">HOME PAGE </a>

		</li>	
		<li class="menu-item"><a href="recomendations.php" class="drp">Find Books</a>	
		</li>
		
		<li class="menu-item"><a href="return_books.php" class="drp">Return Books </a>	
		</li>
	</ul>
<center>
</body>