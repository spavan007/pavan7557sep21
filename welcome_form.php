<?php
//session_start();

//if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    //header("location: ref_log.php");
  //  exit;
//}

?>


<style>


#video-container  {
	position: relative;
	width: 100%;
	height: 80%;
	overflow: hidden;
	z-index: 1;
  }
  

 
#video-container video,
.video-overlay {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  min-width: 100%;
  min-height: 100%;
  
}
 
#video-container .video-overlay {
	z-index: 9999;
	background: rgba(0,0,0,0.5);
	width: 100%;
  }
  
  #video-container .video-content {
	z-index: 99999;
	position: absolute;
	height: 100%;
	width: 100%;
  }
  
  #video-container .video-content .inner {
	height: 100%;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-flow: column wrap;
  }
  
  #video-container .video-content .inner h1 {
	font-size: 64px;
	text-transform: uppercase;
	color: #fff;
	letter-spacing: 2px;
	font-weight: 500;
	text-align: center;
  }
  
  #video-container .video-content .inner em {
	font-style: normal;
	font-weight: 200;
  }
  
  
  #video-container .video-content .inner p {
	color: #fff;
	font-size: 22px;
	font-weight: 200;
	letter-spacing: 1.5px;
	text-align: center;
	padding: 0px 30px;
  }
  
  #video-container .video-content .inner a {
	color: #fff;
	text-decoration: underline;
  }
  
  #video-container .video-content .inner .scroll-icon {
	margin-top: 45px;
  }
  

</style>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Welcome - <?php $_SESSION['username']?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/welcome_form.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

   <!-- ***** Preloader Start ***** -->
   <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>RAITHA SNEHI</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Guidelines</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Our Services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Page Content -->
    <div class="page-heading1 header-text">

      <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome to <em>RAITHA SNEHI</em></h1>
              <p>welcome</p>
              <p>Homepage with full-width image gallery</p>
                 
            </div>
        </div>
        
        <video autoplay="" loop="" muted="">
        	<source src="assets/vedio/Agriculture.mp4" type="video/mp4">
        </video>
    </div>


     
    </div>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
  


    <!-- user details -->
 <!--  
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
      <p>Hey how are you doing? Welcome to iSecure. You are logged in as <?php echo $_SESSION['username']?>. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">trail to see page redirect<a href="/raitha/redirect.php">click me</a></p>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/raitha/logout.php"> using this link.</a></p>
    </div>
  </div>-->

     <!-- Page Content  set1-->
<div class="services">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="section-heading">
<h2>OUR<em> SERVICES</em></h2>
<span>A good connection between farmers and buyers without dealing with local traders and middleman.</span>
</div>
</div>
<div class="col-md-4">
<div class="service-item">
<img src="assets/images/service_01.jpg" alt="">
<div class="down-content">
<h4>BUYER</h4>
<p>Find the best quality of agriculture products and seller details.No need to deal  with third parties or middleman.</p>
<a href="table.php" class="filled-button">Read More</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="service-item">
<img src="assets/images/service_02.jpg" alt="">
<div class="down-content">
<h4>SELLER</h4>
<p>Help the best buyers to buy your best produce,just by uploading some information. </p>
<a href="details.php" class="filled-button">Read More</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="service-item">
<img src="assets/images/service_03.jpg" alt="">
<div class="down-content">
<h4>Farming Tools</h4>
<p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
<a href="" class="filled-button">Read More</a>
</div>
</div>
</div>
</div>

</div>
</div>


    <!-- Page Content  set2-->

    <div class="services">
<div class="container">
<div class="row">
<div class="col-md-12">

</div>
<div class="col-md-4">
<div class="service-item">
<img src="assets/images/service_04.jpg" alt="">
<div class="down-content">
<h4>Agriculture</h4>
<p>Agriculture is the primary occupation of most of Karnataka's rural people.The state’s rich and diverse agriculture contributes 28.6% to the Gross State Domestic Product (GSDP).</p>
<a href="services_agriculture.php" class="filled-button">Read More</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="service-item">
<img src="assets/images/service_05.jpg" alt="">
<div class="down-content">
<h4>Animal Husbandary</h4>
<p>The Animal Husbandry and Livestock Sector plays an important role for the rural economy of Karnataka.It plays a vital role and provides additional source of income to the farmers of the country.</p>
<a href="" class="filled-button">Read More</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="service-item">
<img src="assets/images/service_06.jpg" alt="">
<div class="down-content">
<h4>Sericulture</h4>
<p>Sericulture is an agro-based, labour intensive, export oriented commercial activity.Sericulture which was considered as a subsidiary occupation in the past is being considered as major activity.</p>
<a href="services_sericulture.php" class="filled-button">Read More</a>
</div>
</div>
</div>
</div>

</div>
</div>


    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Fair Price</h4>
                  <span>"If agriculture goes wrong, nothing else will have a chance to go right in the country."</span>
                  <p>you can find the best price on agriculture produce.</p>
                </div>
                <img src="assets/images/icons8-money-bag-100.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Best Quality</h4>
                  <span>"If the farmer is rich, then so is the nation." 
                    </span>
                  <p>Get the desired  agriculture produce with best quality much faster and safely.</p>
                </div>
                <img src="assets/images/icons8-good-quality-64.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>No Middleman</h4>
                  <span>"If the farmer is rich, then so is the nation."</span>
                  <p>No need of dealing with middleman.Get the direct link of seller or end-consumer.</p>
                </div>
                <img src="assets/images/icons8-tractor-64.png" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Guidance</h4>
                  <span>"Life on a farm is a school of patience; you can't hurry the crops or make an ox in two days."</span>
                  <p>We ensure guidance and support for development of agriculture.</p>
                </div>
                <img src="assets/images/icons8-tuition-80.png" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

 


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-item">
            <h4>Raitha Snehi</h4>
            <p>Follow us on socials to get to know more.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="http://rural.nic.in">Ministry of Rural Development</a></li>
              <li><a href="https://raitamitra.karnataka.gov.in">Department of agriculture(KSDA)</a></li>
              <li><a href="http://agricoop.nic.in/agriculturecontingency/karnataka">Department of Agriculture Cooperation</a></li>
              <li><a href="http://www.krishikannada.com/">Krishi Kannada</a></li>
              <li><a href="http://e-krishiuasb.karnataka.gov.in/">Karnataka Agri Portal</a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">How We Work</a></li>
              <li><a href="#">Quick Support</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2020 Financial Business Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>




  </body>
</html>