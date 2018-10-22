<html>
<head>
	<title>Vote For A Brighter India</title>
	<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> 
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	body
	{
		background-image:url('images/vote.jpg');
		background-size: cover;
		background-repeat: no-repeat;
	}
	img{
		width:410px;
		height: 400px;
		border-radius: 150px;
		margin:10px;
		cursor: pointer;
		border: 4px solid black;
	}
	h1
	{
		font-size: 40px;
		text-align: center;
		color: red;
		font-family: arial;
	}
	.w3-light-grey
	{
		margin-top: 10px;
		margin-left: 15px;
		margin-right: 15px;
		background:transparent;

	}
	.newclass
	{
    display:block;
    margin-left: auto;
    margin-right: auto;
}
	
    </style>
</head>
<body>
	<div>
		<h1>VOTE FOR YOUR CANDIDATE'S PARTY</h1>
		<img src="images/bjp.jpg" id="bjp">
		<img src="images/congress.png" id="congress">
		<img src="images/aap.jpg" id="Aap">

	</div>
	<script>

		$('#bjp').click(function()
							{
												
											$.ajax({
												url:"data.php",
												data:"title="+"bjp",
												method:"post",
												success:function()
													{
														console.log("done");
													}

											})
											
											  var result=100;
											  var elem = document.getElementById("myBar1");   
											  var width = 10;
											  var id = setInterval(frame, 1);
											  
											    function frame() {
											    if (width <= (result-1)) {
											       width++; 
											      elem.style.width = width + '%';   
											    } 
											    else {
											      clearInterval(id);
											     
											         }
											     }
											     swal({
												  title: 'Voting Recorded',
												  text: 'You voted for BJP',
												    })
											      $('#Aap').hide();
											      $('#congress').hide();
											      $("#bjp").addClass("newclass");
											     

                           });
		
		$('#congress').click(function()
		{
										
										$.ajax({
												url:"data.php",
												data:"title="+"congress",
												method:"post",
												success:function()
													{
														console.log("done");
													}

											})	
											var result=100;
											  var elem = document.getElementById("myBar2");   
											  var width = 10;
											  var id = setInterval(frame, 1);
											  
											    function frame() {
											    if (width <= (result-1)) {
											       width++; 
											      elem.style.width = width + '%';   
											    } 
											    else {
											      clearInterval(id);
											     
											         }
											     }



			swal({
			  title: 'Voting Recorded',
			  text: 'You voted for Congress',
			  html: "candidate name:"
			})
			$('#Aap').hide();
			 $('#bjp').hide();
			 $("#congress").addClass("newclass");
		});

		$('#Aap').click(function()
		{
							              

							              	$.ajax({
												url:"data.php",
												data:"title="+"Aap",
												method:"post",
												success:function()
													{
														console.log("done");
													}

											})
							
			                                  var result=100;
											  var elem = document.getElementById("myBar3");   
											  var width = 10;
											  var id = setInterval(frame, 1);
											  
											    function frame() {
											    if (width <= (result-1)) {
											       width++; 
											      elem.style.width = width + '%';   
											    } 
											    else {
											      clearInterval(id);
											     
											         }
											     }

			
			swal({
			  title: 'Voting Recorded',
			  text: 'You voted for Aam Aadmi Party',
			})
			
			$('#bjp').hide();
		    $('#congress').hide();
		    $("#Aap").addClass("newclass");
		});
		
	
	</script>

	
	 <div id="myBar1" class="w3-container w3-green w3-center" style="width:10%">BJP</div>
	
	<br>
	 <div id="myBar2" class="w3-container w3-green w3-center" style="width:10%">CONGRESS</div>
	
	<br>
	 <div id="myBar3" class="w3-container w3-green w3-center" style="width:10%">AAP</div>
	

</body>
</html>