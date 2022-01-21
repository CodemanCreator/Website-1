<!DOCTYPE html>
 <html lang="en-US">
  <head>
   <title>Page Title</title>
	
	<!--Meta Tags-->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<!--Javascript-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
 </head>
<body>

<nav class="navbar navbar-inverse">
 <div class="container-fluid">
  <div class="navbar-header">
   <a class="navbar-brand" href="javascript:void(0)">WebSiteName</a>
  </div>
   <ul class="nav navbar-nav">
    <li><a href="javascript:void(0)">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.html">Contact</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
   <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
   <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
  </ul>
 </div>
</nav>

<div class="container">
 <?php 
 echo "Hello World";
 ?>
</div>

 </body>
</html>