<html>
    <head>
        
        <title> SMART STORE </title>
        <link rel="stylesheet" href="style.css">          
        <script src="js/script.js"></script>
     
       <div class="TopBar">
           <div class="Bar-inside" >
               <ul>
                   <a><img class="logo-img" src="Logo.jpg" ></a> 
                   <div class="logo-text"><br>
                        <a class="SMART">SMART</a>
                        <a class="STORE">STORE</a>
                   </div>
            <li><a href="SMART%20STORE.html" class="HOME">HOME</a></li> 
                   <li>   
                       <ul class="dropdown">
                            <button onclick="window.location.href = 'PRODUCT.html';" class="dropbtn"> PRODUCT </button>
                    <div class="dropdown-content">
                    <a href="PRODUCT.html">LapTop</a>
                    <a href="PRODUCT.html">Mobile</a>
                     </div>
                        </ul>
                    </li>
                  
                   <li>
                        <ul class="dropdown">
                            <button class="dropbtn"> MEMORY </button>
                    <div class="dropdown-content">
                    <a href="#">Pictures</a>
                    <a href="#">Videos</a>
                    </div>
                        </ul>
                    </li>
                    
                   <li>
                        <ul class="dropdown">
                            <button  href="DatabaseIndex.php" class="dropbtn" > Index DataBase</a> </button>
                            <button  href="ConnectToDB.php" class="dropbtn" > Index DataBase</a> </button>
                       </ul>
                   </li>
             
                    <li>
                        <input type="text" value="FINDING SOMETHING?" >
                   </li>
                   
                   <li>
                       <a href="Login%20and%20Signup.html" class="signup-btn"><span> Sign Up </span></a>
                   </li>
                   
                  
            </ul>
          </div>
        </div>
    </head>
           
    <body style="background-color:#222222" > 
        
        <div class="main_video">
            <video width="auto" height="auto" autoplay="autoplay" loop muted> 
                <source src="finger%20ID%20main_page.mp4" type="video/mp4" >
            </video>
        </div>
        
        <div class="content_main">
            <div class="content">
            <h1> WHAT DO WE HAVE IN HERE ? </h1>
            <p> + Here, we have a security system with fingerprints to assist buyers <br>
                + Our shop imports the leading equipment products from famous companies in the world.<br>
                + I bet you will enjoy when click in GO SHOP NOW below:
            </p>
            </div>
        </div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>      
     <h2 class="NameSlide" style="text-align:center">All PRODUCT</h2>

<div class="slide-container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <center><img src="Rog%20Asus.jpg" style="width:70%"></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <center><img src="Zenfone%20Max%20Pro%20M2.jpeg" style="width:70%"></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="samsung%20galaxy%20a70.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="samsung%20galaxy%20s10.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="Gtx%201060.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="GTX%201070.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row-mySlides">
      <div class="row-myslides-all">
    <div class="column">
      <img class="demo cursor1" src="Rog%20Asus.jpg" style="width:100%" onclick="currentSlide(1)" alt="ROG ASUS">
    </div>
    <div class="column">
      <img class="demo cursor2" src="Zenfone%20Max%20Pro%20M2.jpeg" style="width:100%" onclick="currentSlide(2)" alt="ZenFone Max 2 Pro">
    </div>
    <div class="column">
      <img class="demo cursor3" src="samsung%20galaxy%20a70.jpg" style="width:100%" onclick="currentSlide(3)" alt="Samsung Galaxy A70">
    </div>
    <div class="column">
      <img class="demo cursor4" src="samsung%20galaxy%20s10.jpg" style="width:100%" onclick="currentSlide(4)" alt="Samsung Galaxy S10">
    </div>
    <div class="column">
      <img class="demo cursor5" src="Gtx%201060.jpg" style="width:100%" onclick="currentSlide(5)" alt="GTX 1060">
    </div>    
    <div class="column">
      <img class="demo cursor6" src="GTX%201070.jpg" style="width:100%" onclick="currentSlide(6)" alt="GTX1070">
    </div>
     </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>   
        
        <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <div class="goshopbox" >
        <button onclick="window.location.href = 'PRODUCT.html';" class="goshop">GO SHOP NOW</button>
        </div>
        
        <div class="footer">
            <a> This website is referenced on the available websites </a> <br>
            <a> Extracted from the Reference section of the Frontsheet </a> <br>
            <a> I pledge not to illegally copy any websites.</a>
        </div>
        
        
        <div class="Company-container">
            <div class="row-company">
                
                <div class="col1">
                    <div class="card" style="width: 20rem;">
                        <img class="img-company" src="New_Qualcomm_Snapdragon_Logo.jpg" >
                        <div class="card-body">
                            <h5 class="card-title">QUALCOMM SNAPDRAGON</h5>
                                <p class="card-text">As a processor, it helps to improve smooth graphics when playing games on phones.</p><br>
                                <a href="https://www.qualcomm.com/snapdragon" class="button">INFOMATION</a>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="card" style="width: 20rem;">
                        <img class="img-company" src="nvidia.jpg" width="316"s >
                        <div class="card-body">
                            <h5 class="card-title">NVIDIA GEFORCE-QUADRO</h5>
                                <p class="card-text">Increases graphics processing speed, increases renderability when making graphics and playing games.</p>
                                <a href="https://www.nvidia.com/en-gb/" class="button">INFOMATION</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        
        
    </body>
    
   
   







</html>