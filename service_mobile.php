<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitybrains - Consulting | IT Services | Digital Transformation</title>

    <style>
        

        .logo_service img {
            width: 200px;
            padding: auto auto;
        }

        .service_arrow {
            font-weight: 900;
            color: blue;
            margin: 0 1rem;
            font-size: 1.2rem;
        }

        .logo_service_section img {
            width: 200px;
            height: 200px;
            /*padding: 80px 0;*/
            margin: 5rem 0;
        }

        /*nav tab pills*/

        .nav_tabs {
            position: relative;
            background: rgb(245, 239, 239);

        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
        }

        .nav-link h1 {
            width: auto;
            border-radius: 50%;
            color: black;
            
            font-size: 20px;
            font-weight: 600;
            /*background-color: rgb(161, 158, 158);*/
        }

        .nav-pills .nav-link.active {
            background-color: rgb(44, 44, 252);
            color: white;
            text-align: center;
            
        }

        .img-fluid {
            max-width: 100%;
            height: 150px;
        }

        img {
            vertical-align: middle;
        }

        .tab-content>.active {
            /*background-color: white;*/
            padding: 40px;
            box-shadow: 0 25px 98px 0 rgb(0 0 0 / 3%);
        }

        /*.nav-head {
            font-size: 50px;
            font-weight: 600;
        }*/

        .nav-small-head {
            font-size: 25px;
            font-weight: 600;
            display: block;
        }

        p .desp {
            color: var(--heading6);
            font-size: 18px;
        }

        .tab-img img {
            height: 280px;
            width: 280px;
            border-radius: 50%;
        }

        @media screen and (max-width : 768px) {
            .contact img {
                width: 100%;
                text-align: center;
            }

            .nav{
                padding: 0 2rem;
            }
        }
    </style>

    <?php include_once("includes/head.php"); ?>
</head>
<body>
    <!-- START HEADER PART-->
    <?php include_once("includes/header.php"); ?>
    <!-- END HEADER PART-->

    <section>
    <div class="container-fluid about">
        <!--<div class="logo_service"><img src="images/webheader.jpg" alt=""></div>-->
        <h2 class="quotes">Mobile Development</h2>

        <nav aria-label="breadcrumb">
            <ol class="text-white breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">services</li>
              <li class="breadcrumb-item active" aria-current="page">Mobile Development</li>
            </ol>
          </nav>
    </div>
</section>


<!--main part   -->
<section>
    <div class="container-fluid nav_tab" id="team" style="background-color: rgb(245, 239, 239);">
        <div class="container py-2 py-lg-5">
            <!--<h3 class="heading__3">Get in Touch</h3>
            <div class="heading__1main">
                <h1 class="heading__1" data-aos="fade-down">Our team Says</h1>
            </div>-->

            <ul class="nav nav-pills" id="pills-tab1" role="tablist">
                <li class="nav-item">
                    <a href="#pills-team1" class="nav-link active" id="pills-team1-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team1" aria-selected="true">
                        <!--<img src="images/paragsir.png" class="img-fluid" alt="">-->
                        <h1>IOS Development</h1>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#pills-team2" class="nav-link" id="pills-team2-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team2" aria-selected="false">
                        <!--<img src="images/badalsir.jpeg" class="img-fluid" alt="">-->
                        <h1>Android Development</h1>
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent1">
                <div class="tab-pane fade active show" id="pills-team1" role="tabpanel"
                    aria-labelledby="pills-team1-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-left"><img src="images/ioslogo.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is IOS</h4>
                            <p class="p-0 desp center">
                                IOS is a mobile operating system for Apple-manufactured devices. iOS runs on the iPhone, iPad, iPod Touch and Apple TV. It is best known for serving as the underlying software that allows iPhone users to interact with their phones using gestures such as swiping, tapping and pinching. Developers can use the iOS software development kit (SDK) to create applications for Apple mobile devices. The SDK includes tools and interfaces for developing, installing, running and testing apps. Native apps can be written using the iOS system frameworks and the Objective-C programming language.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">our IOS Development service</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Custom IOS App Development.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>IOS App Upgradation.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Entire development cycle, from strategy to implementation to support.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>IOS Swift UI/UX Design.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Apple UI Design Resources for seamless UI elements</p> 
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>We are proficient at delivering solutions for various industries.</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-team2" role="tabpanel" aria-labelledby="pills-team2-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-left"><img src="images/androidlogo.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is Android Development</h4>
                            <p class="p-0 desp">
                                Android software development is the process by which applications are created for devices running the Android operating system. It is a mobile multitasking operating system used in smartphones, tablets, readers, consoles, TVs, and even domestic robots. The OS was developed by Android Inc. based on Linux and was later purchased and popularised by Google. The most basic building block of Android development is the programming language; like Java, kotlin, python, etc. To be a successful Android developer, one will need to be comfortable with concepts like loops, lists, variables, and control structures.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Our Service for Android Development</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Apps Made for all kinds of Industries & infrastructures.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Latest version of Android Studio & Kotlin language for app development.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Product Flavours for different variants of the same app</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Android Architecture Components for robust, scalable and maintainable apps.</p>
                        </div>
                    </div>
                    <div class="text-center row">
                        <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>RXJava for reactive functional programming.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <?php include_once("includes/footer.php"); ?>
    <?php include_once("includes/script.php"); ?>
</body>
</html>