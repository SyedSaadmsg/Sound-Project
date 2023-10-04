<?php
include "config.php";
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="./assets//css//style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="shortcut icon" href="./assets//logo//logo.png" style="width: 500px;" type="image/x-icon">
<!-- end -->
<title>Sound | Home</title>
<style>

  @keyframes zoomIn {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.05); 
    }
    100% {
      transform: scale(1);
    }
  }
  
  
  @keyframes zoomOut {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(0.95); 
    }
    100% {
      transform: scale(1);
    }
  }
  
  
  .bg-img {
  position: absolute; 
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1;
  background: url("./assets/backgroundimg/bg-1.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  animation: zoomIn 5s infinite alternate;
  transform-origin: center;
  height: 120vh;
 
}

  
  
  .bg-img::after {
    content: "";
    background: rgba(0, 0, 0, 0.5); 
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0; 

  }
  
  .container-fluid {
    position: relative;
    z-index: 1; 
  
  }
  
  .container-fluid a, .container-fluid button {
    pointer-events: auto; 
  }
  
  
  @media (max-width: 425px) {
    .bg-img {
      background-size: contain; 
    }
  }


  .btn-style{
    border: 2px solid #eee;
    border-radius: 0px;
  }


.play-button {
  font-size: 30px;
  cursor: pointer;
}


.text-btn{
  position: relative;
  bottom: 3px;
  font-weight: bold;
 left: -6px; 
 font-size: 18px;
 font-family: 'Ysabeau Infant', sans-serif;
 cursor: pointer;
}

.artist-txt{
  font-family: 'Ysabeau Infant', sans-serif;
}

.previous{
left: -10rem;
}


.next{
  right: -10rem;
}

.about-head{
  margin-top: 5rem;
  color:red;
  font-size: 45px;
  text-align: center;
  font-family: 'Ubuntu', sans-serif;
  font-weight: bold;
  position: relative;
  
}


.text-about{
  margin-top: 4rem !important;
    text-align: center;
    font-family: 'Ubuntu', sans-serif;
    color: #eee;
    font-weight: bold;
    font-size: 15px;
}




.contact-style{
  background-color: transparent;
  border-radius: 0px;
 border-top: none;
 border-right: none;
 border-left: none;
 border-bottom: 2px solid #fff9e0;
 color: #fff9e0;
}

.contact-style::placeholder{
  font-family: 'Ysabeau Infant', sans-serif;
  color: #fff9e0;;
}


.contact-style:focus{
background-color: transparent;
box-shadow: none;
outline: none;
border-bottom: 2px solid red;
}


.modal-content {
    background-color: white;
    color: black;
  }



</style>
</head>
<body>
<!-- Background image with overlay -->
<div class="bg-img"></div>

<!-- Content container -->
<div class="container-fluid">
  <!-- Navbar Starts -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" style="position: relative;">
        <a class="navbar-brand" href="index.php">
            <img src="./assets//logo//logo.png" alt="Logo" width="100px" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#contact" aria-disabled="true">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#about" aria-disabled="true">About Us</a>
                </li>

                <?php
                if (isset($_SESSION['e'])) {
                    // User is logged in, show audio and video tracks
                    echo '<li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Audio Tracks
                            </a>
                            <ul class="dropdown-menu" style="background-color: #000000;">';

                    $select = mysqli_query($con, "select * from tblgenre");
                    foreach ($select as $data) {
                        echo "<li class='nav-item active'><a class='nav-link' href='category.php?A=$data[Id]'>$data[Genrename]</a></li>";
                    }

                    echo '</ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Video Tracks
                            </a>
                            <ul class="dropdown-menu" style="background-color: #000000;">';

                    $select = mysqli_query($con, "select * from tblgenre");
                    foreach ($select as $data) {
                        echo "<li class='nav-item active'><a class='nav-link' href='video.php?A=$data[Id]'>$data[Genrename]</a></li>";
                    }

                    echo '</ul>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                          </li>';
                } else {
                    // User is not logged in, show login and sign-up links
                    
                    echo '<li class="nav-item ms-auto">
                            <a class="nav-link" href="login.php">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="SignIn.php">SignUp</a>
                          </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

  <!-- Navbar End -->

  <!-- Banner Start -->
  <div class="container-fluid mt-5">
    <div class="row" style="overflow-y: hidden;">

      <div class="col-lg-12">
        <H3 class="banner-brand ms-5 mt-5">Sound</H3>
        <p class="banner-txt ms-5 text-center">Are You Ready ?<span class="typed text-light ms-3"  id="rex" ></span></p>
        <div class="text-center">
        <a href="" class="btn mt-2 mx-auto btn-exp">Explore Now</a>
        </div>
      </div>
   
    </div>
  </div>
<!-- Banner End -->



</div>
<div class="container ">
    <div class="row">
      <div class="col-lg-12 text-center story">
        <h3 class="mt-3 story-heading"><i class="bi bi-stars star-icon me-3"></i>Our Story<i class="bi bi-stars star-icon ms-3"></i></h3>
        <p class="mt-3 story-text mb-5">
          At Sound.Org, our journey began with a simple yet powerful mission: to entertain people. In 2022, we embarked on this exciting venture, fueled by a shared passion for creating unforgettable experiences for our audience. Our dedication to this mission is unwavering. Every project, every line of code, and every creative endeavor is driven by the desire to bring joy and entertainment to people's lives. We're not just a website; we're a hub of experiences that resonate with our customers. Looking ahead, our vision is clear: to continue entertaining people across the globe. We believe that entertainment has the power to connect, inspire, and uplift, and we're committed to being at the forefront of this movement.
          As we move forward, we invite you to be part of our story. Join us on this exciting journey as we strive to fulfill our mission and bring joy to hearts worldwide through the power of entertainment.
          Thank you for being part of the Sound.Org community. Together, we'll create memorable moments that last a lifetime.
        </p>
      </div>
    </div>
  </div>



<!-- Featured -->
<div class="container">
<P class="Top-text mt-3">Top Featured On Sound</P>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
        <!-- Card 1 -->
        <?php
        $select=mysqli_query($con,"select * from tbltopsong");
            foreach($select as $data)
            {
              echo "
              <div class='col-lg-3 col-md-6 col-sm-12'>
              <div class='card text-start' style='width: 16rem; background-color: #000000; border-radius: 10px; cursor: pointer;'>
                  <img class='card-img-top px-3 py-3' src='admin/topsongimg/$data[Image]' style='border-radius: 25px;' alt='Title'>
                  <div class='card-body'>
                      <h4 class='card-title text-light artist-txt'>$data[Artistname]</h4>
                      <p class='card-text text-secondary artist-name' style='cursor: pointer;'>$data[Songname]</p>
                      <a href='artist2.php' class='text-light text-decoration-none'>
                          <i class='bi bi-play-circle me-2 play-button'></i><span class='text-btn'>Play Now</span>
                      </a>
                  </div>
              </div>
          </div>
          ";
            }
                  ?>



    </div>
   
</div>



  </div>
</div>
</div>
<!-- End -->


<!-- Audio Tracks Start -->


<div class="container" id="about">
<P class="about-head  ">About Us</P>
<p class=" text-about">At Sound, our mission is clear: we exist to entertain, sell happiness, and share messages of peace through the universal language of music. Our platform is a celebration of diverse musical genres, including hip-hop, western, cultural, Indian, Punjabi, Pakistani hip-hop, and pop music.



We believe in the power of music to calm the soul and bring people together. In a world filled with chaos, we curate playlists and artist spotlights to transport you to a place of serenity and joy.

Join the Sound Experience

Sound is your gateway to musical exploration. Our team of music enthusiasts is dedicated to curating tracks that inspire, uplift, and resonate with your soul.


We're not just about music; we're about unity and peace. Through the notes and lyrics we share, we aim to inspire togetherness and understanding.

Thank you for being part of the Sound community. Let's make the world brighter through the magic of music. </p>
</div>



<div class="container-fluid" id="contact">
  <P class="about-head text-center" style="color: red;">Contact Us</P>


<div class="row">


<div class="col-lg-6">
<form action="">

<div class="row">
  <div class="col-lg-6"><input type="text" class="form-control mt-5 ms-2 contact-style  text-light" placeholder="Enter Your First Name" required></div>
  <div class="col-lg-6"><input type="text" class="form-control mt-5 ms-2 contact-style  text-light"  placeholder="Enter Your Last Name" required></div>
</div>

<div class="row">
  <div class="col-lg-6"><input type="text" class="form-control mt-4 ms-2  text-light contact-style" placeholder="Enter Your  Email" required></div>
  <div class="col-lg-6"><input type="text" class="form-control mt-4 ms-2  text-light contact-style" placeholder="Enter Your Phone Number" required></div>
</div>

<textarea name="" id="" class="form-control ms-2 mt-4 text-light contact-style" cols="30" rows="5" placeholder="Any Suggestions For Us" required pattern="[0-9]{4}-[0-9]{6}"></textarea>

<div class="text-center">


<button class="btn mt-5 " style="border: 2px solid #eee; width:140px; color:#fff9e0;border-radius:0px;">Submit</button>
</form>
</div>
</div>
<div class="col-lg-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.313993951665!2d67.14721147157573!3d24.88726909539019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339999415e0c3%3A0x36742eee0fd9c291!2sAptech%20Metro%20Star%20Gate!5e0!3m2!1sen!2s!4v1692854092849!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>





<footer class=" text-center text-lg-start mt-3" style="width: 85rem;background-color:red;">
  <!-- Copyright -->
  <div class="text-center  p-3" style="background-color: rgba(0, 0, 0, 0.2); color:#eee;">
    © 2023 Copyright:
    <a class="" href="" style="color:#eee;">Sound.Org</a>
  </div>
  <!-- Copyright -->
</footer>


</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
<!-- Jquery Cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- end -->
<!-- Js owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    function typeText(textArray) {
      const container = document.getElementById("rex");
      let currentIndex = 0;
      let currentText = textArray[currentIndex];
      let i = 0;
      let direction = "up";
      let interval = setInterval(function () {
        if (direction === "up") {
          container.innerHTML += currentText.charAt(i);
          i++;
          if (i > currentText.length) {
            i = currentText.length - 1;
            direction = "down";
          }
        } else if (direction === "down") {
          container.innerHTML = container.innerHTML.slice(0, -1);
          i--;
          if (i < 0) {
            i = 0;
            direction = "up";
            currentIndex++;
            if (currentIndex >= textArray.length) {
              currentIndex = 0;
            }
            currentText = textArray[currentIndex];
          }
        }
      }, 100);
    }

    const textArray = ["To Get Entertained...", "To Fell The Magic...", "To Moshpit On The Beat..."];
    typeText(textArray);
  });








document.addEventListener("DOMContentLoaded", function() {
  // Set the first tab as active when the page loads
  document.querySelector(".tablinks.active").click();
});

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}




</script>
</body>
</html>
