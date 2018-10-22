<!DOCTYPE html>
<html>
<head>
    <title> image slide</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    body
    {
        
        background-size: cover;
        background-repeat: no-repeat;
    }
        .Slideshow{
        margin:0 auto;
        padding-top: 50px;
        height: 450px;
        background-image: url('images/bg1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        box-sizing: border-box;
    }
    .content{
        margin:auto;
        width:190px;
        perspective: 1000px;
        position: relative;
        padding-top:50px;
    }
    .content-carrousel{
        width:100%;
        position: absolute;
        float:right;
        animation: rotar 15s infinite linear;
        transform-style:preserve-3d;
    }
    .content-carrousel:hover{
        animation-play-state:paused;
        cursor:pointer;

    }
    .content-carrousel figure{
        width:100%;
        height: 220px;
        border: 1px solid #4d444d;
        overflow: hidden;
        position:absolute;
    }
    .content-carrousel figure:nth-child(1){
        transform:rotateY(0deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(2){
        transform:rotateY(40deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(3){
        transform:rotateY(80deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(4){
        transform:rotateY(120deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(5){
        transform:rotateY(160deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(6){
        transform:rotateY(200deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(7){
        transform:rotateY(240deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(8){
        transform:rotateY(280deg) translateZ(300px);
    }
    .content-carrousel figure:nth-child(9){
        transform:rotateY(320deg) translateZ(300px);
    }
    .shadow{
        position:absolute;
        box-shadow:0px 0px 30px 0px #000;
        border-radius:4px;

    }
    .content-carrousel img{
        image-rendering :auto;
        transition: all 500ms;
        width:100%;
        height: 100%;
    }
    .content-carrousel img:hover{
        transform:scale(1.2);
        transition:all 500ms;
    }
    @keyframes rotar{
        from{
            transform: rotateY(0deg);
        }to{
            transform: rotateY(360deg);
        }
    }
        
    .write
    {
        margin-top:10px;
        padding: 0px;
        width:1200px;
        height: 800px;
        
        margin-left:70px;
        margin-bottom: 100px;
        
        background-size: cover;
        background-repeat: no-repeat;
       
    }
    p
    {
        font-size:25px;
        margin-bottom: 10px;
    }
    .knockout {
    
    vertical-align: middle;
    text-align: center;
    font-family: 'Pacifico', cursive;
    font-size:50pt;
    color: blue;
    color: #fff;
    background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 34%, #88d8b0 34%);
    background-size: 400%;
     -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
}
.knockout{
        animation: Gradient 5s ease infinite;
        -webkit-animation: Gradient 15s ease infinite;
        -moz-animation: Gradient 5s ease infinite;
}
#piechart
{
    margin-left: 230px;
    width:400px;
    height:300px;
}

@-webkit-keyframes Gradient {
    0% {
        background-position: 30% 50%
    }
    50% {
        background-position: 25% 50%
    }
    100% {
        background-position: 30% 50%
    }
    
}


    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Voting Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="election.php">Upcoming Elections/Results</a></li>
      <li><a href="document.php">Government Id/Documents</a></li>
    </ul>
  </div>
</nav>
    <section class="Slideshow">
        <div class="content">
            <div class="content-carrousel">
                <figure class="shadow"><img src="images/pic1.jpg"></figure>
                <figure class="shadow"><img src="images/pic2.jpg"></figure>
                <figure class="shadow"><img src="images/pic3.jpg"></figure>
                <figure class="shadow"><img src="images/pic4.jpg"></figure>
                <figure class="shadow"><img src="images/pic5.jpg"></figure>
                <figure class="shadow"><img src="images/pic.jpg"></figure>
                <figure class="shadow"><img src="images/pic6.jpg"></figure>
                <figure class="shadow"><img src="images/pic7.jpg"></figure>
                <figure class="shadow"><img src="images/pic8.jpg"></figure>

            </div>
        </div>
    </section>
    <div class="write">
        <h1 class="knockout"><u>Online Voting System</u></h1><br>
        <p>
        An <b>online voting system for Indian election</b> is proposed for the first time in this paper. The proposed model has a greater security in the sense that voter high security password is confirmed before the vote is accepted in the main database of Election Commission of India. The additional feature of the model is that the voter can confirm if his/her vote has gone to correct candidate/party. In this model a person can also vote from outside of his/her allotted constituency or from his/her preferred location. In the proposed system the tallying of the votes will be done automatically, thus saving a huge time and enabling Election Commissioner of India to announce the result within a very short period.</p><br>
        <p>
            It is hard to make the voting system trustworthy only because it has high security requirements: confidentiality and integrity. Confidentiality means all voters get assured about the privacy of votes and prevent selling of votes. Integrity means the assurance of election results and the votes are counted correctly. Integrity is easy to get through a public show of hands, but this dissipates confidentiality and confidentiality comes from the secret ballots, but this fails the integrity.
    </p>
    <h1 class="knockout"> Uploading candidate Information</h1>
    <p>In online voting system, the candidate sends all his/her information with AADHAAR Identity number to the Administrator and only after verifying the candidate data, the Administrator will register candidate according to his/her constituency. At this stage the Administrator also provides a unique candidate ID to each candidate to make a candidate unique. Candidate profile image and Party symbol are also added in this phase with other information. AADHAAR Identity number is compulsory for every candidate to register.</p>
    </div>
   
</body>
</html>