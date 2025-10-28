<?php 
include './lib/textReader.php';
include './lib/CSVreader.php';
include './lib/JSONreader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Starluxe Innovations Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

    <!-- STRAT NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky sticky-white" role="navigation"
        id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <i class="mdi mdi-alien"></i>Starluxe Innovations Ltd.
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#contact" class="nav-link">Contact</a>
                    </li>

                </ul>
                <div class="nav-button ms-auto">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button"
                                class="btn btn-primary navbar-btn btn-rounded waves-effect waves-light">Try it
                                Free</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <h1 class="home-title">Mission Statement</h1>
                    <p class="pt-3 home-desc mx-auto">
                        <?php 
                            $overview = readText(__DIR__.'/data/pages/mission.txt');
                            echo $overview;
                         ?>
                    </p>
                    <p class="play-shadow mt-4" data-bs-toggle="modal" data-bs-target="#watchvideomodal"><a
                            href="javascript: void(0);" class="play-btn video-play-icon"><i
                                class="mdi mdi-play text-center"></i></a></p>

                    <!-- Modal -->
                    <div class="modal fade" id="watchvideomodal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body p-0" style="margin-bottom: -8px;">
                                    <video id="VisaChipCardVideo" class="video-box" controls  width="800" >
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" >
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->

    <!-- CLIENT LOGO -->
    <section class="section-sm bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT LOGO -->

    <!--START FEATURES-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <h3>A digital web design studio creating modern & engaging online</h3>
                        <p class="text-muted web-desc">Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <ul class="text-muted list-unstyled mt-4 features-item-list">
                            <li class="">We put a lot of effort in design.</li>
                            <li class="">The most important ingredient of successful website.</li>
                            <li class="">Submit Your Orgnization.</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-4 waves-effect waves-light">Learn More <i
                                class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="features-img mx-auto me-lg-0">
                        <img src="images/growth-analytics.svg" alt="macbook image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END FEATURES-->

    <!--START SERVICES-->
    <section class="section bg-light " id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Our Services</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center pt-4 font-secondary">We craft digital, graphic and
                        dimensional thinking, to create category leading brand experiences that have meaning and add a
                        value for our clients.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-diamond text-primary"></i>
                            <div class="ms-4">
                                <h4>Digital Design</h4>
                                <p class="pt-2 text-muted">Some quick example text to build on the card title and make
                                    up the bulk of the card's content. Moltin gives platform.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-display2 text-primary"></i>
                            <div class="ms-4">
                                <h4>Unlimited Colors</h4>
                                <p class="pt-2 text-muted">Credibly brand standards compliant users without extensible
                                    services. Anibh euismod tincidunt laoreet Ipsum passage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-piggy text-primary"></i>
                            <div class="ms-4">
                                <h4>Strategy Solutions</h4>
                                <p class="pt-2 text-muted">Separated they live in Bookmarksgrove right at the coast of
                                    the Semantics, and large language ocean neary regelia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-science text-primary"></i>
                            <div class="ms-4">
                                <h4>Awesome Support</h4>
                                <p class="pt-2 text-muted">It is a paradisematic country, in which roasted parts of
                                    sentences fly into your mouth leave for the far World.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-news-paper text-primary"></i>
                            <div class="ms-4">
                                <h4>Truly Multipurpose</h4>
                                <p class="pt-2 text-muted">Even the all-powerful Pointing has no control about the blind
                                    texts it is an almost unorthographic.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-plane text-primary"></i>
                            <div class="ms-4">
                                <h4>Easy to customize</h4>
                                <p class="pt-2 text-muted">Question Marks and devious Semikoli, but the Little Blind
                                    Text didn’t listen. She packed her seven versalia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-arc text-primary"></i>
                            <div class="ms-4">
                                <h4>Pixel Perfect Design</h4>
                                <p class="pt-2 text-muted">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-tools text-primary"></i>
                            <div class="ms-4">
                                <h4>Perfect Toolbox</h4>
                                <p class="pt-2 text-muted">Hampden-Sydney College in Virginia, looked up one of the more
                                    obscure Latin words, consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-timer text-primary"></i>
                            <div class="ms-4">
                                <h4>Awesome Design</h4>
                                <p class="pt-2 text-muted">All the Lorem Ipsum generators on the Internet tend to repeat
                                    predefined chunks as necessary.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--START SERVICES-->

    <!--START WEBSITE-DESCRIPTION-->
    <section class="section bg-web-desc">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white">Build your dream website today</h2>
                    <p class="pt-3 home-desc mx-auto">But nothing the copy said could convince her and so it didn’t take
                        long until a few insidious Copy Writers ambushed her.</p>
                    <a href="#" class="btn btn-light mt-5 waves-effect waves-light">View Plan & Pricing</a>
                </div>
            </div>
        </div>
    </section>
    <!--END WEBSITE-DESCRIPTION-->

    <!--START ABOUT-US-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-title mx-auto text-center">
                        <h2>About Us</h2>
                        <p class="text-muted pt-4">
                            <?php 
                                $overview = readText(__DIR__.'/data/pages/overview.txt');
                                echo $overview;
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center g-4">
                <?php
                $team_members = ['evelyn_hart', 'rajan_malhotra', 'lila_torres', 'samuel_ogundipe', 'nina_zhang'];
                foreach($team_members as $member) {
                    $info = readTeam($member);
                    echo '
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box text-center">
                            <div class="team-wrapper">
                                <div class="team-member">
                                    <img alt="" src='.$info["img"].' class="img-fluid rounded">
                                </div>
                            </div>
                            <h4 class="team-name">'.$info["name"].'</h4>
                            <p class="text-uppercase team-designation">'.$info["title"].'</p>
                            <p class="text-muted pt-2">'.$info["description"].'</p>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>
    <!--END ABOUT-US-->

    <!--START SERVICES-->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Key Products & Services</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle font-secondary text-muted text-center pt-4">Explore the technologies shaping tomorrow — from virtual reality to quantum computing.</p>
                </div>
            </div>

            <?php
            $keys = ['celestial', 'luminara', 'quant', 'nebula'];
            foreach ($keys as $key):
                $service = readService($key);
            ?>
            <div class="card mb-5 shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title text-uppercase"><?php echo $service['name']; ?></h4>
                    <p class="card-text"><?php echo $service['description']; ?></p>

                    <?php if (isset($service['apps'])): ?>
                        <h4 class="mt-4">Applications:</h5>
                        <ul class="list-unstyled ms-3">
                        <?php foreach ($service['apps'] as $appName => $appDesc): ?>
                            <li class="mb-2">
                            <strong><?php echo $appName; ?>:</strong> <?php echo $appDesc; ?>
                            </li>
                        <?php endforeach; ?>        
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!--END SERVICES-->

    <!--START TESTIMONIAL-->
    <section class="section" id="testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Awards</h1>
                    <div class="section-title-border mt-3"></div>
                    <!-- I like this text too much to just up and delete it but it's not needed for the page so
                        <p class="section-subtitle text-muted text-center font-secondary pt-4">The Big Oxmox advised her not
                        to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.
                    </p> -->
                </div>
            </div>
            <div class="row mt-5">
            <h5 class="text-uppercase mb-3">Year</h5>
                <span>
                    <?php echo readCSV("./data/awards.csv", 1); //Start at row one because who needs that header ?>
                </span>
            </div>
        </div>
    </section>
    <!--END TESTIMONIAL-->

    <!-- CONTACT FORM START-->
    <section class="section " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Get In Touch</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">We thrive when coming up with
                        innovative ideas but also understand that a smart concept should be supported with faucibus
                        sapien odio measurable
                        results.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4 pt-4">
                        <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span
                                class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span
                                class="text-muted d-block mt-2">2467 Swick Hill Street <br />New Orleans, LA
                                70171</span></p>
                        <p class="mt-4"><span class="h5">Working Hours:</span><br> <span
                                class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4 pt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->

    <!--START FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <a class="footer-logo text-uppercase" href="#">
                        <i class="mdi mdi-alien"></i>Hiric
                    </a>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Information</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Bookmarks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Support</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Disscusion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Subscribe</h4>
                    <div class="mt-4">
                        <p>In an ideal world this text wouldn’t exist, a client would acknowledge the importance of
                            having web copy before the design starts.</p>
                    </div>
                    <form class="form subscribe">
                        <input placeholder="Email" class="form-control text-white" required>
                        <a href="#" class="submit"><i class="pe-7s-paper-plane"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->

    <!--START FOOTER ALTER-->
    <div class="footer-alt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-sm-start pull-none">
                        <p class="copy-rights  mb-3 mb-sm-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hiric - Themesbrand
                        </p>
                    </div>
                    <div class="float-sm-end pull-none copyright">
                        <ul class="list-inline d-flex flex-wrap social m-0">
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-microsoft-xbox"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>
        </div>
    </div>
    <!--END FOOTER ALTER-->

    <!-- Style switcher -->
    <div id="style-switcher">
        <div>
            <h3 class="">Select your color</h3>
            <ul class="pattern">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('cyan')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('red')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('pink')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li>
                    <a class="color7" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li>
                    <a class="color8" href="javascript: void(0);" onclick="setColor('yellow')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                <i class="mdi mdi-weather-sunny bx-spin mode-light"></i>
                <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
            </a>
            <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i
                    class="mdi mdi-cog  mdi-spin"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>