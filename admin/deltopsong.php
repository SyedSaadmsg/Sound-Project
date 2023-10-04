<?php
include 'config.php';

$id=$_GET['A'];



$del=mysqli_query($con,"delete from tbltopsong where Id='$id'");

if($del)
{
    header("location:viewtopsong.php");
}

else
{
    echo "Catagory Not Added";
}

?>