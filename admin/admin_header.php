<?php
session_start();
include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sound Admin Pannel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
    <!-- form -->
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- jQuery Link -->
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<style>
body{
    background-color: #000000 !important;
}    
</style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background-color: red;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3"><img src="./logo/logo.png" height="100px" width="150px" alt=""></div>
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0 bg-success"> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider bg-success"> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item ">
                 <a class="nav-link collapsed" href="topsong.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/song.png" style="width: 20px; height: 20px;" alt="">
                    <span>Top Songs</span>
                </a>
                 <a class="nav-link collapsed" href="viewtopsong.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/song.png" style="width: 20px; height: 20px;" alt="">
                    <span>View Top Songs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="addartist.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!-- <i class=""></i> -->
                    <img src="./icons/artist.png" style="width: 20px; height: 20px;" alt="">
                    <span>Add Artist</span>
                </a>
                <a class="nav-link collapsed" href="viewartist.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!-- <i class=""></i> -->
                    <img src="./icons/artist.png" style="width: 20px; height: 20px;" alt="">
                    <span>View Artist</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="addalbum.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/album.png" style="width: 20px; height: 20px;" alt="">
                    <span>Add Album</span>
                </a>
                <a class="nav-link collapsed" href="viewalbum.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/album.png" style="width: 20px; height: 20px;" alt="">
                    <span>View Album</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="addsong.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/song.png" style="width: 20px; height: 20px;" alt="">
                    <span>Add Song</span>
                </a>
                <a class="nav-link collapsed" href="viewsong.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/song.png" style="width: 20px; height: 20px;" alt="">
                    <span>View Song</span>
                </a>
            </li>

            <li class="nav-item ">
                 <a class="nav-link collapsed" href="genre.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/categories.png" style="width: 20px; height: 20px;" alt="">
                    <span>Genre </span>
                </a>
            </li>

             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item ">
                 <a class="nav-link collapsed" href="user.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/user.png" style="width: 20px; height: 20px;" alt="">
                    <span>User</span>
                </a>
            </li>

             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item ">
                 <a class="nav-link collapsed" href="user.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/review.png" style="width: 20px; height: 20px;" alt="">
                    <span>Reviews</span>
                </a>
            </li>
             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item ">
                 <a class="nav-link collapsed" href="user.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <img src="./icons/rating.png" style="width: 20px; height: 20px;" alt="">
                    <span>Rating</span>
                </a>
            </li>
            <!--  -->
            
            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Divider -->
            <hr class="sidebar-divider bg-success">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #000000;">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                      
  <!-- Button trigger modal -->
  <!-- <button type="button"  class="btn btn-dark btn-login"   data-bs-toggle="modal" data-bs-target="#modalId">
         Login 
       </button> -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- profile work -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
