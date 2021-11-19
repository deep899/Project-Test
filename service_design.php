<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitybrains - Consulting | IT Services | Digital Transformation</title>

    <?php include_once("includes/head.php"); ?>

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


</head>
<body>
    <!-- START HEADER PART-->
    <?php include_once("includes/header.php"); ?>
    <!-- END HEADER PART-->

    <section>
    <div class="container-fluid about service_php">
        <!--<div class="logo_service"><img src="images/uiuxlogo.png" width="200px" height="120px" alt=""></div>-->
        <h2 class="quotes">Designing service</h2>

        <nav aria-label="breadcrumb">
            <ol class="text-white breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Services</li>
              <li class="breadcrumb-item active" aria-current="page">Graphics & UI/UX </li>
            </ol>
          </nav>
    </div>
    </section>


    <!--service section-->
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
                        <h1>Web Design</h1>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#pills-team2" class="nav-link" id="pills-team2-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team2" aria-selected="false">
                        <!--<img src="images/badalsir.jpeg" class="img-fluid" alt="">-->
                        <h1>UI/Ux Design</h1>
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent1">
                <div class="tab-pane fade active show" id="pills-team1" role="tabpanel"
                    aria-labelledby="pills-team1-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-left"><img src="images/weblogo.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is Web Design</h4>
                            <p class="p-0 desp center">
                                Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. Web design used to be focused on designing websites for desktop browsers; however, since the last 10 years, design for mobile and tablet browsers has become increasingly important.
                        Web designers plan, create and code internet sites and web pages, many of which combine text with sounds, pictures, graphics and video clips.They are responsible for creating the design and layout of a website or web pages.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">our web design service</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Front End Web Development & Design.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Logo & Brochure Design.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Responsive website design.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Multiple layouts & designs to choose from.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Website revamp & redesigning. </p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Responsive & websites design for every kind of Industry. </p>
                        </div>
                    </div>
                    
                </div>

                <div class="tab-pane fade" id="pills-team2" role="tabpanel" aria-labelledby="pills-team2-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-left"><img src="images/uiuxlogo.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is UI/UX Design</h4>
                            <p class="p-0 desp">
                                The “UI” in UI design stands for “user interface.” The user interface is the graphical layout of an application. It consists of the buttons users click on, the text they read, the images, sliders, text entry fields, and all the rest of the items the user interacts with. “UX” stands for “user experience.” A user’s experience of the app is determined by how they interact with it.  User experience is determined by how easy or difficult it is to interact with the user interface elements that the UI designers have created.

                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Our Service for UI/UX Design</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Simple & Interactive Interface.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Consistent, smooth & known UI elements.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Both application & Website Design.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Proper content & meaningful typography.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Contrasting color, texture & theme.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Increase Branding.</p>
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