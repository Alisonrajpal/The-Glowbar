<!DOCTYPE html>
<html>
  <head>
    <title>skip ad</title>
    <link rel="stylesheet" href="cssfile.css" />
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
  <body style="height: 2000px">
 
    <div class="slider">
      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <h1>Men Skincare</h1>
          <p>Real Men<br>get their skin treated too</p>
           <button class="booking-button" href="booking.php">Book Now!</button>
        </div>
        <img src="images/men_skin.jpg" style="width: 100%; height: 100%" class="only"/>
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>Dermaplanning</h1>
          <p></p>
          <button class="booking-button" href="booking.php">Book Now!</button>
        </div>
        <img src="images/dermaplaning-1.jpg" style="width: 100%; height: 100%" class="only"/>
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>Microdermabrasion</h1>
          <p>Web Devoloper<br />Subscribe To My Channel For More Videos</p>
          <button class="booking-button" href="booking.php">Book Now!</button>
        </div>
        <img src="images/diamond-microdermabrasion-1-jpg.jpg" style="width: 100%; height: 100%" class="only"/>
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>Microneedling</h1>
          <p>Web Devoloper<br />Subscribe To My Channel For More Videos</p>
          <button class="booking-button" href="booking.php">Book Now!</button>
        </div>
        <img src="images/microneedling.jpg" style="width: 100%; height: 100%" class="only" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>Back Exiolation</h1>
          <p>Web Devoloper<br />Subscribe To My Channel For More Videos</p>
          <button class="booking-button" href="booking.php">Book Now!</button>
        </div>
        <img src="images/back_ex.jpg" style="width: 100%; height: 100%"class="only" />
      </div>

      <div class="myslide fade">
			<div class="txt">
				<h1>Chemical Peels</h1>
				<p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
              <button class="booking-button" href="booking.php">Book Now!</button>
			</div>
			<img class="slide-img" src="images/chemical_peel.jpg" style="width: 100%; height: 100%;" class="only">
		</div>
      <!-- /fade css -->

      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dotsbox" style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
         <span class="dot" onclick="currentSlide(6)"></span>
      </div>
      <!-- /onclick js -->
    </div>
    <div class="spacer"></div>
<div class="additional">
  <div class="">
    <img src="images/money.jpg" style="width:200px;">
    <h2>Value for Money</h2>
    <p>We value your skin
  </div>
  <div>
    <img src="images/pet.jpg" style="width:200px;">
    <h2>Organic products</h2>
    <p> that are pet friendly</p>
  </div>
  <div>
    <img src="images/parking.jpg" style="width:200px;">
    <h2>Secured Parking</h2>
    <p> that are pet friendly</p>
  </div>
</div>
    <script src="jsfile.js"></script>
  </body>
</html>
