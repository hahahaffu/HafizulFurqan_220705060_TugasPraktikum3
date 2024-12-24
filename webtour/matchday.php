<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EL HALCON</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="dashboard.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">El Halcon</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">elhalcon@efootball.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+012 345 6789</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="dashboard.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">El Halcon</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="dashboard.html" class="nav-item nav-link">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="matchday.php" class="nav-item nav-link active">Matchday</a>
                            <a href="winners.html" class="nav-item nav-link">Winners</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tournament</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cup.php" class="dropdown-item">Cup</a>
                                    <a href="league.php" class="dropdown-item">League</a>
                                    <a href="participant.php" class="dropdown-item">Participant</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="register.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Register</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Matchday -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">League</h5>
            <h1 class="display-3 text-uppercase mb-0">Matchday</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Monday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Tuesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Wednesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-4">Thursday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-5">Friday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-6">Saturday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-7">Sunday</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-5">
                        <!-- Match 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 AM - 8:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team A</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team B</h5>
                            </div>
                        </div>
                        
                        <!-- Match 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 AM - 10:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team C</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team D</h5>
                            </div>
                        </div>
                        
                        <!-- Match 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10:00 AM - 12:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team E</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team F</h5>
                            </div>
                        </div>
                        
                        <!-- Match 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12:00 PM - 2:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team G</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team H</h5>
                            </div>
                        </div>
                        
                        <!-- Match 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2:00 PM - 4:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team I</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team J</h5>
                            </div>
                        </div>
                        
                        <!-- Match 6 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4:00 PM - 6:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team K</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team L</h5>
                            </div>
                        </div>
                        
                        <!-- Match 7 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 PM - 8:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team M</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team N</h5>
                            </div>
                        </div>
                        
                        <!-- Match 8 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 PM - 10:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team O</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team P</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <!-- Match 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 AM - 8:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team A</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team B</h5>
                            </div>
                        </div>
                        
                        <!-- Match 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 AM - 10:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team C</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team D</h5>
                            </div>
                        </div>
                        
                        <!-- Match 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10:00 AM - 12:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team E</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team F</h5>
                            </div>
                        </div>
                        
                        <!-- Match 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12:00 PM - 2:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team G</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team H</h5>
                            </div>
                        </div>
                        
                        <!-- Match 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2:00 PM - 4:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team I</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team J</h5>
                            </div>
                        </div>
                        
                        <!-- Match 6 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4:00 PM - 6:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team K</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team L</h5>
                            </div>
                        </div>
                        
                        <!-- Match 7 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 PM - 8:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team M</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team N</h5>
                            </div>
                        </div>
                        
                        <!-- Match 8 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 PM - 10:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team O</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team P</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <!-- Match 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 AM - 8:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team A</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team B</h5>
                            </div>
                        </div>
                        
                        <!-- Match 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 AM - 10:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team C</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team D</h5>
                            </div>
                        </div>
                        
                        <!-- Match 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10:00 AM - 12:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team E</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team F</h5>
                            </div>
                        </div>
                        
                        <!-- Match 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12:00 PM - 2:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team G</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team H</h5>
                            </div>
                        </div>
                        
                        <!-- Match 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2:00 PM - 4:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team I</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team J</h5>
                            </div>
                        </div>
                        
                        <!-- Match 6 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4:00 PM - 6:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team K</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team L</h5>
                            </div>
                        </div>
                        
                        <!-- Match 7 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 PM - 8:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team M</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team N</h5>
                            </div>
                        </div>
                        
                        <!-- Match 8 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 PM - 10:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team O</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team P</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <!-- Match 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 AM - 8:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team A</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team B</h5>
                            </div>
                        </div>
                        
                        <!-- Match 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 AM - 10:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team C</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team D</h5>
                            </div>
                        </div>
                        
                        <!-- Match 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10:00 AM - 12:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team E</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team F</h5>
                            </div>
                        </div>
                        
                        <!-- Match 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12:00 PM - 2:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team G</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team H</h5>
                            </div>
                        </div>
                        
                        <!-- Match 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2:00 PM - 4:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team I</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team J</h5>
                            </div>
                        </div>
                        
                        <!-- Match 6 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4:00 PM - 6:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team K</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team L</h5>
                            </div>
                        </div>
                        
                        <!-- Match 7 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 PM - 8:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team M</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team N</h5>
                            </div>
                        </div>
                        
                        <!-- Match 8 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 PM - 10:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team O</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team P</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <!-- Match 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 AM - 8:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team A</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team B</h5>
                            </div>
                        </div>
                        
                        <!-- Match 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 AM - 10:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team C</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team D</h5>
                            </div>
                        </div>
                        
                        <!-- Match 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10:00 AM - 12:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team E</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team F</h5>
                            </div>
                        </div>
                        
                        <!-- Match 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12:00 PM - 2:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team G</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team H</h5>
                            </div>
                        </div>
                        
                        <!-- Match 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2:00 PM - 4:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team I</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team J</h5>
                            </div>
                        </div>
                        
                        <!-- Match 6 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4:00 PM - 6:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team K</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team L</h5>
                            </div>
                        </div>
                        
                        <!-- Match 7 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 PM - 8:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team M</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team N</h5>
                            </div>
                        </div>
                        
                        <!-- Match 8 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 PM - 10:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team O</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team P</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-6" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <!-- Match 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 AM - 8:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team A</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team B</h5>
                            </div>
                        </div>
                        
                        <!-- Match 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 AM - 10:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team C</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team D</h5>
                            </div>
                        </div>
                        
                        <!-- Match 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10:00 AM - 12:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team E</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team F</h5>
                            </div>
                        </div>
                        
                        <!-- Match 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12:00 PM - 2:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team G</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team H</h5>
                            </div>
                        </div>
                        
                        <!-- Match 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2:00 PM - 4:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team I</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team J</h5>
                            </div>
                        </div>
                        
                        <!-- Match 6 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4:00 PM - 6:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team K</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team L</h5>
                            </div>
                        </div>
                        
                        <!-- Match 7 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 PM - 8:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team M</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team N</h5>
                            </div>
                        </div>
                        
                        <!-- Match 8 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 PM - 10:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team O</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team P</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-7" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <!-- Match 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 AM - 8:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team A</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team B</h5>
                            </div>
                        </div>
                        
                        <!-- Match 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 AM - 10:00 AM</h6>
                                <h5 class="text-uppercase text-primary">Team C</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team D</h5>
                            </div>
                        </div>
                        
                        <!-- Match 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10:00 AM - 12:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team E</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team F</h5>
                            </div>
                        </div>
                        
                        <!-- Match 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12:00 PM - 2:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team G</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team H</h5>
                            </div>
                        </div>
                        
                        <!-- Match 5 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2:00 PM - 4:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team I</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team J</h5>
                            </div>
                        </div>
                        
                        <!-- Match 6 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4:00 PM - 6:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team K</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team L</h5>
                            </div>
                        </div>
                        
                        <!-- Match 7 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6:00 PM - 8:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team M</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team N</h5>
                            </div>
                        </div>
                        
                        <!-- Match 8 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8:00 PM - 10:00 PM</h6>
                                <h5 class="text-uppercase text-primary">Team O</h5>
                                <p class="text-uppercase text-secondary mb-1">VS</p>
                                <h5 class="text-uppercase text-primary">Team P</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Matchday -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">elhalcon@efootball.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Matchday</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Winners</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tournament</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Matchday</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Winners</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tournament</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                    <p class="text-light">Stay updated with the latest news, events, and tournament information from EL HALCÓN. Don't miss out on any action!</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">EL HALCON</a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>