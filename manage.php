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
    <div class="aqq" >
     <form action="loginprocess.php" method="post">
     	<h2>LOGIN</h2>

     	<label>Email </label>
     	<input type="text" name="email" autocomplete="off" ><br>

     	<label>Password</label>
     	<input type="password" id="password2"name="password2" ><br>


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
     <p>Octane Web Deisgn, Copyright &copy; 2020</p>
     </footer>
</body>
</html>
