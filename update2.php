
    <?php
    
    $id =$_GET['id'];


          $email =$_GET['email'];
          $pass =$_GET['password2'];

          $date = $_POST['date'];
           $time = $_POST['time'];
           $passenger = $_POST['passenger'];

           $paddress = $_POST['paddress'];
           $pstate = $_POST['pstate'];
           $ppincode = $_POST['ppincode'];





    $con = mysqli_connect('fdb27.biz.nf','3616710_booking','ashikjoju8055');
    $db = mysqli_select_db($con,'3616710_booking')
    or die('Failed to open DB');




    $sql="UPDATE taxibooking SET date='$date',time='$time',passenger='$passenger',paddress='$paddress',pstate='$pstate',ppincode='$ppincode' WHERE id='$id' ";

    $status=mysqli_query($con,$sql) ;



    if($status)
       {

        }
    else
       {
           echo"<h2>  Failed to Update : Seats are not availabe...</h2>";
           echo"<h2 align=center>Sorry..!</h2>";
       }

    mysqli_close($con);

    ?>


<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to OCTANE TAXI BOOKING</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>

img{
  width:250px;
}
</style>


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
            <li class="current"><?php
            echo"<a href= 'welcome.php?email=$email&password2=$pass '>MANAGE-BOOKING</a>";
            ?> <li>
            <li><a href="mailto:ashikjoju8055@gmail.com" >Contact</a></li>

          </ul>
        </nav>
      </div>
    </header>
    <br><br>

    <center>
    <h1>BOOKING DETAILS</h1>

    <br><br>


<center>
<div>
   <img src="update.png">
</div><br><br>


<div class="alert alert-success">
                <strong>Updated!</strong> Your Booking has been updated successfully.!
                </div><br>



<footer>
      <p>Octane Web Deisgn, Copyright &copy; 2020</p>
    </footer>
  </body>



</body>
</html>