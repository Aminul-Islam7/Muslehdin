<?php
/*
From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/
$msg="";
if(isset($_POST['submit']))
{
    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */

	$from_add = "info@muslehdin.com"; 

	$to_add = "contact@muslehdin.com"; //<-- put your yahoo/gmail email address here

	$subject = $_POST["subject"];
	$body = "From: ". $_POST["name"] ." <". $_POST["email"] .">\r\n\r\n". $_POST["message"];
	$useremail = $_POST["email"];


	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $useremail \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	
	if(mail($to_add,$subject,$body,$headers)) 
	{
		$msg = "Message sent! We will get back to you soon.";
	} 
	else 
	{
 	   $msg = "An error occured! Your message was not sent.";
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="refresh" content="0;url=Under-Construction"> -->
  <title>Muslehdin Marine Electronics | Supply, Installment, Repair Services</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="icon" href="assets/img/muslehdin-icon.png">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="76">
  <!--
  -- ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? HEADER SECTION STARTS ???????????????
  -->
  <header id="header">

    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="https://www.muslehdin.com/">
            <img src="assets/img/Logo-Transparent.png" alt="logo">
            <!-- <h1 class="logo-part"><span style="display: none;">Muslehdin</span><span class="marine">Marine</span><span 
                class="electronics">Electronics</span></h1> -->
          </a>
          <a class="navbar-brand brand-name" href="https://www.muslehdin.com/">
            <h1 class="name">
              MUSLEHDIN MARINE ELECTRONICS
            </h1>
            <h1 class="name sm">
              MUSLEHDIN MARINE <br> <span class="electronics">ELECTRONICS</span>
            </h1>
          </a>
          <div class="search-icon"><i class="far fa-search"></i></div>
          <div class="mobile-search">
            <div class="close-search">
              <i class="fas fa-times"></i>
            </div>
            <form id="search-form" class="search sf2" action="https://muslehdin.com/?post_type=product" method="post">
              <input type="text" name="s" id="searchbar" class="searchbar2">
              <p class="placeholder"></p>
              <button type="submit"><i class="far fa-search"></i></button>
            </form>
          </div>
          <form id="search-form" class="search sf1" action="https://muslehdin.com/?post_type=product" method="post">
            <input type="text" name="s" id="searchbar" class="searchbar1">
            <p class="placeholder"></p>
            <button type="submit"><i class="far fa-search"></i></button>
          </form>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fal fa-bars bar"></i>
            <i class="fal fa-times close"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#banner">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link products-btn" href="https://muslehdin.com/products" target="_blank">Products</a>
              </li>
          </div>
        </div>
      </nav>
    </section>

    <section id="banner">
      <div class="background">
        <!-- <div class="background-img" id="backimg3" style="background-image: url('assets/img/banner/background3.jpg');">
        </div>
        <div class="background-img" id="backimg2" style="background-image: url('assets/img/banner/background2.jpg');">
        </div> -->
        <div class="background-img" id="backimg" style="background-image: url('assets/img/banner/background4.jpg');">
        </div>
        <!-- <video class="background-img" src="/assets/img/banner/background.mp4" autoplay="true"></video> -->
      </div>

      <div class="background-overlay">
        <!-- <div class="container"> -->
        <img class="icon" src="assets/img/muslehdin-icon-shadow.png" alt="Muslehdin Icon">

        <h1 class="brand-name">
          <div class="since"><i class="fal fa-horizontal-rule"></i> Since 1988 <i class="fal fa-horizontal-rule"></i>
          </div>
          MUSLEHDIN MARINE ELECTRONICS
        </h1>
        <p class="description">
          A leading service provider of marine Communication, Navigation, & Safety equipment in Bangladesh and
          Worldwide Supplier of
          reconditioned ship Spare Parts
        </p>
        <div class="actions">
          <a class="products-btn" href="https://muslehdin.com/products/">Products</a>
          <a class="call-btn" href="tel: +880 1819-321306"><i class="far fa-phone-alt"></i> Call Now</a>
        </div>
        <a class="down-btn" href="#about"><i class="far fa-chevron-down"></i></a>
        <!-- </div> -->
      </div>

      <svg class="banner-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="7" fill="#f2fdff">
        </g>
      </svg>
      <!-- </div> -->
    </section>
  </header>

  <i class="fas fa-arrow-alt-circle-up gototop"></i>

  <main>
    <!--
    -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ABOUT SECTION STARTS ???????????????
    -->

    <section id="about">
      <div class="container">
        <div class="section-title">
          <h2>About Us</h2>
          <img src="assets/img/circuit.svg" alt="circuit icon - title decoration">
        </div>
        <div class="content">
          <article class="about-text">
            MUSLEHDIN MARINE ELECTRONICS was founded in 1988 by the late Md. Musleh Uddin Bhuiyan [Former Senior
            Engineer at Marconi
            International Marine Company Ltd. and Former Radio Technician at Bangladesh Air Force.]
            <br>
            He is the first in Bangladesh to acquire equal skills in both marine and aviation technology for
            communication &
            navigation equipments through the highest training. Also, he is the pioneer and first successful
            entrepreneur in this
            field of technology & business in Bangladesh.
            <br>
            <img class="mobile-about-img" src="assets/img/about-img.gif" alt="">
            <br>
            Muslehdin Marine Electronics become the largest supplier & service provider of marine electronics equipment
            in
            Chattogram within a very short time.
            Best quality service at a competitive price, sharp management, skilled technician, and above all, their
            valuable policy
            support helped them to reach this position.
            <br>
            In recent years, the technical and management team has been further trained to meet future demands, and the
            new
            generation has been expanded through recruitment.

            <div class="about-items">
              <div class="item">
                <div class="icon-holder">
                  <div class="icon">
                    <i class="fas fa-tools"></i>
                  </div>
                </div>
                <div class="details">
                  <div class="title">Top-rated Services</div>
                  <div class="description">Installation, Repair, Servicing, Programming, Annual Testing & Survey of
                    Marine Communication, Navigation, and Safety Equipment.</div>
                </div>
              </div>
              <div class="item">
                <div class="icon-holder">
                  <div class="icon">
                    <i class="fas fa-truck"></i>
                  </div>
                </div>
                <div class="details">
                  <div class="title">Worldwide Supply</div>
                  <div class="description">Local and Worldwide Supply of reconditioned ship Spare Parts and Equipment.
                  </div>
                </div>
              </div>
              <!-- <div class="item">
                <div class="icon-holder">
                  <div class="icon">
                    <i class="far fa-tools"></i>
                  </div>
                </div>
                <div class="details">
                  <div class="title">Electronics</div>
                  <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis adipisci
                    nihil aspernatur architecto sunt.</div>
                </div>
              </div> -->
            </div>
            <!-- <a href="#" class="about-more">Learn More <i class="far fa-long-arrow-right"></i></a> -->
          </article>
          <figure class="about-img">
            <div class="img-holder"></div>
          </figure>
        </div>
      </div>

    </section>

    <!--
    -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? COUNTER SECTION STARTS ???????????????
    -->

    <section id="counter">
      <div class="overlay">
        <div class="container">

          <div class="row">
            <div class="col-lg-4 col-sm-4 col-6">
              <div class="count-box">
                <div class="icon-holder">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="count">
                  <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="2"
                    class="purecounter"></span>
                </div>
                <h3 class="title">Skilled Engineers</h3>
              </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-6">
              <div class="count-box">
                <div class="icon-holder">
                  <i class="fas fa-clock"></i>
                </div>
                <div class="count">
                  <span data-purecounter-start="00" data-purecounter-end="34" data-purecounter-duration="2"
                    class="purecounter"></span><span>+</span>
                </div>
                <h3 class="title">Years of Experience</h3>
              </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-12">
              <div class="count-box">
                <div class="icon-holder">
                  <i class="fas fa-smile"></i>
                </div>
                <div class="count">
                  <span data-purecounter-start="00" data-purecounter-end="50" data-purecounter-duration="2"
                    class="purecounter"></span><span>+</span>
                </div>
                <h3 class="title">Happy Clients</h3>
              </div>
            </div>

            <!-- <div class="col-lg-3 col-6">
              <div class="count-box">
                <div class="icon-holder">
                  <i class="fas fa-award"></i>
                </div>
                <div class="count">
                  <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                    class="purecounter"></span>
                </div>
                <h3 class="title">Awards</h3>
              </div>
            </div> -->
          </div>
        </div>

      </div>
    </section>

    <!-- communication, navigation, safety equipment,
      supply, installation, repair, servicing, annual testing & survey,  programming -->

    <!--
    -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? SERVICES SECTION STARTS ???????????????
    -->

    <section id="services">
      <div id="particle"></div>
      <div class="container">
        <div class="section-title">
          <h2>Our Services</h2>
          <img src="assets/img/circuit.svg" alt="circuit icon - title decoration">
        </div>
        <!-- <article class="services-text">
          * All of our services are related to marine navigation, communication, and safety equipment.
        </article> -->

        <div class="row">
          <div class="col-lg-4 col-md-6 col-6">
            <div class="service">
              <div class="img-holder supply"></div>
              <h3 class="title sm">Worldwide Supply</h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="service">
              <div class="img-holder installation"></div>
              <h3 class="title">Installation</h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="service">
              <div class="img-holder repair"></div>
              <h3 class="title">Repair</h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="service">
              <div class="img-holder servicing"></div>
              <h3 class="title">Servicing</h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="service">
              <div class="img-holder survey"></div>
              <h3 class="title sm">Annual Testing & Survey</h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-6">
            <div class="service">
              <div class="img-holder programming"></div>
              <h3 class="title">Programming</h3>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--
    -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? TESTIMONIAL SECTION STARTS ???????????????
    -->

    <!-- <section id="testimonial">
      <div class="overlay">
        <div class="review-slider">
          <div class="review">
            <div class="img-bg">
              <div class="img-holder">
                <img src="assets/img/testimonial/testi-img1.jpg" alt="Photo of Adrian Walton">
              </div>
            </div>
            <h3 class="name">Adrian Walton</h3>
            <p class="profession">Captain</p>
            <p class="review-text">
              <i class="fad fa-quote-left left"></i>
              Lorem ipsum, dolor sit amet consectetur
              adipisicing
              elit. Voluptatibus dignissimos
              animi natus, sapiente omnis doloribus dolorum! Recusandae, voluptate id. Sequi accusamus magnam
              provident
              maiores non.
              <i class="fad fa-quote-right right"></i>
            </p>
          </div>
          <div class="review">
            <div class="img-bg">
              <div class="img-holder">
                <img src="assets/img/testimonial/testi-img2.jpg" alt="Photo of Nicole Gordon">
              </div>
            </div>
            <h3 class="name">Nicole Gordon</h3>
            <p class="profession">Chief Officer</p>
            <p class="review-text"><i class="fad fa-quote-left left"></i>Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Vitae, odio facilis. Ipsum
              et error minus ipsa, earum animi ex nobis rerum commodi, eius modi magni.<i
                class="fad fa-quote-right right"></i></p>
          </div>
          <div class="review">
            <div class="img-bg">
              <div class="img-holder">
                <img src="assets/img/testimonial/testi-img3.jpg" alt="Photo of Craig Sharp">
              </div>
            </div>
            <h3 class="name">Craig Sharp</h3>
            <p class="profession">Chief Engineer</p>
            <p class="review-text"><i class="fad fa-quote-left left"></i>Lorem, ipsum dolor sit amet consectetur
              adipisicing elit. Facere dignissimos ea
              culpa
              sed? Iusto voluptas incidunt obcaecati minima quidem magnam aut veritatis laboriosam assumenda libero!<i
                class="fad fa-quote-right right"></i>
            </p>
          </div>
          <div class="review">
            <div class="img-bg">
              <div class="img-holder">
                <img src="assets/img/testimonial/testi-img4.jpg" alt="Photo of Stacy Patterson">
              </div>
            </div>
            <h3 class="name">Stacy Patterson</h3>
            <p class="profession">First Assistant Engineer</p>
            <p class="review-text">
              <i class="fad fa-quote-left left"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla
              assumenda voluptas,
              voluptate deserunt quibusdam ad dicta nostrum maiores accusantium aliquid ab quaerat, veritatis iure
              corrupti.<i class="fad fa-quote-right right"></i>
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!--
    -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? PARTNERS SECTION STARTS ???????????????
    -->

    <!-- <section id="partners">
      <div class="overlay">
        <div class="container">
          <div class="section-title">
            <h2>Our Partners</h2>
            <img src="assets/img/circuit-white.svg" alt="circuit icon - title decoration">
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="partner">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!--
        -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? TEAM SECTION STARTS ???????????????
        -->
    <section id="team">
      <div id="particles"></div>
      <div class="container">
        <div class="section-title">
          <h2>Our Leadership Team</h2>
          <img src="assets/img/circuit.svg" alt="circuit icon - title decoration">
        </div>

        <div class="team-slider">
          <div class="member">
            <div class="img-holder">
              <img class="member-img" src="assets/img/team/Musleh_Uddin.png" alt="">
              <img class="wave" src="assets/img/team/wave.svg" alt="Wave Design">
            </div>
            <div class="details">
              <h3 class="name">Md. Musleh Uddin Bhuiyan</h3>
              <p class="post">Chairman Emeritus</p>
              <div class="social-icons">
                <a href="#"><i class="fas fa-horizontal-rule"></i></a>
              </div>
            </div>
          </div>
          <div class="member">
            <div class="img-holder">
              <img class="member-img" src="assets/img/team/Amir.png" alt="Mohammed Amir's photo">
              <img class="wave" src="assets/img/team/wave.svg" alt="Wave Design">
            </div>
            <div class="details">
              <h3 class="name">Mohammed Amir</h3>
              <p class="post amir">Managing Partnar & Engineer</p>
              <div class="social-icons">
                <a href="tel:+880 1819-321306"><i class="fas fa-phone-alt"></i></a>
                <a href="https://www.facebook.com/amir.rumi.5" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-facebook"></i></a>
                <!-- <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>
          <div class="member">
            <div class="img-holder">
              <img class="member-img" src="assets/img/team/Humayun.png" alt="Md. Humayun Kabir Bhuiyan's photo">
              <img class="wave" src="assets/img/team/wave.svg" alt="Wave Design">
            </div>
            <div class="details">
              <h3 class="name sm">Md. Humayun Kabir Bhuiyan</h3>
              <p class="post">Managing Partnar & Engineer</p>
              <div class="social-icons">
                <a href="tel:+880 1974???312342"><i class="fas fa-phone-alt"></i></a>
                <a href="https://www.facebook.com/humayun.kabir.182940" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/md-humayun-kabir-bhuiyan-728728b7/?originalSubdomain=bd"
                  target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="member">
            <div class="img-holder">
              <img class="member-img" src="assets/img/team/Lenah.png" alt="">
              <img class="wave" src="assets/img/team/wave.svg" alt="Wave Design">
            </div>
            <div class="details">
              <h3 class="name">Lenah Mehzabin</h3>
              <p class="post">Business Executive</p>
              <div class="social-icons">
                <a href="tel:+880 1810-137555"><i class="fas fa-phone-alt"></i></a>
                <a href="https://www.facebook.com/prieta.mehzabin/" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/lenah-mehzabin-01365319a/" target="_blank"
                  rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="member">
            <div class="img-holder">
              <img class="member-img" src="assets/img/team/Aminul.png" alt="">
              <img class="wave" src="assets/img/team/wave.svg" alt="Wave Design">
            </div>
            <div class="details">
              <h3 class="name">Aminul Islam</h3>
              <p class="post">IT Executive & Software Developer</p>
              <div class="social-icons">
                <a href="tel:+880 1634555545"><i class="fas fa-phone-alt"></i></a>
                <a href="https://www.facebook.com/AminulFardin7/" target="_blank" rel="noopener noreferrer"><i
                    class="fab fa-facebook"></i></a>
                <!-- <a href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!--
    -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? BRANDS SECTION STARTS ???????????????
    -->
    <!-- <section id="brands">
      <div class="overlay">
        <div class="container">
          <div class="brand-slider">
            <div class="brand">
              <img src="assets/img/brands/ami.png" alt="AMI Marine Logo">
            </div>
            <div class="brand">
              <img src="assets/img/brands/highlander.png" alt="Highlander Logo">
            </div>
            <div class="brand">
              <img src="assets/img/brands/jrc.png" alt="JRC Logo">
            </div>
            <div class="brand">
              <img src="assets/img/brands/furuno.png" alt="furuno Logo">
            </div>
            <div class="brand">
              <img src="assets/img/brands/disney.png" alt="Disney Logo">
            </div>
            <div class="brand">
              <img src="assets/img/brands/tesla.png" alt="Tesla Logo">
            </div>
            <div class="brand">
              <img src="assets/img/brands/sailor.png" alt="Sailor Cobham Logo">
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!--
    -- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????? CONTACT SECTION STARTS ???????????????
    -->
    <section id="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact Us</h2>
          <img src="assets/img/circuit.svg" alt="circuit icon - title decoration">
        </div>

        <div class="row items">

          <div class="col-lg-5">
            <div class="item">
              <div class="info office">
                <div class="icon-holder">
                  <i class="far fa-map-marker-alt"></i>
                </div>
                <div class="details">
                  <div class="title">Office:</div>
                  <div class="description">
                    <p> Mohiuddin Market (Back Side of CDA Market), Pahartali, Chattogram.</p>
                    <p><span style="color: red;">Temporarily Closed: </span>522, Sheikh Mujib Road, Agrabad C/A,
                      Chattogram-4100, Bangladesh. </p>
                  </div>
                </div>
              </div>
              <div class="info">
                <div class="icon-holder">
                  <i class="far fa-envelope"></i>
                </div>
                <div class="details">
                  <div class="title">Email:</div>
                  <div class="description">
                    <a href="mailto:info@muslehdin.com">contact@muslehdin.com</a>,
                    <a href="mailto:musleh_ctg@yahoo.com">musleh_ctg@yahoo.com</a>
                  </div>
                </div>
              </div>
              <div class="info">
                <div class="icon-holder">
                  <i class="far fa-mobile"></i>
                </div>
                <div class="details">
                  <div class="title">Phone:</div>
                  <div class="description">
                    <a href="tel: +880 1819-321306">+880&nbsp;1819&#8209;321306, </a>
                    <a href="tel: +880 1974-312342">+880&nbsp;1974&#8209;312342</a>
                  </div>
                </div>
              </div>
              <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d461.23289254118123!2d91.78735058622453!3d22.358795943957396!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1650016473803!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-7">
            <form onsubmit="show_alert();" class="item contact-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" placeholder="John Doe" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="john.doe@gmail.com" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" rows="12" placeholder="Hello there!" required=></textarea>
              </div>
              
              <button class="submit-btn" name='submit' type="submit">Send Message</button>
              
              <script>
                function show_alert() {
                  alert("<?php echo $msg ?>");
                }
              </script>

            </form>
          </div>

        </div>

      </div>
    </section>
  </main>

  <footer>
    <section id="top">
      <img class="wave" src="assets/img/footer-wave.svg" alt="Wave Image">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="logo item">
              <img src="assets/img/Logo-Transparent.png" alt="Muslehdin Logo">
            </div>
            <div class="details">
              <p>
                Mohiuddin Market
                <br> (Back Side of CDA Market),
                <br> Pahartali, Chattogram.
                <br>
                <br>
                <strong>Phone:</strong>
                <a href="tel:+880 1819-321306">+88&nbsp;01819&#8209;321306</a>
                <br>
                <strong>Email:</strong>
                <a href="mailto:contact@muslehdin.com">contact@muslehdin.com</a>
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="links item">
              <h3>Useful Links</h3>
              <ul>
                <li><i class="fas fa-chevron-right"></i><a href="#">Home</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#about">About us</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#services">Services</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#footer">Terms of services</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#footer">Privacy policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="links item">
              <h3>Our Services</h3>
              <ul>
                <li><i class="fas fa-chevron-right"></i><a href="#services">Supply</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#services">Installation</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#services">Repair & Servicing</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#services">Annual Testing & Survey</a></li>
                <li><i class="fas fa-chevron-right"></i><a href="#services">Programming</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="social-links item">
              <h3>Our Social Networks</h3>
              <a href="https://facebook.com/MuslehdinMarine"><i class="fab fa-facebook-f"></i></a>
              <a href="#footer"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://wa.me/8801974312342"><i class="fab fa-whatsapp"></i></a>
              <!-- <a href="#footer"><i class="fab fa-twitter"></i></a> -->
              <!-- <a href="#footer"><i class="fab fa-instagram"></i></a> -->
              <!-- <a href="#footer"><i class="fab fa-youtube"></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="bottom">
      <div class="container">
        <div class="copyright">
          Copyright 2022 &copy; <a href="https://www.muslehdin.com/">Muslehdin Marine Electronics</a>.
        </div>
        <div class="credits">
          Designed & Developed with <i class="fas fa-heart"></i> by <a href="#footer">Aminul Islam</a>
        </div>
      </div>
    </section>

  </footer>

  <!-- <div class="space"></div>
  </div> -->

  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/typed.min.js"></script>
  <script src="assets/js/particles.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/purecounter_vanilla.js"></script>
  <script src="assets/js/lottie-player.js"></script>
  <script src="assets/js/lottie-interactivity.min.js"></script>
  <script src="assets/js/fireworks.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>