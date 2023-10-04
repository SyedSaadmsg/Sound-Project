<?php
include 'config.php';

$id=$_GET['A'];



$del=mysqli_query($con,"delete from tblartist where Id='$id'");

if($del)
{
    header("location:viewartist.php");
}

else
{
    echo "Artist Not Deleted";
}

?>