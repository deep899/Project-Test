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
        <h2 class="quotes">Hybrid Developent</h2>

        <nav aria-label="breadcrumb">
            <ol class="text-white breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">services</li>
              <li class="breadcrumb-item active" aria-current="page">Hybrid Development</li>
            </ol>
          </nav>
    </div>
    </section>

    <section>
    <div class="container-fluid nav_tab" id="team" style="background-color: rgb(245, 239, 239);">
        <div class="container py-2 py-lg-5">
            <!--<div class="heading__1main">
                <h1 class="heading__1" data-aos="fade-down">Our team Says</h1>
            </div>-->

            <ul class="nav nav-pills" id="pills-tab1" role="tablist">
                <li class="nav-item">
                    <a href="#pills-team1" class="nav-link active" id="pills-team1-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team1" aria-selected="true">
                        <!--<img src="images/paragsir.png" class="img-fluid" alt="">-->
                        <h1>React Native</h1>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#pills-team2" class="nav-link" id="pills-team2-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team2" aria-selected="false">
                        <!--<img src="images/badalsir.jpeg" class="img-fluid" alt="">-->
                        <h1>Angular JS</h1>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#pills-team3" class="nav-link" id="pills-team3-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team3" aria-selected="false">
                        <!--<img src="images/badalsir.jpeg" class="img-fluid" alt="">-->
                        <h1>Flutter</h1>
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent1">
                <div class="tab-pane fade active show" id="pills-team1" role="tabpanel"
                    aria-labelledby="pills-team1-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-down"><img src="images/reactnative.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is React Native</h4>
                            <p class="p-0 desp center">
                                React is a free and open-source front-end JavaScript library for building user
                                interfaces or UI components. It is maintained by Facebook and a community of individual
                                developers and companies. It's used for handling the view layer for web and mobile apps.
                                React also allows us to create reusable UI components. It is best known for its virtual
                                DOM feature. With React, we recommend Express as a backend service. Being simple to read
                                and easy to use made React easy to understand and implement, allowing businesses to hit
                                the ground running and build what they need as quickly as possible.

                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Our Service for React Native</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>ReactJS custom
                                development.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>React Native mobile
                                app development
                                and plugin development
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Interactive UX/UI &
                                Migration.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Very popular
                                client-side open source libraries.</p>
                        </div>
                    </div>
                    <div class="row">
                        <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Handle the view layer for web and mobile app development.</p>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-team2" role="tabpanel" aria-labelledby="pills-team2-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-down"><img src="images/angular.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is Angular JS</h4>
                            <p class="p-0 desp">
                                AngularJS is a client side JavaScript MVC framework to develop a dynamic web
                                application. It changes static HTML to dynamic HTML & extends the ability of HTML by
                                adding built-in attributes and components and also provides an ability to create custom
                                attributes using simple JavaScript. It is basically what HTML would have been, had it
                                been designed for applications. It is written in TypeScript. It implements core and
                                optional functionality as a set of TypeScript libraries that you import into your
                                applications.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Our Service for Angular JS</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Angular JS
                                Customization.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Highly accessible
                                apps with a functional, responsive and highly compatible user-interface.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Web Application &
                                UI/UX development.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Get highly
                                intuitive and smart ANGULARJS apps.</p>
                        </div>
                    </div>
                    <div class="text-center row">
                        <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>To ensure that your
                            Angular JS apps are perfect, our experts at Nevina also provide QA and testing services.
                        </p>
                    </div>
                </div>


                <div class="tab-pane fade" id="pills-team3" role="tabpanel" aria-labelledby="pills-team3-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-down"><img src="images/flutterlogo.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is Flutter</h4>
                            <p class="p-0 desp">
                                This toolkit is a cross-platform technology from Google, that allows creating
                                application programs for mobile, desktop, and web use. It utilizes the Dart programming
                                language, which in turn is based on the notorious Java. The technology keeps up with the
                                latest developments and is used by developers around the world. Most importantly, it is
                                open-source and completely free. It gives Natively compiled applications for mobile
                                (Android, iOS), desktop (Linux, Mac, Windows, Google Fuchsia) and the web from a single
                                codebase.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Our Service for Flutter</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Cross Platform App
                                Development.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Flutter IOS App
                                development.</p>
                                <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Flutter Android app &
                                    Chat Application development.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Flutter security &
                                maintenance.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Migration &
                                upgradation.</p>
                                <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>UI/UX Strategy
                                    development.
                                </p>
                        </div>
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