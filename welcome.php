   <?php
{

    $email = $_GET['email'];
    $password2 =$_GET['password2'];




   $conn = new mysqli('fdb27.biz.nf','3616710_booking','ashikjoju8055','3616710_booking');
   if($conn->connect_error){
   die('connection failed : '.$conn->connect_error);
   }
   else
   {
   $result=mysqli_query($conn,"SELECT * FROM taxibooking where email='$email' && password2='$password2'");
   }

   }

   ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to OCTANE TAXI BOOKING</title>
    <link rel="stylesheet" href="style.css">
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
            <li class="current"><a href= "<?php http://taxi-booking-assignment.c1.biz/welcome.php?email='$email'&password2='$password2' ?>" >Manage-booking</a></li>
            <li><a href="mailto:ashikjoju8055@gmail.com" >Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

   <style type="text/css">



   .table{
   width: 100%;
   border-collapse: collapse;
   }

   .table td,.table th{
   padding:12px 15px;
   border:1px solid #ddd;
   text-align: center;
   font-size:16px;
   }

   .table th{
   background-color: #35424a;
   color:#ffffff;
   }

   .table tbody tr:nth-child(even){
   background-color: #ececec;
   }
button {
	
	background: #35424a;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
a{
        text-decoration:none;
        color:white;
     
}
   </style>
   <body>








   <center>
   <br>

   <h1>DETAILS OF YOUR BOOKINGS</h1>
   <br>
       <table border="1" class="table"  >

                                <tr>
                                    <th>Booking-ID</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Number of passengers</th>
                                    <th>Pick-up Address</th>
                                    <th>Pick-up City</th>
                                   <th>Pick-up Pincode</th>



                                   <th colspan="2" > Operations</th>
                                </tr>


                                <?php

                               while($res=mysqli_fetch_array($result)){

                            

                                  echo "


                               <tr>
                               
                               <td>OTB-J587".$res['id']."</td>

                               <td>".$res['date']. "</td>

                               <td> ".$res['time']." </td>

                               <td>".$res['passenger']."</td>

                               <td>".$res['paddress']." </td>

                               <td>".$res['pstate']." </td>

                               <td>".$res['ppincode']."</td>






                               <td><form><a href= 'update.php?a=$res[date]&b=$res[time]&c=$res[passenger]&d=$res[paddress]&e=$res[pstate]&f=$res[ppincode]&g=$res[email]&h=$res[password2]&i=$res[id]' ><button>UPDATE</a></form></td>
                               <td><form><a href= 'cancel.php?a=$res[date]&b=$res[time]&c=$res[passenger]&d=$res[paddress]&e=$res[pstate]&f=$res[ppincode]&g=$res[email]&h=$res[password2]&i=$res[id]' ><button>CANCEL</a></form></td>

                               
                              
                               </tr>
                               "; 
                               }
                               ?>
                             


                                <tr>

                              
                              <td colspan='7'>  <h2> <marquee>  You Can Manage/Cancel your Taxi. You can also Book New Taxi </marquee> </h2></td>
                              <td colspan='2'><?php echo" <form> <a  href='book2.php?email=$email&password2=$password2'><button>BOOK NEW TAXI</a></form>"; ?></td>
                              </tr>
                          
                             
                              
                             
                              
                             </table><br><br>
                             
                             <div><form><a href="manage.php"><button>L O G O U T</a></form></div><br><br>

                             <footer>
	<p>Octane Web Deisgn, Copyright &copy; 2020</p>
</footer>

                             </body>
                      </html>
