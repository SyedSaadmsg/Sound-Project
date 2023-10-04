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
<link rel="shortcut icon" href="./assets/./logo/./logo.png" style="width: 300px;" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="./assets//css//style.css">
<title>Play | Sound</title>
<style>
    body{
        background-color: #000000;
    }



.audio-css {
    width: 100%;
    max-width: 600px; /* Adjust the maximum width as needed */
    border: 2px solid #333; /* Add a border */
    border-radius: 8px; /* Add rounded corners */
    background-color: #fff; /* Set a background color for the audio player */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
}

/* Style the audio controls */
.audio-css::-webkit-media-controls {
    background-color: transparent; /* Make the controls background transparent */
}

/* Style the play/pause button */
.audio-css::-webkit-media-controls-play-button {
    background-color: red; /* Change the play button color */
}

/* Style the progress bar */
.audio-css::-webkit-media-controls-progress-bar {
    background-color: red; /* Change the progress bar color */
}


    .audio-css{
           /* background-color: red; */
    color: red;
    width: 37rem;
    border-radius: 0px;
    }
</style>
</head>
<body>

<div class="container">
    <div class="Back-con mt-5">
<a href="index.php" class="text-decoration-none text-light  text-back"><i class="bi bi-arrow-bar-left back-arrow me-2"></i>Back To Home</a>
<div class="text-end Trademark" style="position: relative;bottom:1rem;font-size:20px;">
    <a href="index.php" class="text-decoration-none text-light text-end">@ Sound Org.</a>
</div>
</div>



<div class="row artist-play">
    <div class="col-lg-5">
    <video controls autoplay class="w-100 mb-5"  >
        <source src="./assets//MusicVideos//videos//westernvideo//Alone.Marshmellow.mp4" class="w-100" type="video/mp4">
        <!-- You can also provide additional sources for different video formats here -->
        Your browser does not support the video tag.
    </video>
    </div>
    <div class="col-lg-5">
    <h4 class="card-title text-light artist-txt "><span class="ms-5 me-2">Song Title :-</span>Alone</h4>
    <h4 class="card-title text-light artist-txt  mt-3"><span class="ms-5 me-2">Artist Name :-</span>Marshmellow</h4>
    <h4 class="card-title text-light artist-txt  mt-3"><span class="ms-5 me-2">Genre :-</span>Western Music</h4>
    <h4 class="card-title text-light artist-txt  mt-3"><span class="ms-5 me-2">Language :-</span>English</h4>
    <h4 class="card-title text-light artist-txt  mt-3"><span class="ms-5 me-2">Year :-</span>2021</h4>

    <div class="song-play-area">
                           
                            <div class="audio-wrapper">
                            
                            </div>
                        </div>
    </div>


<h5 class="text-light comments" >Comments (0)</h5>
<textarea name="" id="" cols="30" rows="5" placeholder="Pleasure for Commenting " class="form-control comment-section text-light"></textarea>

<button class="btn btn-primary col-lg-2 mt-3 mb-2 comment-btn" type="submit">Add Comment</button>
</div>








</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>