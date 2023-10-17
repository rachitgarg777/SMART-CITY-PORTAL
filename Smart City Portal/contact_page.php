	<!DOCTYPE html>
<html>
<head>
<title>Smart City Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css ">
<link rel="stylesheet" href="contactstyle.css">

 <body style="background-image:url(img/login_pic_bg.jpg); background-size: cover;background-repeat:no-repeat">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="img1.png" height="100px" style="background-color:white"><a class="navbar-brand" href="#"><h3  style="padding:0 10px"><b>VITARA</b>: <i> The city beyond dreams</i></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main_front_page.php">Home <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="photos.php">Photogallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tourism.php">Tousrism</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="maps.php">Maps</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Know about the city
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="history.php">History</a>
          <a class="dropdown-item" href="about.php">About</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contact_page.php">Contact Us</a>
        </div>
      </li>
    </ul>
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="row" style="background-color:grey;">
  <div class="col"><h1 style="text-align:center">CONTACT US </h1></div>
</div>
<div class="container" style="width:700px;height:600px">
  <form action="contact_page_php_code.php" method="post" >

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">
<label for="lname">Mobile no.</label>
    <input type="text" id="lname" name="mobile" placeholder="Your mobile number..">

   

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

					<table style="margin:40px 0px" class="table table-hover table-dark table-bordered">
						<thead style="background-color:grey;">
							<tr>
								<th class="text-center">Serial No.</th>
								<th class="text-center">Department Details</th>
								<th class="text-center">Contact Details</th>
								<th class="text-center">Office/ Mobile No.</th>
								<th class="text-center">Email ID</th>
							</tr>
						</thead>
						<tbody>
							<tr>
									<td>1</td>
										<td>Information Collector </td>
										<td>Ms Tanushree Sharma,,</td>
										<td>
											<span>
												Mobile No.
												: 9887785678 </span>
										</td>
										<td>
											<span>publicoffices@gmail.com</span>
										</td>
									</tr>
							<tr>
									<td>2</td>
										<td>Project Management/Administration </td>
										<td>Mr. Rachit Garg,,</td>
										<td>
											<span>
												Mobile No.
												: 9078563456 </span>
										</td>
										<td>
											<span>admin123@gmail.com</span>
										</td>
									</tr>
							<tr>
									<td>2</td>
										<td>Presentation Management</td>
										<td>Mr. Vibhu Parashar,,</td>
										<td>
											<span>
												Mobile No.
												: 8978563456 </span>
										</td>
										<td>
											<span>ppt343@gmail.com</span>
										</td>
									</tr>
<tr>
									<td>2</td>
										<td>Backend Management </td>
										<td>Mr. Vishal Kumar,</td>
										<td>
											<span>
												Mobile No.
												: 7978563456 </span>
										</td>
										<td>
											<span>back563@gmail.com</span>
										</td>
									</tr>
							
							</tbody>
					</table>
	
		
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>