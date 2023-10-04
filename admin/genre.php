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
    }

</style>
</head>
<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class=" mb-4 text-white">Add Genre</h1> -->
<span class=" mb-5 text-white " style="font-size: 40px;">Add Genre</span>
<br><br>


<div class="row">
<!-- <div class="col"><img src='a.png' class='img-fluid'></div> -->
<div class="col">
<form action="" method="post" enctype="multipart/form-data">
<input type="text" placeholder="Genre Name" name="txtn" class="form-control mb-3 form-style ">
<!-- <select name="txts" class="form-control">
<option>Yes</option>
<option>No</option>
</select> -->
<input type="submit" class="btn btn-dark mt-3" name="btngenre" value="Add Genre">

</form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
            
<?php
   if(isset($_POST['btngenre']))
   {

       $n=$_POST['txtn'];

       
       $insert=mysqli_query($con,"insert into tblgenre values('null','$n')");


    if($insert)
    {
        echo 
            '
            <br><br><br>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Genre Added Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
    }

    else{
        echo 
            '
            <br></br>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Genre not Added 
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
