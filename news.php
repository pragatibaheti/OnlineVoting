<html>
<head>
	<title>Latest News</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="imp.js"></script>
	<style>
.news
{
	width: 90%;
    border: 10px solid #E74C3C;
    padding: 15px;
    margin: 15px;
    height: 200px;
    border-radius: 20px;
    background-color:#F5B7B1;

}
.news .title
{
	font-size: 30px;
	color: #E74C3C;
}
.news .content
{
	font-size:20px;
}
.news1
{
	width: 90%;
    border: 10px solid #E74C3C;
    padding: 15px;
    margin: 15px;
    height: 200px;
    border-radius: 20px;
    background-color:#F5B7B1;

}
.news1 .title1
{
	font-size: 30px;
	color: #E74C3C;
}
.news1 .content1
{
	font-size:20px;
}
#btn
{
	width:100px;
	height: 70px;
	border-radius: 65px;
	background-color: #E74C3C;
	border: 2% solid #F5B7B1;
	
}
#btn1
{
	width:100px;
	height: 70px;
	border-radius: 65px;
	background-color: #E74C3C;
	border: 2% solid #F5B7B1;
	
}
#btn2
{
	float:right;
	width:150px;
	height: 70px;
	border-radius: 65px;
	background-color: #E74C3C;
	border: 2% solid #F5B7B1;
}
h1
{
	text-align: center;
	font-size: 40px;
}
body
{
	background-image: url('images/bg.jpg');
	background-size: cover;
	background-repeat: no-repeat;
}
</style>
</head>


<body>

	<a href="election.php"><input type="submit" id="btn2" value="Elections/Results"></a>
	<script >
		function click()
		{
	alert('elections coming soon');
		}
	</script>
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
     $result =mysqli_query($conn, "SELECT * FROM news") or die("Error: " . mysqli_error($conn));

	?>
    

    <div class="india" id="ind">
			


		<?php
	    
	echo "<input type=\"button\" id=\"btn1\" value=\"State News\">\n";
	echo "<input type=\"button\" id=\"btn\" value=\"All-India News\">\n";
	
     while($row=mysqli_fetch_array($result))
      {
      	//echo"".$row["voteridno"]." ".$row["state"]." ".$row["city"]."<br>";
      	   if($row['state']!=$_SESSION['state'])
      	   {
      		$title=$row['title'];
      		$content=$row['content'];
      	    echo "<div class=\"news\">\n";
			echo "<p class=\"title\">$title</p>\n";
			echo "<p class=\"content\">$content</p>\n";
			echo "</div>\n";
			echo "<script>\n";
			echo "$('#btn').click(function(){\n";
			echo "$('.news').hide();\n";
			echo "$('.news').slideDown(2000);\n";
			echo "});\n";
			echo "</script>\n";
			}
      	
      }
      
     ?>
</div>

	<div class="state">
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
     $result =mysqli_query($conn, "SELECT * FROM news") or die("Error: " . mysqli_error($conn));

	
	
	while($row=mysqli_fetch_array($result))
      {
      	//echo"".$row["voteridno"]." ".$row["state"]." ".$row["city"]."<br>";
      	if($row['state']==$_SESSION['state'])
      	{
      		$title=$row['title'];
      		$content=$row['content'];
      	

			
			echo "<div class=\"news1\">\n";
			echo "<p class=\"title1\">$title</p>\n";
			echo "<p class=\"content1\">$content</p>\n";
			echo "</div>\n";
			echo "<script>\n";
			echo "$('#btn1').click(function(){\n";
			echo "$('.news').hide();\n";
			echo "$('.news1').hide();\n";
			echo "$('.news1').slideDown(2000);\n";
			echo "});\n";
			echo "</script>\n";
		}
			
      	
      }
       mysqli_close($conn);



      
     ?>
   
	</div>


	
</body>
</html>