<?php
include 'admin_header.php';
include 'config.php';
?>

   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->                    
<span class=" mb-5 text-white" style="font-size: 40px;">View All Song</span>
<br><br>


   <table class="table table-dark" id="myTable">
      <thead>
         <tr>
            <th>Song Name</th>
            <th>Artist Name</th>
            <th>Image</th>
            <th>Action</th>

         </tr>
      </thead>
      <tbody>
         <?php
            $select=mysqli_query($con,"select * from tbltopsong");
            foreach($select as $data)
            {
               echo 
               "
               <tr>
               <td>$data[Songname]</td>
               <td>$data[Artistname]</td>
               <td><img src='topsongimg/$data[Image]' width=50 height=50</td>
               <td>
               <a href='deltopsong.php?A=$data[Id]' class='btn btn-danger'>Delete</a>
               </td>
               </tr>
               ";

            }

         ?>
      </tbody>
   </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

