<?php
include 'server.php';


//enrolling subscriptions
$error=array();
if(count($_POST)>0){
    $name=$_POST['name'];
    $email=$_POST['email'];
    
    //run data validation 
    if(empty($name)){
        array_push($error,"your name is required");
    }
    if(empty($email)){
        array_push($error,"email is required");
    }

    //incase if no error 
    if(count($error)==0){
        //PREPARING QUEARY TO INSERT DATA 
        $query="INSERT INTO USERS (NAME,EMAIL)VALUES ('$name','$email')";
        $insert=mysqli_query($connect,$query);

        echo  '<script > <div class="alert alert-success alert-dismissable">submitted Successfully !. <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right; float:right; border: 0px; background-color: rgb(11, 161, 74);" > x  </button> </div> </script>';
        
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EMIRATES|Design</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="F" name="keywords">
    <meta content="F" name="description">

   
    <link  href="img/blog-1.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">EMIRATE</span> DESIGNORS</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="index.php" class="nav-item nav-link">About us </a>
                        <a href="#" class="nav-item nav-link">Service we offer </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">projects</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="projects.html" class="dropdown-item">completed </a>
                                <a href="projects.html" class="dropdown-item">ongoing</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Our Office</h5>
                            <p class="m-0">Nairobi,Tomboya street Odeon building Room44</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email Us</h5>
                            <p class="m-0">warioduba45@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Call Us</h5>
                            <p class="m-0">+25470425658</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">Make Your Home Better</h3>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                            <h3 class="display-3 text-white mb-md-4">Stay At Home In Peace</h3>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">3+</h4>
                        <h1 class="m-0">Years Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">We Are The Best Interior Designing Firm In Your City</h1>
                    <p>we have a diverse and techinical knowledge concerning designing as we have best and well experinced technician who have vast experince in designing </p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Project Planning</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Exterior & Interior</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Commercial Design</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Residential Design</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Home</h1>
                    <p>Enjoy our beautiful and wonderful design and well decorated materials in our company for your living room</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bedroom Design</h5>
                            <p class="m-0">Best of Best!!! Bedroom fanitures and owesome designs for your Bedroom.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Kitchen Design</h5>
                            <p class="m-0">Say <b class="font-weight-bolder">NO MORE!!!!</b> to embarasment of your Kitchen...reach us and be Proud.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bathroom Design</h5>
                            <p class="m-0">Denjoy our modern bathrooms drsign and structures from us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">3+ Years Experience In The Interior Design Industry</h1>
                    <p class="mb-4">we are the best as we have :-</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>3+ Years Experience</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
                    </ul>
                    
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    

    

    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 py-5 pr-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonial</h6>
                    
                    <h1 class="mb-4 section-title">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 20px; height: 20px;" alt="">
                                <div class="ml-3">
                                    <h5>hapa tutaweka name</h5>
                                    <i>here it will be Profession</i>
                                </div>
                            </div>
                            <p>messages sent we shall put here</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>hapa tutaweka name</h5>
                                    <i>here it will be Profession</i>
                                </div>
                            </div>
                            <p class="m-0">messages sent we shall put here</p>
                        </div>
                        <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/testimonial.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- advert Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="mb-4">See The Latest design we have done in different places in Kenya</h1>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="m-0 ml-3 text-truncate">Motani Motel</h5>
                            </div>
                            <p>located at Diani Mombasa</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-2.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="m-0 ml-3 text-truncate">Kybreed Naivasha</h5>
                            </div>
                            <p>located at Naivasha <b>-</b> Nakuru highway </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/blog-3.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="m-0 ml-3 text-truncate">Nyagami Motel</h5>
                            </div>
                            <p>located at Naorobi Packlands</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- advert ends here-->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Nairobi,Tomboya street Odeon building Room44</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+25470425658</p>
                <p><i class="fa fa-envelope mr-2"></i>warioduba45@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="projects.html"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">message Subscriptions</h4>
                <form action="index.php"Method="POST">
                    <div class="form-group">
                        <input type="text"  name="name"    class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control border-0" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit" name="subscribe">Submit Now</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Send us a Feedback</h4>
                
                    <div>
                        <a class="btn btn-lg btn-primary btn-block border-0" href="message.php">Send a message</a>
                    </div>
                    <br>
                    <div>
                        <a class="btn btn-lg btn-primary btn-block border-0" href="feedback.php">view message</a>
                    </div>
                
            </div>
            
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">EMIRATES</a>. All Rights Reserved. 
				
				Designed by <a class="text-white font-weight-bold" href="#">Wario Duba Taficha</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
   


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>