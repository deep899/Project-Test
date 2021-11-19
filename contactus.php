<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/logo1.ico"/>
    <title>Infinitybrains - Consulting | IT Services | Digital Transformation</title>
	
    
    <style>
    .flowchart img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .say_hi {
      padding: 1rem 2rem;
      font-family: 'Raleway',sans-serif;
    }

    .main_contact p {
      font-size: 1rem;
      padding: 0 2rem;
      font-family: 'Raleway',sans-serif;
    }

    .main_contact strong {
      margin: 0 1rem;
      font-size: 1.4rem;
      font-family: 'Raleway',sans-serif;
    }

    .main_contact i {
      font-size: 1.7rem;
    }

    .main_contact_part {
      background-image: linear-gradient(to left top, #102087, #07d4e8);
      /*background-image: linear-gradient(#102087, #07d4e8);*/
    }

    .form{
      width: 600px;
    }

    .career_btn {
      width: 30%;
      height: 25%;
      padding: 5px 0;
      margin: 1rem 2rem;
      background-color: white;
      color: blue;
      font-weight: 600;
      border-radius: 20px;
      align-items: cener;
      outline: none;
      border: none;
      float: right;
    }   
  </style>
    <?php include_once("includes/head.php"); ?>
</head>
<body>
    <!-- START HEADER PART-->
    <?php include_once("includes/header.php"); ?>
    <!-- END HEADER PART-->

    <!--contact us section start-->
  <section>
    <div class="pt-5 container-fluid main_contact_part">
        <div class="pt-5 row">
            <div class="pt-5 text-white col-lg-5 say_hi">
                <div class="main_contact">
                <i class="fas fa-map-marker-alt"></i>
                <strong>Address</strong>
                <address><p>408, Luxuria Business Hub, Nr VR Mall, vesu, Surat</p></address>
                </div>

                <div class="main_contact">
                <i class="fas fa-phone-alt"></i>
                <strong>Contact</strong>
                <address><a href="tel:+91 942-673-4485" style="text-decoration: none; color: white;"><p> +91 942-673-4485</p></a></address>
                </div>

                <div class="main_contact">
                <i class="fas fa-envelope-open-text"></i>
                <strong>Email</strong>
                <address><a href="mailto:contact@infinitybrains.com" style="text-decoration: none; color: white;"><p>contact@infinitybrains.com</p> </a></address>
                </div>

            </div>

            <div class="col-lg-7">
        <form class="mt-5 form">
          <div class="form-group">
            <input type="text" class="form-control required" name="full_name" id="full_name" placeholder="Full Name" maxlength="50">
          </div>
          <div class="form-group">
            <input type="number" class="form-control required" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="10">
          </div>
		  <div class="form-group">
            <input type="email" class="form-control required" name="email" id="email" placeholder="Email Address" maxlength="50">
          </div>
          <div class="form-group">
            <textarea name="content" class="form-control" id="content" maxlength="500" rows="5" placeholder="Write Your Message"></textarea>
          </div>
          <button type="submit" id="btnSubmit" class="career_btn" name="submit-form">Contact Me</button>
        </form>
      </div>
        </div>
    </div>
</section>

<section>
  <div class="container-fluid">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.266724541432!2d72.76875281533326!3d21.141781089285256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0531d228780f7%3A0x9ff457f426b3269f!2sInfinitybrains!5e0!3m2!1sen!2sin!4v1627635020095!5m2!1sen!2sin"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>




<?php include_once("includes/footer.php"); ?>
<?php include_once("includes/script.php"); ?>
</body>
</html>