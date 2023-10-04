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
<link rel="stylesheet" href="assets/css/style.css">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet">
<title>Login | Sound</title>
<style>
    
    body{
        background: linear-gradient(to bottom, red, black);
        font-family: 'Ysabeau Infant', sans-serif;
    }
   /* .gradient-custom { */
/* fallback for old browsers */





/* } */

.full-height {
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .head-title{
            font-family: 'Ysabeau Infant', sans-serif;
        }

        .emailcss{
            border-top: none;
        }
        
</style>
</head>
<body>




<section class=".full-height gradient-custom">
  <div class="container py-5 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 ">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <img src="./assets//logo//logo.png" class="w-50" alt="">
              <p class="head-title mb-5">Please enter credentials to login to Sound.Org !</p>
              <form class="row contact_form" action="#" method="post" enctype="multipart/form-data">

              <div class="form-outline form-white mb-4">
                <input type="email " name="txte" id="typeEmailX" class="form-control form-css form-control-lg" />
                <label class="form-label " for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4 style">
                <input type="password" name="txtp" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

           

              <button class="btn btn-outline-light btn-lg px-5 mt-5" name="btnlogin" type="submit">Login</button>

             

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="SignIn.php " class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>
            <?php 

if(isset($_POST['btnlogin']))
{

   $e=$_POST['txte'];
   $p=$_POST['txtp'];

   $select=mysqli_query($con,"select * from tbluser where Email='$e' and Pass='$p'");

   $fetch=mysqli_fetch_assoc($select);

   if(mysqli_num_rows($select))
   {
       $_SESSION['e']=$fetch['Email'];

       echo '
<div class="spinner-border text-danger" role="status">
<span class="sr-only">Loading...</span>
</div>';

echo '<meta http-equiv="Refresh" content="3; url=index.php" />';

   }
   else{

       echo "<script>alert=('Password Not Matched')</script>";
   }

 };
 ?>
    </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
</body>
</html>