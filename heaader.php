<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="./assets/./css/./style.css">
<title>Title</title>
</head>
<body>
<!-- Background image with overlay -->
<div class="bg-img"></div>

<!-- Content container -->
<div class="container-fluid">
  <!-- Navbar Starts -->
  <nav  class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid" style="position: relative;">
      <a class="navbar-brand" href="#">
        <img src="./assets//logo//logo.png" alt="Logo" width="100px" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
          
         
          <li class="nav-item">
            <a class="nav-link " aria-disabled="true">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-disabled="true">About Us</a>
          </li>
      
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="category.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Audio Tracks
          </a>
          <ul class="dropdown-menu" style="background-color: #000;">
          <?php
							  $select=mysqli_query($con,"select *from tblgenre");
							  foreach($select as $data)
							  {
								echo 
								"
								<li class='nav-item active'><a class='nav-link' href='category.php?A=$data[Id]'>$data[Genrename]</a></li>
								";
							  }
							?>
          </ul>   
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="video.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Video Tracks
          </a>
          <ul class="dropdown-menu" style="background-color: #000;">
          <?php
							  $select=mysqli_query($con,"select *from tblgenre");
							  foreach($select as $data)
							  {
								echo 
								"
								<li class='nav-item active'><a class='nav-link' href='video.php?A=$data[Id]'>$data[Genrename]</a></li>
								";
							  }
							?>
          </ul>
        </ul>
        
        <div class="d-flex Login-setup" >
         <a href="login.php" class="text-decoration-none Login">Login </a>
         <span class="ms-2 text-light fw-bold" >/</span>
         <a href="SignIn.php" class="text-decoration-none ms-2 Register">SignIn</a>
        </div>
      </div>
    </div>
  </nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>