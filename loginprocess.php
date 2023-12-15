<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);


    $email = $_POST['email'];
    $password2 = $_POST['password2'];

   $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
   if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
   }
   else
   {



    $sql=mysqli_query($conn,"SELECT * FROM taxibooking where email='$email' and password2='$password2'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {

        header("Location: welcome.php?email=".$_POST['email']."&password2=".$_POST['password2']."");


    }
    else
    {
        header("Location: manage1.php");
    }
}

}
?>
