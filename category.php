<?php 
include "config.php";
include "heaader.php";
?>

<div class="container">
    <div class="row">
 

        <?php
        if(isset($_GET['A']))
        {
            $select=mysqli_query($con,"select * from tblsong ");
            foreach($select as $data)
            {
        ?>
                <div class='col-lg-3 col-md-6 col-sm-12'>
                    <div class='card text-start' style='width: 16rem; background-color: #000000; border-radius: 10px; cursor: pointer;'>
                        <img class='card-img-top px-3 py-3' src='admin/simage/<?php echo $data['Image']; ?>' style='border-radius: 25px; width: 250px; height: 250px;' alt='Title'>
                        <div class='card-body'>
                            <h4 class='card-title text-light artist-txt'><?php echo $data['Songname']; ?></h4>
                            <p class='card-text text-secondary artist-name' style='cursor: pointer;'><?php echo $data['Albumname']; ?></p>
                            <a href='artist2.php' id='login.php' class='text-light text-decoration-none'>
                                <i class='bi bi-play-circle me-2 play-button'></i><span class='text-btn'>Play Now</span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        else
        {
            $select=mysqli_query($con,"select * from tblsong");
            foreach($select as $data)
            {
        ?>
                <div class='col-lg-3 col-md-6 col-sm-12'>
                    <div class='card text-start' style='width: 16rem; background-color: #000000; border-radius: 10px; cursor: pointer;'>
                        <img class='card-img-top px-3 py-3' src='admin/simage/<?php echo $data['Image']; ?>' style='border-radius: 25px; width: 250px; height: 250px;' alt='Title'>
                        <div class='card-body'>
                            <h4 class='card-title text-light artist-txt'><?php echo $data['Songname']; ?></h4>
                            <p class='card-text text-secondary artist-name' style='cursor: pointer;'><?php echo $data['Albumname']; ?></p>
                            <a href='alanwalker.php' id='login.php' class='text-light text-decoration-none'>
                                <i class='bi bi-play-circle me-2 play-button'></i><span class='text-btn'>Play Now</span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>
