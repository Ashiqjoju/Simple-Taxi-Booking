<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to OCTANE TAXI BOOKING</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">OCTANE</span> TAXI BOOKING</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li ><a href="manage.php">Manage-Booking</a><li>
            <li><a href="mailto:ashikjoju8055@gmail.com" >Contact</a></li>

          </ul>
        </nav>
      </div>
    </header>
    <br><br>

    <center>
    <h2>BOOKING DETAILS</h2>

    <br><br>

<?php







        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $password2 = $_POST['password2'];

        $date = $_POST['date'];
        $time = $_POST['time'];
        $passenger = $_POST['passenger'];

        $paddress = $_POST['paddress'];
        $pstate = $_POST['pstate'];
        $ppincode = $_POST['ppincode'];

        $daddress = $_POST['daddress'];
        $dstate = $_POST['dstate'];
        $dpincode = $_POST['dpincode'];

        echo"<hr>";
        echo"<center><h2> Hi $fname,</h2></center><br><br>";



            $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
            if($conn->connect_error){
                die('connection failed : '.$conn->connect_error);
               }
               else
               {
                $stmt = $conn->prepare("insert into taxibooking(fname,email,password2,date,time,passenger,paddress,pstate,ppincode,daddress,dstate,dpincode)
                     values(?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssssssss",$fname,$email,$password2,$date,$time,$passenger,$paddress,$pstate,$ppincode,$daddress,$dstate,$dpincode);
                $stmt->execute();
                echo "<center><b><i>

                Our Taxi will reach at $paddress,$pstate at $time on $date

              <br><br>

              Thanks for booking !!!

              <br><br>

                </i></center>";

                $stmt->close();
                $conn->close();
               }
        ?>


<div>
   <center><img src="booked.png">
</div>


<div class="alert alert-success">
                <strong>Success!</strong> Your Booking has been completed successfully.!
                </div><br>



<footer>
      <p>Octane Web Deisgn, Copyright &copy; 2020</p>
    </footer>
  </body>



</body>
</html>
