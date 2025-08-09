<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include("admin/conf/config.php");
$ret = "SELECT * FROM `ib_systemsettings`";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
$sys = $res->fetch_object();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $sys->sys_name; ?> - <?php echo $sys->sys_tagline; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 4.6 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
    html, body { scroll-behavior: smooth; font-family: 'Segoe UI', sans-serif; }
    .navbar { background-color: #ffffffee; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    .navbar a.nav-link { color: #333; font-weight: 500; margin-right: 20px; }
    .navbar a.nav-link:hover { color: #007bff; }
    .hero {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('dist/bg.gif') center/cover no-repeat;
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .footer { background-color: #f8f9fa; padding: 30px 0; text-align: center; }
    .btn { border-radius: 8px; }
    .card-hover { transition: all 0.3s ease-in-out; border: none; border-radius: 10px; }
    .card-hover:hover { transform: translateY(-6px); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); }

    .marquee-container {
      overflow: hidden;
      position: relative;
      background-color: #ffc107;
      color: #000;
      font-weight: bold;
    }
    .marquee-text {
      display: inline-block;
      white-space: nowrap;
      animation: marquee 25s linear infinite;
    }
    @keyframes marquee {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }

    @media (max-width: 768px) {
      .hero h1 { font-size: 2rem; }
      .hero p, .hero ul { font-size: 1rem; }
      .navbar a.nav-link { margin-right: 10px; font-size: 0.9rem; }
    }
  </style>
</head>

<body class="bg-light">

<!-- ✅ NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand font-weight-bold d-flex align-items-center" href="#home">
      <img src="dist/logo.png" alt="Bank Logo" style="height: 32px; width: 32px;" class="mr-2">
      Sonar Bangla Bank Ltd.
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#accounts">Accounts</a></li>
        <li class="nav-item"><a class="nav-link" href="#loans">Loans</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="client/pages_client_index.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ HERO SECTION -->
<section class="hero text-center" id="home">
  <div class="container">
    <h1 class="display-4 animate__animated animate__fadeInDown mb-3">Welcome to Sonar Bangla Bank Ltd.</h1>
    <p class="lead animate__animated animate__fadeInUp mb-4">Empowering your financial future with secure and innovative solutions tailored for you.</p>

    <div class="d-flex flex-wrap justify-content-center mb-3">
      <a href="client/pages_client_signup.php" class="btn btn-success btn-lg mr-2 mb-2">Open an Account</a>
      <a href="client/pages_client_index.php" class="btn btn-outline-light btn-lg mb-2">Login to Internet Banking</a>
    </div>

    <ul class="list-inline text-light animate__animated animate__fadeInUp">
      <li class="list-inline-item mx-2"><i class="fas fa-check-circle text-success"></i> 24/7 Online Access</li>
      <li class="list-inline-item mx-2"><i class="fas fa-check-circle text-success"></i> Secure Fund Transfers</li>
      <li class="list-inline-item mx-2"><i class="fas fa-check-circle text-success"></i> Quick Customer Support</li>
    </ul>

    <p class="mt-4 text-light animate__animated animate__fadeIn">Your journey to smarter banking starts here.</p>
  </div>
</section>

<!-- ✅ RUNNING MESSAGE / MARQUEE SECTION -->
<section class="marquee-container py-2">
  <div class="container-fluid">
    <div class="marquee-text">
      Important Update: Our Internet Banking service will be temporarily unavailable tonight from 12am to 3am for maintenance. Thank you for your patience and understanding!
    </div>
  </div>
</section>

<!-- ✅ 4/3 Slide -->
<!-- ✅ 4/3 Slide -->
<div id="cards-slider" class="container-fluid p-0 overflow-hidden py-5 bg-white position-relative">
  <div class="slider-wrapper d-flex">
    <!-- Example Slides -->
    <div class="card-slide">
      <img src="images/banner1.jpg" alt="Banner 1" class="img-fluid w-100">
      <a href="#" class="btn btn-primary btn-block know-more-btn">KNOW MORE</a>
    </div>
    <div class="card-slide">
      <img src="images/banner2.jpg" alt="Banner 2" class="img-fluid w-100">
      <a href="#" class="btn btn-primary btn-block know-more-btn">KNOW MORE</a>
    </div>
    <div class="card-slide">
      <img src="images/banner3.jpg" alt="Banner 3" class="img-fluid w-100">
      <a href="#" class="btn btn-primary btn-block know-more-btn">KNOW MORE</a>
    </div>
    <div class="card-slide">
      <img src="images/banner4.jpg" alt="Banner 4" class="img-fluid w-100">
      <a href="#" class="btn btn-primary btn-block know-more-btn">KNOW MORE</a>
    </div>
    <div class="card-slide">
      <img src="images/banner5.jpg" alt="Banner 5" class="img-fluid w-100">
      <a href="#" class="btn btn-primary btn-block know-more-btn">KNOW MORE</a>
    </div>
  </div>

  <!-- Manual controls -->
  <button class="slide-prev btn btn-dark position-absolute" style="top: 50%; left: 10px; transform: translateY(-50%); z-index: 10;"><i class="fas fa-chevron-left"></i></button>
  <button class="slide-next btn btn-dark position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); z-index: 10;"><i class="fas fa-chevron-right"></i></button>
</div>

<style>
  #cards-slider {
    background: #fff;
    overflow: hidden;
    position: relative;
  }

  .slider-wrapper {
    display: flex;
    flex-wrap: nowrap;
    transition: transform 0.5s ease;
  }

  .card-slide {
    flex: 0 0 300px;
    margin: 0 10px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .card-slide img {
    display: block;
    width: 100%;
    height: auto;
  }

  .know-more-btn {
    border-radius: 0;
    margin: 0;
    display: block;
    width: 100%;
    font-weight: bold;
    font-size: 1rem;
  }

  .slide-prev, .slide-next {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    opacity: 0.7;
  }
  .slide-prev:hover, .slide-next:hover {
    opacity: 1;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function(){
    const $slider = $('#cards-slider .slider-wrapper');
    const $slides = $('.card-slide');
    const slideCount = $slides.length;
    const slideWidth = $slides.outerWidth(true);

    // Clone slides for infinite loop
    $slider.append($slides.clone());

    let currentIndex = 0;

    function moveNext(){
      currentIndex++;
      $slider.css('transform', 'translateX(' + (-slideWidth * currentIndex) + 'px)');
      if(currentIndex === slideCount){
        setTimeout(() => {
          $slider.css('transition', 'none');
          $slider.css('transform', 'translateX(0px)');
          currentIndex = 0;
          setTimeout(() => {
            $slider.css('transition', 'transform 0.5s ease');
          }, 20);
        }, 500);
      }
    }

    function movePrev(){
      if(currentIndex === 0){
        currentIndex = slideCount;
        $slider.css('transition', 'none');
        $slider.css('transform', 'translateX(' + (-slideWidth * currentIndex) + 'px)');
        setTimeout(() => {
          currentIndex--;
          $slider.css('transition', 'transform 0.5s ease');
          $slider.css('transform', 'translateX(' + (-slideWidth * currentIndex) + 'px)');
        }, 20);
      } else {
        currentIndex--;
        $slider.css('transform', 'translateX(' + (-slideWidth * currentIndex) + 'px)');
      }
    }

    // Manual controls
    $('.slide-next').click(function(){
      moveNext();
    });
    $('.slide-prev').click(function(){
      movePrev();
    });

    // Automatic scrolling
    setInterval(moveNext, 5000);
  });
</script>


<!-- ✅ END 4/3 SLIDE SECTION -->


<!-- ✅ ACCOUNTS SECTION -->
<section class="py-5 text-center bg-light" id="accounts">
  <div class="container">
    <h2 class="mb-5 font-weight-bold text-dark">Bank Accounts</h2>
    <div class="row justify-content-center">

      <!-- Savings Account -->
      <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm h-100 card-hover">
          <img src="dist/savings.jpg" alt="Savings Account" class="card-img-top img-fluid rounded-top" style="object-fit: cover; height: 220px;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Savings Account</h5>
            <p class="card-text text-muted">Flexible, easy access and earn interest on your savings.</p>
          </div>
        </div>
      </div>

      <!-- Current Account -->
      <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm h-100 card-hover">
          <img src="dist/current.jpg" alt="Current Account" class="card-img-top img-fluid rounded-top" style="object-fit: cover; height: 220px;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Current Account</h5>
            <p class="card-text text-muted">Unlimited transactions, ideal for professionals and businesses.</p>
          </div>
        </div>
      </div>

      <!-- Fixed Deposit -->
      <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm h-100 card-hover">
          <img src="dist/deposit.jpg" alt="Fixed Deposit" class="card-img-top img-fluid rounded-top" style="object-fit: cover; height: 220px;">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Fixed Deposit</h5>
            <p class="card-text text-muted">Maximize your returns with secure long-term deposits.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .card-hover:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease-in-out;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }
</style>


<!-- ✅ HERO SLIDER WITH IMAGES ONLY -->
<section id="home" class="position-relative">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="dist/slide1.jpg" class="d-block w-100 hero-img" alt="Slide 1">
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="dist/slide2.jpg" class="d-block w-100 hero-img" alt="Slide 2">
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="dist/slide3.jpg" class="d-block w-100 hero-img" alt="Slide 3">
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <img src="dist/slide4.jpg" class="d-block w-100 hero-img" alt="Slide 4">
      </div>

    </div>

    <!-- Carousel Controls -->
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
</section>

<style>
  #heroCarousel {
  width: 100%;
  overflow: hidden;
}

#heroCarousel .carousel-item {
  width: 100%;
  height: auto; /* Let it scale naturally on mobile */
}

#heroCarousel .hero-img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

/* Make the carousel more responsive for smaller devices */
@media (max-width: 768px) {
  #heroCarousel {
    max-height: 40vh;
  }
  #heroCarousel .carousel-item,
  #heroCarousel .hero-img {
    max-height: 40vh;
    height: auto;
  }
}

@media (max-width: 480px) {
  #heroCarousel {
    max-height: 30vh;
  }
  #heroCarousel .carousel-item,
  #heroCarousel .hero-img {
    max-height: 30vh;
    height: auto;
  }
}
</style>


<!-- ✅ LOAN OPTIONS SECTION -->
<section class="py-5 bg-light text-center" id="loans">
  <div class="container">
    <h2 class="mb-5 font-weight-bold">Loan Options</h2>
    <div class="row">

      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card h-100 shadow-sm border-0 card-hover p-4">
          <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
          <h5 class="font-weight-bold mb-2">Personal Loan</h5>
          <p class="text-muted">Quick funding for your personal needs.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card h-100 shadow-sm border-0 card-hover p-4">
          <i class="fas fa-home fa-3x text-success mb-3"></i>
          <h5 class="font-weight-bold mb-2">Home Loan</h5>
          <p class="text-muted">Build or buy your dream home with ease.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card h-100 shadow-sm border-0 card-hover p-4">
          <i class="fas fa-briefcase fa-3x text-info mb-3"></i>
          <h5 class="font-weight-bold mb-2">Business Loan</h5>
          <p class="text-muted">Grow your business with flexible EMIs.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card h-100 shadow-sm border-0 card-hover p-4">
          <i class="fas fa-graduation-cap fa-3x text-warning mb-3"></i>
          <h5 class="font-weight-bold mb-2">Education Loan</h5>
          <p class="text-muted">Invest in your future with study finance.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: all 0.3s ease-in-out;
  }
  .card i {
    transition: transform 0.3s ease-in-out;
  }
  .card-hover:hover i {
    transform: scale(1.2);
  }
</style>

<!-- ✅ OUR PARTNER LOGOS SECTION (FULL WIDTH) -->
<section class="py-5 bg-white w-100" id="partners" style="overflow: hidden;">
  <div class="container-fluid p-0">
    <h2 class="mb-5 font-weight-bold text-center text-dark">Our Trusted Partners</h2>

    <div class="partner-logos-wrapper w-100 overflow-hidden">
      <div class="partner-logos d-flex align-items-center w-100" style="gap: 60px; animation: scroll-logos 25s linear infinite;">
        <img src="dist/partner1.png" alt="Partner 1" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner2.png" alt="Partner 2" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner3.png" alt="Partner 3" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner4.png" alt="Partner 4" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner5.png" alt="Partner 5" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner1.png" alt="Partner 1" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner2.png" alt="Partner 2" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner3.png" alt="Partner 3" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner4.png" alt="Partner 4" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner5.png" alt="Partner 5" class="img-fluid grayscale-hover mx-3">

        <!-- duplicate for infinite loop effect -->
        <img src="dist/partner1.png" alt="Partner 1" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner2.png" alt="Partner 2" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner3.png" alt="Partner 3" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner4.png" alt="Partner 4" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner5.png" alt="Partner 5" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner1.png" alt="Partner 1" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner2.png" alt="Partner 2" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner3.png" alt="Partner 3" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner4.png" alt="Partner 4" class="img-fluid grayscale-hover mx-3">
        <img src="dist/partner5.png" alt="Partner 5" class="img-fluid grayscale-hover mx-3">
      </div>
    </div>
  </div>
</section>

<style>
.partner-logos {
  display: flex;
  align-items: center;
  width: 100%;
  gap: 60px;
  animation: scroll-logos 5s linear infinite; /* faster movement */
}

.partner-logos img {
  height: 100px;
  object-fit: contain;
  filter: grayscale(100%);
  transition: filter 0.5s ease;
}

.partner-logos img:hover {
  filter: grayscale(0%);
}

@keyframes scroll-logos {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* 📱 Mobile Responsive Styling */
@media (max-width: 768px) {
  .partner-logos {
    gap: 10px; /* tighter spacing on tablet */
    animation-duration: 8s; /* slightly faster on tablet */
  }
  .partner-logos img {
    height: 80px; /* smaller logos for tablets */
  }
}

@media (max-width: 480px) {
  .partner-logos {
    gap: 0px; /* smaller gap on small devices */
    animation-duration: 5s; /* even faster on phones */
  }
  .partner-logos img {
    height: 70px; /* smaller logos for phones */
  }
}
</style>



<!-- ✅ DIGITAL BANKING SERVICES SECTION -->
<section class="py-5 text-center bg-white" id="services">
  <div class="container">
    <h2 class="mb-5 font-weight-bold">Digital Banking Services</h2>
    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 card-hover p-4">
          <img src="dist/dbs1.jpg" class="img-fluid rounded mb-3" alt="Mobile Banking" style="aspect-ratio: 1/1; object-fit: cover;">
          <h6 class="font-weight-bold mb-2">Mobile Banking</h6>
          <p class="text-muted">Full access via our secure mobile app.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 card-hover p-4">
          <img src="dist/dbs2.jpg" class="img-fluid rounded mb-3" alt="Online Banking" style="aspect-ratio: 1/1; object-fit: cover;">
          <h6 class="font-weight-bold mb-2">Online Banking</h6>
          <p class="text-muted">Login anytime to check balances or pay bills.</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 card-hover p-4">
          <img src="dist/dbs3.jpg" class="img-fluid rounded mb-3" alt="Branch Support" style="aspect-ratio: 1/1; object-fit: cover;">
          <h6 class="font-weight-bold mb-2">Branch Support</h6>
          <p class="text-muted">Visit 200+ branches across Bangladesh.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: all 0.3s ease-in-out;
  }
  .card img {
    transition: transform 0.3s ease-in-out;
  }
  .card-hover:hover img {
    transform: scale(1.05);
  }
</style>

<!-- ✅ OUR STORY / HISTORY SECTION -->
<section class="py-5 bg-light" id="history">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text content -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="mb-4 font-weight-bold text-dark">Our Story</h2>
        <p class="lead text-secondary mb-3">
          Founded in 2012 in the heart of Dhaka, <strong>Sonar Bangla Bank Ltd.</strong> began with a mission to bring secure, inclusive, and digital-first banking solutions to every corner of Bangladesh.
        </p>
        <p class="text-muted mb-3">
          From village towns to growing cities, we’ve helped over 50,000 people access their money with confidence. Over the years, we introduced mobile banking, 24/7 customer support, and real-time transfers — becoming a trusted financial partner for individuals, students, and businesses nationwide.
        </p>
        <p class="text-muted mb-0">
          Today, we proudly serve thousands daily, empowering goals through technology, trust, and financial literacy. Our journey continues—toward a smarter, stronger, and more connected Bangladesh.
        </p>
      </div>

      <!-- Image content -->
      <div class="col-lg-6 text-center">
        <img src="dist/story.jpg" alt="Bank History" class="img-fluid rounded shadow" style="max-height: 400px; object-fit: cover;">
      </div>

    </div>
  </div>
</section>

<!-- ✅ CONTACT SECTION -->
<section class="py-5 bg-light" id="contact">
  <div class="container">
    <h2 class="mb-4 text-center font-weight-bold">Contact Us</h2>
    <div class="row">

      <!-- Contact Form -->
      <div class="col-md-6 mb-4">
        <form method="POST" action="#">
          <div class="form-group">
            <label for="name" class="font-weight-bold">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email" class="font-weight-bold">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="phone" class="font-weight-bold">Your Phone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
          </div>
          <div class="form-group">
            <label for="message" class="font-weight-bold">Your Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-success btn-block font-weight-bold">Send Message</button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <div class="p-4 bg-white rounded shadow-sm">
          <h5 class="font-weight-bold mb-3 text-success"><i class="fas fa-phone-alt mr-2"></i>Hotline</h5>
          <p class="mb-4 font-weight-bold text-dark">+880 184 110 4424</p>

          <h5 class="font-weight-bold mb-3 text-primary"><i class="fas fa-envelope mr-2"></i>Email</h5>
          <p class="mb-4 font-weight-bold text-dark">support@sonarbanglabank.com</p>

          <h5 class="font-weight-bold mb-3 text-danger"><i class="fas fa-map-marker-alt mr-2"></i>Address</h5>
          <p class="font-weight-bold text-dark mb-0">Motijheel, Dhaka, Bangladesh</p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  #contact label { font-size: 0.9rem; }
  #contact .form-control { border-radius: 6px; }
  #contact .btn { border-radius: 6px; }
</style>

<!-- ✅ FULL WIDTH MAP LOCATION -->
<section class="py-0">
  <div style="width: 100%; height: 400px;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.472542487054!2d90.40911967439092!3d23.730967489523824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b96ad177ac5b%3A0x7ea0275cf8228b81!2sNur%20jahan%20sharif%20plaza!5e1!3m2!1sen!2sbd!4v1748920628784!5m2!1sen!2sbd" 
      width="100%" 
      height="100%" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

<style>
  section.py-0 {
    margin: 0;
    padding: 0;
  }
  section.py-0 iframe {
    display: block;
    width: 100%;
    height: 400px; /* Adjust height as needed */
  }
</style>

<style>
  /* Make sure the map section has no padding/margin to fill the window width */
  section.py-0 {
    margin: 0;
    padding: 0;
  }
</style>


<!-- ✅ FOOTER -->
<footer class="footer">
  <div class="container">
    <p class="mb-1">&copy; <?php echo date("Y"); ?> Sonar Bangla Bank Ltd. All rights reserved.</p>
    <p><a href="admin/pages_index.php">Admin Login</a> | <a href="staff/pages_staff_index.php">Staff Login</a></p>
    <p class="text-muted small">🏢 Head Office: Motijheel, Dhaka</p>
  </div>
</footer>

<!-- ✅ SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
