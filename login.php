<html>
<head>
	<title>LogIn</title>
	<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		background-image: url("images/flag1.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}
	input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 50px;
    
}
input:hover
{
	background-color: grey;
	border:2px solid white;
	
}

  div.transbox {
  
  background-color:rgba(0,0,0,0.1);
  border: 4px solid black;
  padding: 10px;
  height:200px;
  margin-top: 10px;
	}
div .items
{
	text-align: center;
}
#butt
{
	align-self: left;
	height: 40px;
	width:150px;
	margin-top: 5px;
	background-color: black;
	border-color:#DAF7A6;
	color:#bf55ec;
	border-radius: 200px;
	
}
#butt:hover
{
	background-color:#DAF7A6;
	height: 60px;
	width:180px;
	border-color:black;
	color: black;
	border-radius: 200px;

}
#but
{
	align-self: left;
	height: 40px;
	width:150px;
	margin-top: 5px;
	background-color: black;
	border-color:#DAF7A6;
	color:#bf55ec;
	border-radius: 200px;
	margin-bottom: 20px;
	
}
#but:hover
{
	background-color:#DAF7A6;
	height: 60px;
	width:180px;
	border-color:black;
	color: black;
	border-radius: 200px;

}
img
{
	
	width:200px;
	height:300px;
	margin-left:570px;
}
</style>
</head>
<body>
	 <div class="container">
	 	<img src="images/govt.png">
	 	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     		  <div class="transbox">
				  	<div class='items'>
				    <p class='c'><h1>Fill The Required Details Below</h1></p>
				    <input type="text" name="uname" placeholder="Voter-Id" required></input>
				    <input type="password" name="psw" placeholder="Password*" required></input>
				    <br>
				    <br>
				    <button id='butt' name="submit" value="submit">Send Otp to Linked Aadhar Number</button>
				    
				</div>
			</div>
         </form>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     		  <div class="transbox">
				  	<div class='items'>
				    <input type="password" name="otpno" placeholder="OTP*" required></input>
				    <br>
				    <br>
				    <button id='but' name="otp_verify" value="submit">Verify OTP</button>
				</div>
			</div>
         </form>
    </div>   
   <?php
  		session_start();
     if(isset($_POST['submit']))
     {

     $conn=new mysqli("localhost","root","","voting_portal");
     if(!$conn)
     {
     	echo "Sorry";
     }
     else
     {
     //echo "great work";
     }

	   	$uname=$_POST['uname'];
	   	$pass=$_POST['psw'];

      $result =mysqli_query($conn, "SELECT * FROM voterid") or die(mysqli_error($conn));
   	 	$flag=false;
      while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
      {
      	//echo"".$row["voteridno"]." ".$row["state"]." ".$row["city"]."<br>";
      	if($row['voteridno']==$uname)
      	{
      		if($row['aadharno']==$pass)
      		{
      		require('./textlocal.class.php');
			require('./credential.php');
			$textlocal = new Textlocal(false,false,API_KEY);

			$numbers = array(MOBILE);
			$sender = 'TXTLCL';
			$otp=mt_rand(10000,99999);

			$message = "hello".$_POST['uname']." Your OTP is".$otp;

				try {
			    $result = $textlocal->sendSms($numbers, $message, $sender);
			    setcookie('otp',$otp);
			    echo "OTP successfully sent";
					} catch (Exception $e) {
			    die('Error: ' . $e->getMessage());
			     }
			     
      			        $flag=true;
		      			$_SESSION['uname']=$uname;
		      			$_SESSION['state']=$row['state'];
		      			$_SESSION['city']=$row['city'];
      		}
      		else
      		{
      			echo "<script> alert(\"Your Credentials Must Match\");</script>";
      			$flag=true;
      		}

      	}
      }
      if($flag==false)
      {
      	echo "Get Your Voter-Id";
      }


      			
  }
        if(isset($_POST['otp_verify']))
			     {
			     	$otp=$_POST['otpno'];
			     	if($otp==$_COOKIE['otp'])
			     	{
			     		echo "you have successfully logged in";
			     		
		      			header("Location: intro.php
		      				");
      			
			     	}
			     	else
			     	{
			     		echo "Not matched";
			     	}
			     }
   ?>
</body>
</html>