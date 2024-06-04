
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include ('includes/header.html');
    ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Menu</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(255, 2588 itd z   x      zzzz, 240);
            background-size: cover; /* Ensure the background image covers the entire container */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            margin-top: 100px;
        }
        fieldset {
            border: 5px solid #5025A2;
            border-radius: 10px;
            margin: 50px;
            padding: 50px;
            display: inline-block; /* Added to avoid full-width */
        }

        legend {
            font-weight: bold;
            padding: 0 10px;
        }
        
        .slider-container {
            border: 10px solid rgb(192, 77, 104);
    border-radius: 10px;
            width: 410px;
            overflow: hidden;
            height: 420px;
            margin: 0 auto; /* Center the container */
            margin-top: 40px; /* Add space between content and ad slider */
        position: relative;
        justify-content: space-around;
        display: flex;
        flex-wrap: wrap;
        padding: auto;
        box-sizing: border-box;
        }

        .slider {
            display: flex;
            width: 100%; /* 100% for each slide */
            
            height: 100%;
        position: absolute;
        }

        .slide {
            width: 800px;
            box-sizing: border-box;
        }
        .slide img {
            width: 100%; /* Make the images fill the container */
            height: auto;
            transition: opacity 0.5s ease-in-out, transform 1s linear infinite;
            border-radius: 8px;
            opacity: 0;
            margin: auto; 
            animation: rotateImage 4s linear infinite;
         }

     .slide img.active {
     opacity: 10;
     transform: scale(1.05);
     
 }

 
 /* caption box */
        .content-container {
            width: 400px;
            margin: 0 auto; /* Center the container */
            padding: 20px;
            box-sizing: border-box;
            background-color: #f4f4f4;
            text-align: center;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            margin-top: 20px;
        }

        .menu-box {
            width: 200%;
            margin: 60px;
            height: 130px;
            padding: 80px;
            border: 1px solid rgb(249, 242, 116);
            border-width: 8px;
            box-shadow: 0 0 10px rgba(190, 86, 86, 0.1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .menu-box img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    object-fit: contain;
}

.menu-box img.active {
    opacity: 10;
}

        .menu-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .menu-description {
            font-size: 14px;
            color: #555;
        }  

       /* ads slider part */
       .ads-slider-container {
        width: 100%;
    overflow: hidden;
    height: 400px;
    max-width: 1000px; /* Set your desired max width */
    margin: 30px auto; /* Center the container */
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color:   rgba(193, 97, 97, 0.1); /* Add your desired background color here */
    position: relative;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    box-sizing: border-box;
}

.ads-slider {
    display: flex;
    width: 1000%; /* Adjust based on the number of slides */            
            height: 100%;
        position: absolute;
        transition: transform 0.5s ease-in-out; 

}

.ads-slide {
    width: 1000%;  
      box-sizing: border-box;
}

.ads-slider img {
    width: 100%;
    height: 100%;
       border-radius: 8px;
    object-fit: contain; /* Ensure the image covers the container */
    position: absolute;
  top: 0;
  left: 0;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}  
.ads-slider img.active {
    opacity: 10;
}
      @keyframes rotateImage {
            0% {
        opacity: 0;
        left: 450px;
    }
    15%, 84% {
        opacity: 1;
        left: 0;
    }
    100% {
        opacity: 0;
        left: -450px;
    }
}

@keyframes adsSlideAnimation {
    0%, 100% {
        transform: translateX(0);
    }
    10%, 30%, 50%, 70%, 90% {
        transform: translateX(-10%);
    }
    20%, 40%, 60%, 80% {
        transform: translateX(-20%);
    }
}

    </style>


<script>
  document.addEventListener("DOMContentLoaded", function () {
            const sliderContainers = document.querySelectorAll('.slider-container');

            sliderContainers.forEach(container => {
                const slider = container.querySelector('.slider');
                const images = slider.querySelectorAll('img');
                let currentIndex = 0;

                function showNextImage() {
                    currentIndex = (currentIndex + 1) % images.length;
                    updateSlider();
                }

                function showPreviousImage() {
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                    updateSlider();
                }

                function updateSlider() {
                    const translationValue = -currentIndex * 100 + '%';
                    slider.style.transform = `translateX(${translationValue})`;
                }

                setInterval(showNextImage, 3000); //  every 3 seconds for sliding
            });


 const adsSliders = document.querySelectorAll('.ads-slider');

adsSliders.forEach(slider => {
    let slideIndex = 0;

    function showNextImage() {
        const adsImages = slider.querySelectorAll('img');
        adsImages.forEach(image => {
            image.classList.remove('active');
        });
        slideIndex = (slideIndex + 1) % adsImages.length;
        adsImages[slideIndex].classList.add('active');
    }
setInterval(showNextImage, 3000); // Change image every 3 seconds for sliding
    });
    function preloadImages(images) {
        images.forEach(image => {
            const img = new Image();
            img.src = image.src;
        });
    }

    const adsImages = document.querySelectorAll('.ads-slider img');
    preloadImages(adsImages);

});
</script>

  
</head>
<body>
    <title class = 'title'>Catering Menu</title>
    <fieldset>
        <legend>Catering Menu</legend>
    <!-- first pair-->
        <div class="slider-container">
        <div class="slider"  >
            <img src="pictures/1st.png" alt="Chinese cuisine">
            <img src="pictures/2nd.png" alt="Chinese cuisine ">
            <img src="pictures/3rd.png" alt="Chinese cuisine ">
            </div>
        </div>
        <div class="content-container">
        <div class="menu-title"> Chinese Oriental</div>
        <div class="menu-description">Indulge your senses in the delightful array of Chinese cuisine, highlighted by savory stir-fries, succulent dumplings, and aromatic dishes that reflect centuries of culinary expertise.</div>

        </div>
<!-- second-->
<div class="slider-container">
    <div class="slider"  >
            <img src="pictures/4e.png" alt="Japanese Oishi">
            <img src="pictures/5.png" alt="Japanese Oishi">
            <img src="pictures/6.png" alt="Japanese Oishi">
            </div>
            </div>

            <div class="content-container">
            <div class="menu-title">Japanese Oishi</div>
            <div class="menu-description">Japanese food captivates with its creative simplicity, highlighting dishes .</div>
        </div>

  <!--tbird-->   
  <div class="slider-container">
    <div class="slider"  >  
            <img src="pictures/7e.png" alt="Western Deliosiou ">
            <img src="pictures/8p.png" alt="Western Deliosiou ">
            <img src="pictures/9e.png" alt="Western Deliosiou ">
            </div>
            </div>
            <div class="content-container">
            <div class="menu-title">Delights of the West</div>
            <div class="menu-description">A western journey that emphasises richness and variety, Western cuisine captivates the palette with a wide symphony of flavours, ranging from robust steaks and sumptuous pastas to fresh salads and decadent sweets.</div>
        </div>

        <!-- forth-->
        <div class="slider-container">
            <div class="slider"  >  
            <img src="pictures/10w.png" alt="Jiwa Melayu">
            <img src="pictures/11.png" alt="Jiwa Melayu">
            <img src="pictures/12w.png" alt="Jiwa Melayu">
            <img src="pictures/19w.png" alt="Jiwa Melayu">
            <img src="pictures/w20.png" alt="Jiwa Melayu">
            <img src="pictures/w21.png" alt="Jiwa Melayu">
            </div>
            </div>
            <div class="content-container">
            <div class="menu-title">Jiwa Melayu</div>
            <div class="menu-description">Malay cuisine: A flavorful fusion of aromatic spices and vibrant dishes,embodying the essence of Malaysian culinary richness. </div>
        </div>

<!--fifth-->
<div class="slider-container">
    <div class="slider"  >  
            <img src="pictures/13w.png" alt="Korean Mukbang 5">
            <img src="pictures/14w.png" alt="Korean Mukbang 5">
            <img src="pictures/15w.png" alt="Korean Mukbang 5">
            <img src="ads_pictures/d6.png" alt="Korean Mukbang 5">
            </div>
            </div>
            <div class="content-container">
            <div class="menu-title">Korean Mukbang</div>
            <div class="menu-description">Korean cuisine embodies a harmonious symphony of flavors, seamlessly blending savory, sweet, and spicy notes, creating a culinary experience that reflects the essence of Korean culture  </div>
        </div>

<!--sixth-->
<div class="slider-container">
    <div class="slider"  >  
            <img src="pictures/16.png" alt="Ocassion Party">
            <img src="pictures/17.png" alt="Ocassion Party">
            <img src="pictures/18.png" alt="Ocassion Party">
            <img src="pictures/18.png" alt="Ocassion Party">
            </div>
            </div>
            <div class="content-container">
            <div class="menu-title">Ocassion Event </div>
            <div class="menu-description">A celebration of joy and togetherness, where delightful flavors, festive ambiance, and shared moments come together to create a memorable and joyous occasion for everyone involved</div>
        </div>
    </div>
</fieldset>
<fieldset>
<div class="ads-slider-container">
    <div class="ads-slider">
        <img src="ads_pictures/a6.png" alt="Ad ">
        <img src="ads_pictures/a8.png" alt="Ad ">
        <img src="ads_pictures/d1.png" alt="Ad ">
        <img src="ads_pictures/d2.png" alt="Ad ">
        <img src="ads_pictures/d3.png" alt="Ad ">
        <img src="ads_pictures/d4.png" alt="Ad ">
        <img src="ads_pictures/d5.png" alt="Ad ">
</fieldset>
    </div>
</div>           

</body>

</html>
<?php include ('includes/footer.html'); ?>