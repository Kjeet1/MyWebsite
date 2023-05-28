<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet"> --> -->
     
    <title>Flower</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">JRCounselling</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" class="d-block"">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" class="d-block">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" class="d-block">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section class="md-5">
    <div class="py-5">
        <h2 class="text-center"><span style="family-font:Kanit"> About Us</span></h2>
    </div>
</section>
<div class="container-fluid">
<div class="row">
   
   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:lavender;">
    <img src="images/7.jpg" class="img-fluid myimage">  
   </div>
   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:lavender;">
   <h2 class="display-5">My Image is a Flower</h2> 
   <p class="py-3">
   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
   </p>
   <a href="about.php" class="btn btn-success">Check More</a>
   </div>

</div>

</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="display-5 text-center">
        Our Services
    </h2>

  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12 ">
      <div class="card" style="width:400px">
      <img class="card-img-top" src="images/11.jpg" alt="Card image">
      <div class="card-body text-center">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
      </div>
</div>
      <div class="col-lg-4 col-md-4 col-12 ">
      <div class="card" style="width:400px">
      <img class="card-img-top" src="images/12.jpg" alt="Card image">
      <div class="card-body text-center">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
      </div>
</div>
<div class="col-lg-4 col-md-4 col-12 ">      
<div class="card" style="width:400px">
      <img class="card-img-top" src="images/13.jpg" alt="Card image">
      <div class="card-body text-center">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
      </div>
  </div>
  </div>
  </div>

</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/8.jpg" class="img-fluid pb-3">
      </div>

    </div>

  </div>

</section>
<section my-5>
  <div py-5>
    <h2 class="text-center">
      Contact Us
    </h2>
  </div>
  <div class="w-50 m-auto">
  <form action="userin.php" method="post">
    <!-- // class="form-inline" -->
  <div class="form-group">
    <label for="user">User Name</label>
    <input type="text" class="form-control" id="user" name="user" placeholder="Enter name">
  </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  

  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
  </div>
  
  <div class="form-group">
    <label for="comment">Comment</label>
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
  </div>

  
  <div class="form-group">
  <!-- <button type="button" class="btn btn-primary" onclick="userinfo.php">Submit</button> -->
  <button type="submit" class="btn btn-success">
    Submit
  </button>
  </div>


</form>
  </div>

<footer>
  <p class="bg-dark text-white p-3">
    @JR Counselling
</p>
</footer>
</section>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>