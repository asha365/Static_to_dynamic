<?php
  include 'mvc-FRAMEWORK/Configuration/config.php';
  include 'mvc-FRAMEWORK/Library/Database.php';
  $DB = new Database();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap &mdash; Product</title>

    <!-- Bootstrap & css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
<!------------------------------------------------------------------------->
<!----START HEADER ---------------------------------------------------->
<!------------------------------------------------------------------------->
<div class="row">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:white; ">Site Title 15</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
      <ul class="nav navbar-nav navbar-right">
        <li>
			<a href="Home.html">
				<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
			</a>
		</li>
        <li class="active">
			<a href="Product.html" style="color:white; ">
				<span class="glyphicon glyphicon-th" aria-hidden="true"></span> Products
			</a>
		</li>
        <li>
			<a href="Contact.html" style="color:white; ">
				<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Contact Us
			</a>
		</li>
      </ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!------------------------------------------------------------------------->
<!-----end HEADER------------------------------------------------------>
<!------------------------------------------------------------------------->