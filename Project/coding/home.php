<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include ('includes/header.html');
?>
  <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SASA CATERING</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .box {
      position: relative;
      width: 1517.5px;
      height: 500px;
      overflow: hidden;
      background-color: white;
      border: 1px solid black;
    }

    .slider-frame {
      display: flex;
      width: 100%; 
      height: 500%;
      transition: transform 0.5s ease-in-out;
    }

    .img-container {
      flex: 1;
      height: 100%;
      overflow: hidden;
    }

    img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    h1 {
     text-align: left;
     text-transform: uppercase;
     margin-left: 80px;
     color: #5025A2;
     font-family: "Noto Sans";
     font-size: 52px;
    }

    p {
     font-family: "Noto Sans";
     text-align: left;
     margin-left: 80px;
     
     letter-spacing: 3px;
    }

    .dot-container {
      position: absolute;
      bottom: 10px;
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .dot {
      height: 10px;
      width: 10px;
      background-color: #000;
      border-radius: 50%;
      margin: 0 5px;
      cursor: pointer;
    }

    .dot.active {
      background-color: #fff; 
    }

    .background {
      margin-top: 90px;
    }

    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* The dots/bullets/indicators */
    .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    animation-name: fade;
    animation-duration: 1.5s;
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
    }


  </style>
</head>
<body>
<div class="background">
<div class="box">
  <div class="slider-frame">
    <div class="img-container">
      <img src="a1.png" alt="Image 1">
    </div>
    <div class="img-container">
      <img src="a2.png" alt="Image 2">
    </div>
    <div class="img-container">
      <img src="a6.png" alt="Image 3">
    </div>
  </div>
  
</div>

<div>
  <h1><b>SASA CATERING</b></h1>
</div>

<div>
  <p>Significant to its name, SASA is located on the 38th floor boasting a 360-degree city view to complement the elegance of its dining areas, bar and lounge, along with lively show kitchens which serve exquisite cuisines like Western, Chinese, and Japanese. The captivating panoramic view, the dramatic sense of décor and the splendour of its cuisine are what makes SASA the signature restaurant of the hotel. Whether to entertain business associates or celebrate special occasions with family and friends, SASA is the place to be.</p>
</div>

<div>
  <h1>GALLERY</h1>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="g1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="g2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="g3.png" style="width:100%">
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<?php 
include ('includes/footer.html');
?>
</body>
</html>
