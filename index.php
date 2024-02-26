<!DOCTYPE html>
<html lang="en">
<head>
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script
      src="https://kit.fontawesome.com/1a0537457b.js"
      crossorigin="anonymous"></script>
      <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="beach.css">
    <title>Aaestic beauty website</title>
    <style>
         .glow {
        text-align: center;
        font-size: 48pt;
        text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500,
          0 0 40px #ffa500, 0 0 60px #ffa500, 0 0 10px #ffa500, 0 0 98px #ffa500;
        color: #fff6a9;
        font-family: "Sacramento", cursive;
        margin-top: 20px;
        margin-bottom: -60px;
        animation: blink 4s infinite;
        -webkit-animation: blink 3s infinite;
        transition: smooth;
        transition: 0.2em ease-in-out;
      }
      @keyframes blink {
        20%,
        24%,
        55% {
          color: rgb(17, 232, 17);
          text-shadow: none;
        }
        0%,
        19%,
        21%,
        23%,
        25%,
        54%,
        56%,
        100% {
          text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500,
            0 0 40px #ffa500, 0 0 60px #ffa500, 0 0 10px #ffa500,
            0 0 98px #ffa500;
          color: #fff6a9;
        }
      }
      @-webkit-keyframes blink {
        20%,
        24%,
        55% {
          color: #191919;
          text-shadow: none;
        }
        0%,
        19%,
        21%,
        23%,
        25%,
        54%,
        56%,
        100% {
          text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500,
            0 0 40px #ffa500, 0 0 60px #ffa500, 0 0 10px #ffa500,
            0 0 98px #ffa500;
          color: #fff6a9;
        }
      }
    </style>
</head>
<body>
<header>
      <div class="container">
        <div class="socials">
          <a href="#" class="fa fa-facebook"><i class="fas fa-facebook"></i></a>
          <a href="#" class="fa fa-twitter"><i class="fas fa-twitter"></i></a>
          <a href="" class="fa fa-youtube"><i class="fas fa-youtube"></i></a>
          <a href="" class="fa fa-instagram"><i class="fas fa-instagram"></i></a>
          <a href="" class="fa fa-pinterest"><i class="fas fa-pinterest"></i></a>
        </div>
        <div class="contact">
          <p><span class="icons">+27 761239118</span></p>
        </div>
        <div class="con">
         <a href="tel:0761239118"> <button><i class="fa fa-phone" style="border:none;"></i></button></a>
        </div>
      </div>
      <nav>
        <img src="images/logo.jpg" class="logo" />
        <ul class="nav-ul">
          <li class="nav-li"><a href="#home">Home</a></li>
          <li class="nav-li"><a href="#services">Services</a></li>
          <li class="nav-li"><a href="#about">About</a></li>
          <li class="nav-li"><a href="#contact">Contact</a></li>
        </ul>
        <div class="empty"></div>
          <div class="clear"></div>
      </nav>
     
    </header>
    
 
<div class="spacer"></div>
  <section id="home">
   <div class="clear"></div>
    <div class="spacer">
      
    </div>
    <?php include 'slideshow.php'?>
   

</div>
</section>
<section id="services"> <?php include 'services.php'?> </section>
<section id="about"><?php include 'about.php'?></section>
<section id="contact"><?php include 'contact.php'?></section>
<footer>
    <p>All rights resevered by The Glowbar</p>
</footer>
</body>
</html>