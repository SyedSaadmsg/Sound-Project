<?php
include 'config.php';

$id=$_GET['A'];



$del=mysqli_query($con,"delete from tblsong where Id='$id'");

if($del)
{
    header("location:viewsong.php");
}

else
{
    echo "Song Not Deleted";
}

?>