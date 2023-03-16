<?php
include 'server.php';


//enrolling subscriptions
$error=array();
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $profession=$_POST['profession'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    //run data validation 
    if(empty($name)){
        array_push($error,"your name is required");
    }
    if(empty($email)){
        array_push($error,"email is required");
    }
    if(empty($profession)){
        array_push($error,"email is required");
    }
    //incase if no error 
    if(count($error)==0){
        //PREPARING QUEARY TO INSERT DATA 
        $query="INSERT INTO messages (NAME,profession,EMAIL,message)VALUES ('$name','$profession','$email','$message')";
        $insert=mysqli_query($connect,$query);

        echo  '<script > <div class="alert alert-success alert-dismissable"> Feedback submitted Successfully !. <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right; float:right; border: 0px; background-color: rgb(11, 161, 74);" > x  </button> </div> </script>';
        
    }

}

//enrolling subscriptions

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

        echo  '<script > <div class="alert alert-success alert-dismissable">Enrolled  Successfully !. <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right; float:right; border: 0px; background-color: rgb(11, 161, 74);" > x  </button> </div> </script>';
        
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
    <meta content="s" name="description">

   
    <link href="img/blog-1.jpg" rel="icon">

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
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
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

<!-- Team Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                    <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
                    <h1 class="mb-0 text-center">Meet Our Team Members</h1>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Wario Taficha </h5>
                            <p class="m-0">Director</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Rahma</h5>
                            <p class="m-0">manager </p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">John Karanja</h5>
                            <p class="m-0">Designor </p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Anna Atieno</h5>
                            <p class="m-0">Designor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->













    
     
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
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="projects.html"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">message Subscriptions</h4>
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" name="name" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" name="email" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Send us a Feedback</h4>
                
                    <div>
                        <a class="btn btn-lg btn-primary btn-block border-0" href="message.php">Send a message</a>
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