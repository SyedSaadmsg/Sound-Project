<?php
include 'admin_header.php';
include 'config.php';

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
<title>Title</title>
<style>
    .form-style{
        outline: none !important;
        box-shadow: none !important; 
       border-top: none;
       border-bottom: 2px solid #ffffff;
       border-left: none;
       border-right: none;
       color: #ffffff;
        border-radius: 0px;
    }

    .form-style:focus{
        border-bottom: 2px solid #ffffff !important;
        color: #ffffff;
    }

    /* .custom-file-input {
  /* background-color: #000000;
  border-top: 0;
  border-left: 0;
  border-right: 0;
  border-radius: 0;
  color: white; 
  padding: 1rem; 
  font-size: 16px;
  outline: none; */ */


/* Remove default file input styling */
/* .custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
} */

/* .custom-file-input:focus{
  /* background-color: transparent; */
  /* border-bottom: 2px solid #ffffff !important;

} */

/* .custom-file-input::before {
  content: 'Select Your Profile Photo'; /* Display custom text as the button label */
 /* background-color: #000000; */
 /* color: #686d65; */
/* }  */



</style>
</head>
<body>


                <!-- Begin Page Content -->
                <div class="container-fluid" >

                    <!-- Page Heading -->
                    <span class=" mb-5 text-white " style="font-size: 40px;">Add Album</span>
                    <br><br>

                    <div class="row">
            <!-- <div class="col"><img src='a.png' class='img-fluid'></div> -->
            <div class="col">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Album Name" name="txtan" class="form-control mb-5 form-style  " style="background-color: #000000;" >
                    <br><br>
                   <input type="submit" class="btn btn-dark  " name="btnaddalbum" value="Add Album">

                </form>
            </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
   if(isset($_POST['btnaddalbum']))
   {

       $n=$_POST['txtan'];
       $insert=mysqli_query($con,"insert into tblalbum values('null','$n')");


    if($insert)
    {
        echo 
            '
            <br></br>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Album Added Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
    }

    else{
        echo 
            '
            <br></br>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Album not Added 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
    }

  }
    ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            
