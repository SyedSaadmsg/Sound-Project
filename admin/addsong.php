<?php
include 'admin_header.php';
include 'config.php';

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <span class=" mb-5 text-white" style="font-size: 40px;">Add Song</span>
                    <br><br>

                    <div class="row">
            <div class="col">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control mb-3" name="txti">

                    <input type="text" required placeholder="Song Name" name="txtsn" class="form-control mb-3">

    <select name="txtan" class="form-control mb-3" >
        <option selected>Artist Name</option>
        <?php
                    $s=mysqli_query($con,"select * from tblartist");
                   
                    foreach($s as $d){
                        echo "
                        <option value='$d[Id]'>$d[Artistname]</option>
                        ";
                        

                    }
                    ?>
    </select>

    <select name="txtal" class="form-control mb-3" >
        <option selected>Album Name</option>
        <?php
                    $s=mysqli_query($con,"select * from tblalbum");
                   
                    foreach($s as $d){
                        echo "
                        <option value='$d[Id]'>$d[Albumname]</option>
                        ";
                        

                    }
                    ?>
                    
    </select>

    <select name="txtg" class="form-control mb-3" >
        <option selected>Genre</option>
        <?php
                    $s=mysqli_query($con,"select * from tblgenre");
                   
                    foreach($s as $d){
                        echo "
                        <option value='$d[Id]'>$d[Genrename]</option>
                        ";
                        

                    }
                    ?>
    </select>

    <select name="txtl" class="form-control mb-3" >
        <option selected>Language</option>
        <option>English</option>
        <option>Urdu</option>
        <option>Punjabi</option>
    </select>
    <select name="txty" class="form-control mb-3" >
        <option selected>Year</option>
        <option>2023</option>
        <option>2022</option>
        <option>2021</option>
        <option>2020</option>
    </select>

    <input type="file" class="form-control mb-3" name="txta">


                   <input type="submit" class="btn btn-dark " name="btnaddsong" value="Add Song">

                </form>
            </div>

<?php
   if(isset($_POST['btnaddsong']))
   {

       $f=$_FILES['txti']['name'];
       $tmp=$_FILES['txti']['tmp_name'];
       move_uploaded_file($tmp,"simage/".$f);

       $n=$_POST['txtsn'];
       $an=$_POST['txtan'];
       $al=$_POST['txtal'];
       $g=$_POST['txtg'];
       $l=$_POST['txtl'];
       $y=$_POST['txty'];

       $a=$_FILES['txta']['name'];
       $tmp=$_FILES['txta']['tmp_name'];
       move_uploaded_file($tmp,"audio/".$a);

    // $insert=mysqli_query($con,"insert into tblsong values('null','$f''$n','$an','$al','$g','$l','$y','$a')");
    $insert = mysqli_query($con, "INSERT INTO tblsong VALUES (null, '$f', '$n', '$an', '$al', '$g', '$l', '$y', '$a')");




    if($insert)
    {
        echo 
            '
            <br></br>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Song Added Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
    }

    else{
        echo 
            '
            <br></br>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Song not Added 
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
            
            
  
       