<?php







  $a = $_GET['a'];
  $b =$_GET['b'];
  $c = $_GET['c'];
  $d =$_GET['d'];
  $e = $_GET['e'];
  $f =$_GET['f'];
  $g =$_GET['g'];
  $h =$_GET['h'];
  $i=$_GET['i'];




?>





<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to OCTANE TAXI BOOKING</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
    .aq{
    display:flex;
    justify-content: center;
    align-items:center;
    }
    .right-section {
    width:550px;
    background-color:white;
    border-radius:15px;
    padding:40px 0;
    box-shadow:0 5px 6px rgba(0,0,0,0.26);
    }

    .right-section h4 {
    font-size:20px;
    width:300px;
    margin:auto;
    margin-bottom: 6px;


    }



    .input-group {
    width:300px;
    margin:30px auto;
    display: flex;
    flex-direction:column;
    position:relative;
    }
    .input-group span{

    top:5px;
    }
    .input-group label{

    color:rgb(165,165,165);
    font-size:14px;
    position: absolute;
    top:5px;
    transition:0.5s ease-in-out;
    }
    .input-group input{


    border:none;
    padding:7px;
    margin-top:15px;
    outline:none;
    color:#2098ca;
    border-bottom:1px solid #c9c9c98a;
    }

    .input-group input:focus ~ label,
    .input-group input:valid ~ label {

    color:#2098ca;
    top:-10px;
    font-size:12px;
    }
    .input-group input:focus,
    .input-group input:valid  {
    border-color:#2098ca;
    }
    .submit-section {
    text-align:center;
    }

    {
    display: flex;
    }
    .submit-button {

    background-color:#2098ca;
    color:white;
    border: none;
    padding:10px 0;
    border-radius:10px;
    margin-top:15px;
    width:300px;
    cursor:pointer;
    }

    .submit-button:hover {
    box-shadow:0 3px 6px silver;
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
            echo"<a href= 'http://taxi-booking-assignment.c1.biz/welcome.php?email=$g&password2=$h '>MANAGE-BOOKING</a>";
            ?></li>
            <li><a href="mailto:ashikjoju8055@gmail.com" >Contact</a></li>

          </ul>
        </nav>
      </div>
    </header>


<center>
<h1>UPDATE DETAILS</h1>
</center>


<div class="aq" >

	<?php echo" <form  method='POST' action='update2.php?email=$g&password2=$h&id=$i'>" ?>

	<div class="right-section" >



	<center><h4>EDIT THE FORM</h4></center>

    <div>
 <br><br>
<hr>
 <br><br>
	<center><h5> <u>PICK UP DETAILS</u></h5></center>
	</div>



	 <div class="input-group">
<table border="0" cellpadding="20" >
	 <tr>
	 <td> <label for="date"> Date</label></td>
	 <td><input type="date" name="date" id="date" value="<?php echo "$a"  ?>" required></td>

	</tr>
	</table>
</div>


	 <div class="input-group">
	 <table border="0" cellpadding="20" >
	 <tr>
	     <td><label for="time"> Time</label></td>
    	 <td><input type="time" name="time" id="time" value="<?php echo "$b"  ?>" required></td>
	</tr>
	</table>
	</div>



	<div class="input-group">
	<input type="tel" name="passenger" placeholder="(max:8)" value="<?php echo "$c"  ?>" id="passenger" min="1" max="8" pattern="[1-8]" title="Minimum 1 member,Maximum 8 members" required>
	<label >No. of Passenger</label>
	</div>
 <br><br>
<hr>


	<div>
	 <br><br>
	<center><h5> <u>PICK UP ADDRESS </u></h5></center>
	</div>


	<div class="input-group">
	<input type="text" name="paddress" id="paddress"  value="<?php echo "$d"  ?>"required>
	<label >Address</label>
	</div>


	<div class="input-group">
	<input type="text" name="pstate"id="pstate" value="<?php echo "$e"  ?>" required>
	<label >City</label>
	</div>


	<div class="input-group">
	<input type="tel" name="ppincode" id="ppincode" value="<?php echo "$f"  ?>" required>
	<label for="ppincode">Pincode</label>
	</div>
   <br><br>
<hr>

 <br><br>

  <div class="input-group">
<input type="text" name="email" value="<?php echo"$g";?>" id="email" disabled>
<label for="email"> Confirm Email</label>
</div>

<div class="input-group">
<input type="password" name="password2"id="password" value="<?php echo"$h";?>" Disabled>
<label for="password">Confirm Password</label>
</div>


 <br><br>



	<br><br>
	<div class="submit-section" >
	<button style="background-color:#555" name="submit" class="submit-button" type="sumbit">SUBMIT</button>
	</div>

	</script>
	</div>
	</form>





</center></div>
<footer>
	<p>Octane Web Deisgn, Copyright &copy; 2020</p>
</footer>
</body>
</html>
