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
        <h2 class="quotes">Digital</h2>

        <nav aria-label="breadcrumb">
            <ol class="text-white breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">services</li>
              <li class="breadcrumb-item active" aria-current="page">Digital Marketing</li>
            </ol>
          </nav>
          
    </div>
    </section>

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
                        <h1>SEO</h1>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#pills-team2" class="nav-link" id="pills-team2-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team2" aria-selected="false">
                        <!--<img src="images/badalsir.jpeg" class="img-fluid" alt="">-->
                        <h1>Digital Marketing</h1>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#pills-team3" class="nav-link" id="pills-team3-tab" data-toggle="pill" role="tab"
                        aria-controls="pills-team3" aria-selected="false">
                        <!--<img src="images/badalsir.jpeg" class="img-fluid" alt="">-->
                        <h1>Digital Transformation</h1>
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent1">
                <div class="tab-pane fade active show" id="pills-team1" role="tabpanel"
                    aria-labelledby="pills-team1-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-left"><img src="images/seologo.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is SEO</h4>
                            <p class="p-0 desp center">
                                Search engine optimization (SEO) is the art and science of getting pages to rank higher
                                in search engines such as Google. Because search is one of the main ways in which people
                                discover content online, ranking higher in search engines can lead to an increase in
                                traffic to a website. Search engine optimization is a key part of online marketing
                                because search is one of the primary ways that users navigate the web. In 2014, over 2.5
                                trillion searches were conducted worldwide across search engines such as Google, Bing,
                                Yahoo, Baidu, and Yandex.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Why SEO helpful for you</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Brings your website
                                on the top of search engines.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Brings real,
                                organic traffic to your website, that is genuine & long term.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>SEO Gives your
                                business a long term effect, credibility & Top rankings.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Keeps you updated
                                on the web & google algorithms.</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-team2" role="tabpanel" aria-labelledby="pills-team2-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-left"><img src="images/marketinglogo.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is Digital Marketing</h4>
                            <p class="p-0 desp">
                                Any marketing that uses electronic devices to convey promotional messaging and measure
                                its impact. In practice, digital marketing typically refers to marketing campaigns that
                                appear on a computer, phone, tablet, or other device. It can take many forms, including
                                online video, display ads, and social media posts. A few examples of digital marketing
                                include social media, email, affiliate, pay-per-click (PPC), search engine optimization
                                (SEO), and more.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Our Service for Digital Marketing</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>E-Commerce Marketing.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Email Marketing & campaigns.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Social Media campaigns.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Affiliate marketing.</p>
                        </div>
                    </div>
                    <div class="text-center row">
                        <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Google Ads, call listings.
                            Facebook ads, local listings,.
                            </p>
                    </div>
                </div>


                <div class="tab-pane fade" id="pills-team3" role="tabpanel" aria-labelledby="pills-team3-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-down"><img src="images/transformation.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">What is Digital Transformation</h4>
                            <p class="p-0 desp">
                                Digital transformation is the process of using digital technologies to create new or modify existing business processes, culture, and customer experiences to meet changing business and market requirements. This reimagining of business in the digital age is digital transformation. Process Transformation. There are 4 main domains of digital transformation; Process transformation, Business Model Transformation, Domain Transformation & Cultural/Organisational Transformation.
                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">Our Service for Digital Transformation</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Change management & experience.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Strategic & analytical consulting. </p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Independent assessments that test management’s assertion over business processes and controls in the IT environment.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Social Media campaigns.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Culture, Talent & leadership.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Improving Customer experience by being client-centric, & running a business like a digital leader.
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