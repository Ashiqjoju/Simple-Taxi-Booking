<!DOCTYPE html>
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
            <li class="current"><a href="index.html">Home</a></li>
              <li  ><a href="manage.php">Manage-Booking</a></li>
            <li><a href="mailto:ashikjoju8055@gmail.com" >Contact</a></li>

          </ul>
        </nav>
      </div>
    </header>


<center>
<h1>BOOKING FORM</h1>
</center>


<div class="aq" >

	<form  method="POST" onSubmit = "return checkPassword(this)" action="connect.php" >

	<div class="right-section" >



	<center><h4>FILL THE FORM</h4></center>


<div>
	 <br><br>
	<center><h5> <u>USER DETAILS</u></h5></center>
	</div>
  <br><br>
 <hr>
  <br><br>

    <div class="input-group">
    <input type="text"  name="fname" id="fname" autocomplete="off" required>
    <label for="fname"> Name</label>
    </div>


      <div class="input-group">
      <label class="aq" style="color:#2098ca;" >  Phone Number </label>
      <div class="input-group">
      <label> <span style="color:#2098ca; "  Name="phone" id="result"></span></label>
       </div>
     </div>

     <script type="text/javascript">
     document.getElementById("result").innerHTML=localStorage.getItem("telvalue");
     </script>



    <div class="input-group">
 	<input type="email" name="email" id="email"    title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
 	<label >Email </label>
 	</div>






       <script type="text/javascript">
       var check = function() {
       if (document.getElementById('password1').value ==
       document.getElementById('password2').value) {
       document.getElementById('message').style.color = 'green';
       document.getElementById('message').innerHTML = 'matching';
       } else {
       document.getElementById('message').style.color = 'red';
       document.getElementById('message').innerHTML = 'not matching';
       }
       }
       </script>

       <div class="input-group" >
       <label>Create Password</label>

        <table border="0" >
        <tr>
       <td><input name="password" id="password1" type="password" onkeyup='check();'  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number."  required/></td>
      <td> <input type="checkbox" onclick="myFunction()"></td><td>🔓</td>
      </tr>
      </table>

       <script>
       function myFunction() {
       var x = document.getElementById("password1");
       if (x.type === "password") {
          x.type = "text";
       } else {
       x.type = "password";
       }
       }
       </script>

       </div>
       <div class="input-group" >
       <label>Re-Enter Password</label>
       <table border="0" >
       <tr>
       <td><input type="password" name="password2" id="password2"  onkeyup='check();'  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number."  required/> </td>

       <td><input type="checkbox" onclick="myFunction2()"></td>
       <td>🔓</td>
       </tr>
       </table>



       <script>
       function myFunction2() {
       var x = document.getElementById("password2");
       if (x.type === "password") {
          x.type = "text";
       } else {
       x.type = "password";
       }
       }
       </script>
       <br>
       <center>
       <span id='message'></span>
       </center>
       </div>









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
	 <td><input type="date" name="date" id="date"  required></td>

	</tr>
	</table>
</div>


	 <div class="input-group">
	 <table border="0" cellpadding="20" >
	 <tr>
	     <td><label for="time"> Time</label></td>
    	 <td><input type="time" name="time" id="time"  required></td>
	</tr>
	</table>
	</div>



	<div class="input-group">
	<input type="tel" name="passenger" placeholder="(max:8)" id="passenger" min="1" max="8" pattern="[1-8]" title="Minimum 1 member,Maximum 8 members" required>
	<label >No. of Passenger</label>
	</div>




	<div>
    <br><br>
   <hr>
    <br><br>
	<center><h5> <u>PICK UP ADDRESS </u></h5></center>
	</div>


	<div class="input-group">
	<input type="text" name="paddress" id="paddress"  required>
	<label >Address</label>
	</div>


	<div class="input-group">
	<input type="text" name="pstate"id="pstate"  required>
	<label >City</label>
	</div>


	<div class="input-group">
	<input type="tel" name="ppincode" id="ppincode"  required>
	<label for="ppincode">Pincode</label>
	</div>
  <br><br>
 <hr>
  <br><br>
    <div>
	<center><h5><u>DROP OFF ADDRESS </u></h5></center>
    </div>

	<div class="input-group">
	<input type="text" name="daddress"id="daddress"  required>
	<label for="daddress"> Address</label>
	</div>
	<div class="input-group">
	<input type="text" name="dstate"id="dstate"  required>
	<label >City</label>
	</div>

	<div class="input-group">
	<input type="tel" name="dpincode"id="dpincode" required>
	<label for="dpincode">Pincode</label>
	</div>

  <br><br>
 <hr>
  <br><br>

    <div class="input-group">
	<label style="color:black" >Will you return with us?</label>
	</div>


	<center>
	<div   >
	<input type="radio" id="return" name="return" value="yes" checked="checked" >
	<span for="return">Yes</span><br>

	<input type="radio" id="return" name="return" value="no">
	<span for="return">No</span><br>
	</div>
	</center>




	<br><br>
	<div class="submit-section" >
	<button style="background-color:#35424a" onclick="matchPassword()" class="submit-button" type="sumbit">SUBMIT</button>
	</div>

	</div>
	</form>





</div>
<footer>
	<p>Octane Web Deisgn, Copyright &copy; 2020</p>
</footer>

</body>



<script>
  function checkPassword(form)
  {
    password1 = form.password1.value;
    password2 = form.password2.value;
     if (password1 == '')
         alert ("Please enter Password");
      else if (password2 == '')
            alert ("Please enter confirm password");
         else if (password1 != password2) {
                 alert ("\nPassword did not match: Please try again...")
                  return false;
               }
               else{
                     return true;
                    }
        }
 </script>








</html>
