<?php
include 'config.php';

$id=$_GET['A'];



$del=mysqli_query($con,"delete from tblalbum where Id='$id'");

if($del)
{
    header("location:viewalbum.php");
}

else
{
    echo "Album Not Deleted";
}

?>