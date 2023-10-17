
<html>
<head>
<title>Smart City Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<style>
            .marquee {
                height: 50px;
	          overflow: hidden;
                position: relative;
                background:black;
                color:green;
                border: 1px solid #4a4a4a;
            }
            
            .marquee p {
                position: absolute;
                width: 100%;
                height: 100%;
                margin: 0;
                line-height: 50px;
                text-align: center;
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
                -moz-animation: scroll-left 2s linear infinite;
                -webkit-animation: scroll-left 2s linear infinite;
                animation: scroll-left 20s linear infinite;
            }
            
            @-moz-keyframes scroll-left {
                0% {
                    -moz-transform: translateX(100%);
                }
                100% {
                    -moz-transform: translateX(-100%);
                }
            }
            
            @-webkit-keyframes scroll-left {
                0% {
                    -webkit-transform: translateX(100%);
                }
                100% {
                    -webkit-transform: translateX(-100%);
                }
            }
            
            @keyframes scroll-left {
                0% {
                    -moz-transform: translateX(100%);
                    -webkit-transform: translateX(100%);
                    transform: translateX(100%);
                }
                100% {
                    -moz-transform: translateX(-100%);
                    -webkit-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
            }
        </style></head>
 <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="img1.png" height="100px" style="background-color:white"><a class="navbar-brand" href="#"><h3 style="padding:0 10px"><b>VITARA</b>: <i> The city beyond dreams</i></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main_front_page.php">Home <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="citizen_page.php">Back to Citizen Page </a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Medical
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="med1.php">Hospitals</a>
          <a class="dropdown-item" href="med2.php">Pharmacy Shops</a>

          <a class="dropdown-item" href="med3.php">Ambulance</a>

</div></li>
 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Education
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="edu1.php">Schools</a>
          <a class="dropdown-item" href="edu2.php">Colleges</a>

          <a class="dropdown-item" href="edu3.php">Institues </a>

          <a class="dropdown-item" href="edu4.php">Libraries</a>
</div></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transport
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="trans1.php">Bus Routes</a>
          <a class="dropdown-item" href="trans2.php">Trains</a>

          <a class="dropdown-item" href="trans3.php">Airport</a>
          <a class="dropdown-item" href="trans4.php">Highways</a>
</div></li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Know more Places
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="hotels.php">Hotels</a>
          <a class="dropdown-item" href="ind.php">Industries</a>
</div></li>
    </ul>
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="row" style="background-color:grey;">
  <div class="col-sm-8"><h1 style="text-align:center">HELLO ,WELCOME TO CITIZEN PAGE</h1></div>
<div class="col-sm-4" style="padding:0 230px"> <a href="main_front_page.php">    
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color:black;" ><h5>Log Out</h5></button>

</a>
 </div>
 
</div>    

 
<div id="demo" class="carousel slide" data-ride="carousel" >
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="img\citi.jpeg" alt="Chicago" width="100%" height="500">
      <div class="carousel-caption">
        <h3>VITARA</h3>
        <p>Thank you, VITARA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\citizen1.jpeg" alt="New York" width="100%" height="500">
     </div>
   <div class="carousel-item">
      <img src="img\citizen3.jpeg" alt="Los Angeles" width="100%" height="500">
      </div>
   </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container" >
			<div class="scroll-messages col-xs-12 col-sm-12 col-md-12 col-lg-12" >
				
						<div class="marquee col-xs-12 col-sm-12 col-md-12 col-lg-12" >
							<p ><b>Citizen helpline Number 9045224651----------Citizen Helpline e-Mail :vitarahelpline@gmail.com---------- Helpline for Sr Citizen 021-14567</p></b>
</div>
					</div>
					</div>
	
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


