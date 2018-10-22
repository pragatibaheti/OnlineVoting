<html>
<head>
	<title>Elections On Way</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    body{
    	background-image: url('images/parliament.jpg');
    	background-size: cover;
    	background-repeat: no-repeat;
    }
#t1 {
  width:42%;
	height: 550px;
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.3;
  float:left;

}
a:link{
       color:#1DAAA1;
     }

     a:visited{
       color:green;
     }

     a:hover{
       
       color: #FFF;
     }
#t2
{
	width:42%;
	height: 550px;
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.3;
  float:right;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: darkmagenta;
}
h1{

    text-align: center;
    color: #CD5C5C;
}
#move
{
	width:100%;
	height:450px;
	font-size: 20px;
}

</style>
</head>
<body>
<div class="outer">
  <div class="transbox" id="t1">
    <p><h1><b><u>Upcoming Voting Polls</u></b></h1></p>
    <div id="move">
    	<marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction = "up" scrolldelay="50">
    		    		<?php
					session_start();
					$conn=new mysqli("localhost","root","","voting_portal");
				     if(!$conn)
				     {
				     	echo "Sorry";
				     }
				     else
				     {
				     //echo "great work";
				     }
				     $result =mysqli_query($conn, "SELECT * FROM upcoming_votes") or die("Error: " . mysqli_error($conn));
				     while($row=mysqli_fetch_array($result))
				      {
				      	//echo"".$row["voteridno"]." ".$row["state"]." ".$row["city"]."<br>";
				      	   
				      	  
				      		$title=$row['title'];
				      		$state=$row['state'];
				      		if($state==$_SESSION['state'])
				      		{
				      	    echo "<a href=\"voting_page.php\"><p style=\"color:red\">$title</p></a>";
				          	}
				          	else
				          	{
				          		echo "<p>$title</p>";
				          	}
							
				      	
				      }

				?>
    	</marquee>
    	
    	<script>
   			
    	</script>
    	
    </div>
  </div>
  <div class="transbox" id="t2">
    <p><h1><b><u>Upcoming Voting Results</u></b></h1></p>
    <div id="move">
    	<marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction = "up" scrolldelay="30">
    		<?php
				
				$conn=new mysqli("localhost","root","","voting_portal");
			     if(!$conn)
			     {
			     	echo "Sorry";
			     }
			     else
			     {
			     //echo "great work";
			     }
			     $result =mysqli_query($conn, "SELECT * FROM results") or die("Error: " . mysqli_error($conn));
			     while($row=mysqli_fetch_array($result))
			      {
			      	//echo"".$row["voteridno"]." ".$row["state"]." ".$row["city"]."<br>";
			      	  
			      		$title=$row['title'];
			      		$state=$row['state'];
			      	    echo "<p>$title</p>";
						
			      	
			      }

			?>
    	</marquee>
    	
    </div>
  </div>
</div>

</body>

</html>