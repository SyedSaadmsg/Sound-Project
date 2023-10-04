
<div class="col-lg-9" style="background-color: #000000;">
  <div class="card-body " style="background-color: #000000;">
          <div class="text-end">
          
       <!-- Button trigger modal -->
       <button type="button"  class="btn fw-bold col-lg-2 py-3 ms-3 btn-login"   data-bs-toggle="modal" data-bs-target="#modalId">
         Login 
       </button>
       
       <!-- Modal -->
       <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content modal-style">
              <div class="text-center">
                <img src="./assets/logo/logo.jpg" width="250px" alt="">     
                <form action=""  method="post" >  
                </div>
            <div class="modal-body">
              <div class="container-fluid text-start">
              

                <input type="text" class="form-control text-light mt-5" placeholder="Your Email Address" name="txte" style="background-color: #000000;border-top:0px; border-left:0px; border-right:0px; border-radius:0px; ">

                <input type="password" class="form-control text- mt-5" placeholder="Your Sound's Security Pass" name="txtp" style="background-color: #000000;border-top:0px; border-left:0px; border-right:0px; border-radius:0px; ">
                 
               

              
              </div>
            </div>
            <div class="mt-3 mb-3 text-center">
           
              <button type="submit" class="btn login-btn btn-m" name="btnl">Wellcome Back</button>
            </div>
            <?php
    if(isset($_POST['btnl']))
    {
        $e=$_POST['txte'];
        $p=$_POST['txtp'];
        $select=mysqli_query($con,"select * from tbluserrecord where Email='$e' and Password='$p'");
        $fetch=mysqli_fetch_assoc($select);
        if(mysqli_num_rows($select))
        {
      echo"<script>alert('login Successfully');</script>";
        }
        else
        {  
            echo "<script>alert('Error in login');</script>";
        }


    }

    ?>
            </form> 
          </div>
        </div>
       </div>
  
       