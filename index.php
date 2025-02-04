<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">
<link rel="script" href="script.js">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body class="bg-light">
 
 <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
 <div class="container-fluid">
 <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.html">AM HOTEL-Home</a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupport">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 <li class="nav-item">
 <a class="nav-link active me-2"  aria-current="page" href="#">Home</a>
 </li>
 <li class="nav-item">
 <a class="nav-link me-2" href="#">Rooms</a>
 </li>
 <li class="nav-item">
 <a class="nav-link me-2" href="facilities.html">Facilities</a>
 </li>
 <li class="nav-item">
 <a class="nav-link me-2" href="#">Contact us</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="#">About</a>
 </li>
         </ul>
     
         <div class="d-flex">
           
           <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal ">
            Login
           </button>
           <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal ">
           Register
          </button>
 </div>
 </div> 
</nav> 
   
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>
           User login
            </h5>
            <button type="reset" class="btn-close shadow none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-4">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
              </div>
              <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
              </div>
            
              <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                <a href="javascript: void(0) " class="text-secondary text-decoration-none" >Forgot Password?</a>
             
              
              </div>
            </div>
        </form>
        </div>
      </div>
    </div>



      <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>
             User Registration
              </h5>
              <button type="reset" class="btn-close shadow none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc) that will be required during check-in.
                </span>
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-8">
                <label class="form-label">Address</label>
                <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p- mb-3">
                  <label class="form-label">Date of birth</label>
                  <input type="date" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                  
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                  </div>
                </div>

                <div class="text-center my-1">
                  <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                  </div>
  
              
              
            </div>
      </div>
          </form>
          </div>
        </div>
      </div>
<div class="container-fluid px-lg-4 mt-4">
 
  <div class="swiper swiper-container" >
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="https://www.shutterstock.com/image-illustration/hotel-sign-stars-3d-illustration-260nw-195879770.jpg" class="w-100 d-block" />
      </div>
</div>
  </div>

<!-- check availability form -->

<div class="container availability-form">
<div class="row">
<div class="col-lg-12 bg-white shadow p-4 rounded">
<h5 class="mb-4">Check Booking Availability</h5>
<form>
<div class="row align-items-end">
<div class="col-lg-3 mb-3">
<label class="form-label" style="font-weight: 500;">Check-in</label>
<input type="date" class="form-control shadow-none">
</div>
<div class="col-lg-3 mb-3">
<label class="form-label" style="font-weight: 500;">Check-out</label>
<input type="date" class="form-control shadow-none">
</div>
<div class="col-lg-3 mb-3">
<label class="form-label" style="font-weight: 500;">Adult</label>
<select class="form-select shadow-none">
<option selected >Open this select menu</option>
<option value="1">One</option>  
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<div class="col-lg-2 mb-3">
<label class="form-label" style="font-weight: 500;">Children</label>
<select class="form-select shadow-none">
<option selected >Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
  <div class="col-lg-1 mb-lg-3 mt-2">
  <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
  </div>
</div>
</form>
</div>
</div>
</div>

<!-- Our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 my-3">
  <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
    <img src="https://parkregency.in/wp-content/uploads/2021/05/IMG-6263-LR-768x576.jpg" class=card-img-top">
    <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 per night</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      2 Rooms
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Bathroom
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Balcony
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        3 Sofa
      </span>
      </div>
      <div class="facilities mb-4">
      <h6 class="mb-1">Facilities</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Wifi
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      AC
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Room Heater
      </span>
      </div>
      <div class="rating mb-4">
        
        <h6 class="mb-1">Rating</h6>

<span class="badge rounded-pill bg-light">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
        </div>
        <div class="d-flex justify-content-evenly mb-2">
<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
        </div>
        </div>
        </div>
        </div>

<!--2 Room-->
<div class="col-lg-4 col-md-6 my-3">
  <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
    <img src="https://parkregency.in/wp-content/uploads/2021/05/IMG-6263-LR-768x576.jpg" class=card-img-top">
    <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 per night</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      2 Rooms
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Bathroom
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Balcony
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        3 Sofa
      </span>
      </div>
      <div class="facilities mb-4">
      <h6 class="mb-1">Facilities</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Wifi
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      AC
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Room Heater
      </span>
      </div>
      <div class="rating mb-4">
        
        <h6 class="mb-1">Rating</h6>

<span class="badge rounded-pill bg-light">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
        </div>
        <div class="d-flex justify-content-evenly mb-2">
<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
        </div>
        </div>
        </div>
        </div>

<!--3 Room-->
<div class="col-lg-4 col-md-6 my-3">
  <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
    <img src="https://parkregency.in/wp-content/uploads/2021/05/IMG-6263-LR-768x576.jpg" class=card-img-top">
    <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 per night</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      2 Rooms
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Bathroom
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Balcony
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
        3 Sofa
      </span>
      </div>
      <div class="facilities mb-4">
      <h6 class="mb-1">Facilities</h6>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Wifi
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Television
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      AC
      </span>
      <span class="badge rounded-pill bg-light text-dark text-wrap">
      Room Heater
      </span>
      </div>
      <div class="rating mb-4">
        
        <h6 class="mb-1">Rating</h6>

<span class="badge rounded-pill bg-light">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
</span>
        </div>
        <div class="d-flex justify-content-evenly mb-2">
<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
        </div>
        </div>
        </div>
        </div>

        <div class="col-lg-12 text-center mt-5">
<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
</div>
</div>
</div>
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="https://tse1.mm.bing.net/th?id=OIP.RPlL807-N-G9sWfnvX7GnAHaHa&pid=Api&P=0&h=180" width="80px">
<h5 class="mt-3">Wifi</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="https://tse1.mm.bing.net/th?id=OIP.RPlL807-N-G9sWfnvX7GnAHaHa&pid=Api&P=0&h=180" width="80px">
<h5 class="mt-3">Wifi</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
  <img src="https://tse1.mm.bing.net/th?id=OIP.RPlL807-N-G9sWfnvX7GnAHaHa&pid=Api&P=0&h=180" width="80px">
<h5 class="mt-3">Wifi</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="https://tse1.mm.bing.net/th?id=OIP.RPlL807-N-G9sWfnvX7GnAHaHa&pid=Api&P=0&h=180" width="80px">
<h5 class="mt-3">Wifi</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
<img src="https://tse1.mm.bing.net/th?id=OIP.RPlL807-N-G9sWfnvX7GnAHaHa&pid=Api&P=0&h=180" width="80px">
<h5 class="mt-3">Wifi</h5
</div>
</div>
</div>

<!-- Reach us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.90089943376!2d77.46612593299311!3d12.953945614011563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1712917541618!5m2!1sen!2sin" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<h5>Address</h5>
<a href="https://maps.app.goo.gl/8F4JFcQXsxVWydMt7" target="_blank">
<i class="bi bi-geo-alt-fill"></i> AM Hotel, Mukesh, Banglore
</a>
</div>
<div class="col-lg-4 col-md-4">
<div class="bg-white p-4 rounded mb-4">
<h5>Call us</h5>
<a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
<i class="bi bi-telephone-fill"></i> +917778889991
</a>
<br>
<a href="tel: +917778889991" class="d-inline-block text-decoration-none text-dark">
<i class="bi bi-telephone-fill"></i>  +917778889991
</a>
<div class="bg-white p-4 rounded mb-4">
  <h5>Follow us</h5>
  <a href="#" class="d-inline-block mb-3">
  <span class="badge bg-light text-dark fs-6 p-2">
  <i class="bi bi-twitter me-1"></i> Twitter
  </span>
  </a>
  <br>
  <a href="#" class="d-inline-block mb-3">
  <span class="badge bg-light text-dark fs-6 p-2">
    <i class="bi bi-twitter me-1"></i>  Facebook
  </span>
  </a>
  <br>
  <a href="#" class="d-inline-block">
  <span class="badge bg-light text-dark fs-6 p-2">
  <i class="bi bi-instagram me-1"></i> Instagram
  </span>
  </a>
  </div>
</div>
</div>
</div>

<div class="container-fluid bg-white mt-5">
  <div class="row">
  <div class="col-lg-4 p-4">
  <h3 class="h-font fw-bold fs-3 mb-2">AMP HOTEL</h3>
  <p>
    An upscale resort situated near a famous tourist destination nearby, the resort is surrounded by thick trees and city lights. The resort is a wonderful and ideal stay to enjoy a luxurious, relaxing stay while exploring the beauty of Bangalore with family and friends.
  </p>
  </div>
  <div class="col-lg-4 p-4">
    <h5 class="mb-3">Links</h5>
    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
    <h5 class="mb-3">Follow us</h5>
    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
    <i class="bi bi-twitter me-1"></i> Twitter
    </a><br>
    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
    <i class="bi bi-facebook me-1"></i> Facebook
    </a><br>
    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
    <i class="bi bi-instagram me-1"></i> Instagram
    </a><br>
    </div>
    </div>
    </div>
    <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by AM Hotel</h6>
<br><br><br>
        



      
    
        
                      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
    
    <script>
      var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
    });
      </script>
   <?php require('inc/scripts.php') ?>
</body>
</html>