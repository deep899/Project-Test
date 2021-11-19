<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinitybrains - Consulting | IT Services | Digital Transformation</title>

    <style>
      form{
          width: 90%;
          /*background-color: aqua;*/
          text-align: center;
            padding: 2rem 2rem;
            margin: 2rem 2rem;
      }

      .form-control{
          margin: 0 1rem;
          font-weight: 700;
          outline: none;
          border: none;
          border: 1px solid gray;
          border-radius: 10px;
      }

      .form-control:hover{
          border: 1px solid black;
      }

      

      textarea.form-control{
        width: 760px;
      }

      .career_button{
        background-color: #0808ce;
     color: white;
     width: 40%;
     height: 15%;
     border-radius: 20px;
     padding: 0.5rem 1rem;
     text-align: center;
     font-size: 1.5rem;
     font-weight: 700;
     border: none;
     outline: none;
      }

      @media screen and (max-width : 768px){
        textarea.form-control{
          width: 100%;
        }

        .career_button{
          width: 60%;
        }

        .form-control{
          width: 100%;
          display: block;
          
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
        <h1 class="quotes">Get Quote</h1>
    
        <nav aria-label="breadcrumb">
          <ol class="text-white breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Get Quote</li>
          </ol>
        </nav>
      </div>
    </section>

    <div class="pt-2 container-fluid">
        <div class="container">
            <div class="heading__1main">
                <h1 class="heading__1">Request a quotes</h1>
            </div>
            <h3 class="heading__3">For your requirements fill the form. we will get back to you as quickly as possible.</h3>
            <div class="row bg-light">
                <form class="mt-5">
                    <div class="form-group d-flex">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Name"
                            aria-describedby="emailHelp">

                            <input type="password" class="form-control" placeholder="Your Email"
                            id="exampleInputPassword1">
                    </div>

                    <div class="form-group d-flex">
                        <input type="password" class="form-control" placeholder="Company"
                            id="exampleInputPassword1">
                        
                            <input type="password" class="form-control" placeholder="Phone Number"
                            id="exampleInputPassword1">
                    </div>

                    <div class="form-group d-flex">
                      <input type="password" class="form-control" placeholder="Watsapp Number"
                          id="exampleInputPassword1">
                      
                          
                <input type="file" class="ml-3 form-control-file" id="exampleFormControlFile1">
                          
                  </div>

                    <div class="form-group">
                        <textarea name="message" class="form-control w-100" id="" 
                            placeholder="Write Your Message"></textarea>
                    </div>
                    <button type="submit" class="career_button"  >Contact Me</button>
                </form>
            </div>
        </div>
    </div>
    <!--quote section end-->

    <?php include_once("includes/footer.php"); ?>
    <?php include_once("includes/script.php"); ?>
</body>
</html>