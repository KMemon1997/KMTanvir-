<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---bootstrap CSS---->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!---font Awesome CSS---->

    <link rel="stylesheet" href="css/all.min.css">

    <!--Google Font-->

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
    <!---Costom CSS-->

    <link rel="stylesheet" href="css/style.css">
    
    <title>ISchool</title>
</head>
<body>
<!---Star Navigation---->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">iSchool</a>
  <samp class="navbar-text">Learn with Fun!!!</samp>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item"><a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Courses</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Payment</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">My Profile</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Logout</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Singup</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Feedback</a>
      </li>
      <li class="nav-item custom-nav-item"><a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<!---End Navigation--->

<!---Start Video BG--->

<div class="container-fluid remove-vid-marg">
  <div  class="vid-parent"> 
    <video playsinline autoplay muted Loop>
       <source src="video/bgvid.mp4">
      </video>
  </div>
  <div class=" vid-content">
    <h1 class="my-content">Welcome to iSchool</h1>
    <small class="my-content">Learn With Fun</small>
    <br><br>
    <a href="#" class="btn btn-danger">Get Started</a>
  </div>
</div>
<!---End Video BG--->

<!---Start Text banner--->
  <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
      <div class="col-sm">
          <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses </h5>
      </div>
      <div class="col-sm">
          <h5><i class="fas fa-users mr-3"> </i>Expert Instructors</h5>
      </div>
      <div class="col-sm">
          <h5><i class="fas fa-keyboard mr-3"></i> LifeTime Access</h5>
      </div>
      <div class="col-sm">
          <h5><i class="fas fa-dollar-sign mr-3"></i>Money Back Guarantee*</h5>
      </div>
    </div>
  </div>
<!---End Text banner--->




<!---Jquery And Bootstrap JavaScript---->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>