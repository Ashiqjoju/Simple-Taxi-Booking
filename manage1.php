<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to OCTANE TAXI BOOKING</title>
    <link rel="stylesheet" href="style.css">


<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>


  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">OCTANE</span> TAXI BOOKING</h1>
        </div>
        <nav>
          <ul>
            <li ><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="current" ><a href="manage.php">Manage-Booking</a></li>
            <li><a href="mailto:ashikjoju8055@gmail.com" >Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
	<h2>MANAGE YOUR BOOKINGS</h2>
	
        
        <style>
.alert {
  padding: 20px;
  Width:300px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {


  color: black;
}
</style>

<body>
<center>

<div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Error!! </strong> Invalid Email/Password.
</div></center>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
close[i].onclick = function(){
  var div = this.parentElement;
  div.style.opacity = "0";
  setTimeout(function(){ div.style.display = "none"; }, 600);
}
}
</script>
        
        
    <div class="aqq" >
     <form action="loginprocess.php" method="post">
     	<h2>LOGIN</h2>

     	<label>Email </label>
     	<input type="text" name="email" ><br>

     	<label>Password</label>
     	<input type="password" id="password2" name="password2" ><br>

     	<button type="submit" name="save" >Login</button>

      <p style="color:blue" onclick="myFunction()"><u>Show Password</u></button>
      <script>
      function myFunction() {
      var x = document.getElementById("password2");
      if (x.type === "password") {
         x.type = "text";
      } else {
      x.type = "password";
      }
      }
      </script>
     </form>
     </div>









     <footer>
     <p>Octane Web Deisgn, Copyright &copy; 2021</p>
     </footer>
</body>
</html>
