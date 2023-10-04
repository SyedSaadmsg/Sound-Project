<?php
include "config.php";
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


   .gradient-custom {
/* fallback for old browsers */





}

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
              <p class="head-title mb-5">Please enter detail to register to  Sound.Org !</p>
              <form class="row contact_form" action="#" method="post" enctype="multipart/form-data">

              <div class="form-outline form-white mb-4">
                <input type="email " id="typeEmailX" name="txtn" class="form-control form-css form-control-lg " />
                <label class="form-label " for="typeEmailX" >Enter Your Username</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email " id="typeEmailX" name="txte" class="form-control form-css form-control-lg" />
                <label class="form-label " for="typeEmailX">Enter Your Email</label>
              </div>


              <div class="form-outline form-white mb-4 style">
                <input type="password" name="txtp" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>


              <div class="form-outline form-white mb-4">
                <input type="password" name="txtcp" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Confirm Password</label>
              </div>

             
              <button class="btn btn-outline-light btn-lg px-5 mt-3" name="btnsignup" value="submit" type="submit">Sign In</button>
              <!-- <button type="submit" value="submit" name="btnsignup" class="btn_3">
                                        Sign Up
                                    </button> -->


            </div>


            <?php

if(isset($_POST['btnsignup']))    
{
    $n=$_POST['txtn'];
    $e=$_POST['txte'];
    // $t=$_POST['txtt'];
    $p=$_POST['txtp'];
    $cp=$_POST['txtcp'];

    if($p==$cp)
    {
        $insert=mysqli_query($con,"insert into tbluser values('null','$n','$e','$p')");
       // $insert=mysqli_query($con,"insert into tblsignup values('null','$n','$e','$p')");
        echo '<div class="mt-3 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>!!Account Has Been Successfully Created!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';


    echo
    '
    <meta http-equiv="refresh" content="3; URL=login.php"/>

    ';
    
    }
else
{
    echo '<div class="mt-3 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>!!Password not Matched!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
}

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