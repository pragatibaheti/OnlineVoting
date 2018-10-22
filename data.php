<?php
session_start();
$conn=new mysqli("localhost","root","","voting_portal");
$result =mysqli_query($conn, "SELECT * FROM votes") or die("Error: " . mysqli_error($conn));
				     while($row=mysqli_fetch_array($result))
				      {
				      	//echo"".$row["voteridno"]." ".$row["state"]." ".$row["city"]."<br>"
				      	  
				      		$title=$row['party'];
				      		$number=$row['number'];
				      		if($title==$_POST['title'])
				      		{
				      	    	$number=$number+1;
				      	    	mysqli_query($conn, "UPDATE votes SET number='$number' WHERE party='$title'");
				      	    	header("Location: news.php");
				          	}
				          	
			          }
			          mysqli_close($conn);
			          
?>