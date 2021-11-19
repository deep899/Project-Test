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
        <h2 class="quotes">Content Writing</h2>

        <nav aria-label="breadcrumb">
            <ol class="text-white breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Services</li>
              <li class="breadcrumb-item active" aria-current="page">Content Writing</li>
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
                        <h1>Content Writing</h1>
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent1">
                <div class="tab-pane fade active show" id="pills-team1" role="tabpanel"
                    aria-labelledby="pills-team1-tab">
                    <div class="row d-flex">
                        <div class="pt-3 col-lg-6 tab-img" data-aos="flip-left"><img src="images/content1.png" class="img-fluid" alt=""></div>
                        <div class="mt-4 col-lg-6">
                            <h4 class="nav-head heading__2">Content Writing</h4>
                            <p class="p-0 desp center">
                                Content writing is another way of generating content. Communication is such a content generation process is done through texts. While video and audio formats have evolved and developed over recent years, content writing has been the medium of content generation ever since people started communicating.  It can include writing blog posts and articles, scripts for videos and podcasts, as well as content for specific platforms, such as tweetstorms on Twitter or text posts on Reddit.

                            </p>
                        </div>
                    </div>

                    <h2 class="heading__2">our Content Writing service</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Website Content & strategy.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Quality Graphical Images & Videos.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Studying the insights generated by the content and deciding how to do better.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Researched & planned  Content.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>Latest Trends & target Audience based Content.</p>
                            <p class="heading__desp"><i class="fas fa-caret-right service_arrow"></i>High quality responsive website.</p>
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