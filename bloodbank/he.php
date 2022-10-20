<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.pill-nav a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px;
  text-decoration: none;
  font-size: 17px;
  border-radius: 5px;
}

.pill-nav a:hover {
  background-color: #ddd;
  color: black;
}

.pill-nav a.active {
  background-color: dodgerblue;
  color: white;
}
</style>
</head>
<body>
<div style="text-align: right;  background-color: #f2f2f2;"  class="pill-nav" >
   <img src="image\bloodbank.jpg" style="width:100px; height:60px; float: left ">
  <a class="active" href="abs.php">Available Blood Samples</a>
  <a  href="register.php">Register</a>
  <a  href="login.php">Login</a>
</div>
  
</body>
</html>
