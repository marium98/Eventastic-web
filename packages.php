<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}
.margin {margin-bottom: 0px;}
  .bg-1 { 
    
    color: black;
    background-image: url("https://dkr2rmsityotp.cloudfront.net/wp-content/uploads/2018/07/winstar-meet-wedding-events-01.jpg");
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   height: 500%;
   text-align: center;
  }
  

.flip-box {
  background-color: transparent;
  width: 300px;
  height: 400px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
  margin-top: 100px;
  margin-left: 80px;
  border-bottom: 6px solid GREEN;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateX(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
  text-align: center;
}

.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateX(-180deg);
}



.col {
margin-left:60px;
  float: left;
  width: 40.33%;
  padding: 8px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
.container1 {
  position: relative;
  text-align: center;
  color: black;
  font-weight: bolder;
  font-size: 50px;
  
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-top-style: dotted;
  border-right-style: solid;
  border-bottom-style: dotted;
  border-left-style: solid;
  
}
.cover{
  object-fit: cover;
}
.bottom-right{
  position: absolute;
  bottom: 8px;
  right: 16px;
  color: #33FF3E;
   border-top-style: dotted;
  border-right-style: solid;
  border-bottom-style: dotted;
  border-left-style: solid;
}
.contain{
  position: relative;
  text-align: center;
  color: black;
  font-weight: bolder;
  font-size: 30px;
}
.container-fluid {
    padding-top: 200px;
    padding-bottom: 200px;
  }
.btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;

}

.btn:hover {opacity: 0.6}
*, *::before, *::after{transition:all .3s ease-in-out;box-sizing:border-box;}
/* nospace class*/
.nospace{margin:0; padding:0; list-style:none;}

/* block class*/
.block{display:block;}

/*background image */
.bg-img::after{display:block; position:absolute; top:0; left:0; width:100%; height:100%; content:""; z-index:-1;}
.bg-img{position:relative; z-index:1;background-position:top center; background-repeat:no-repeat; background-size:cover;}

/*backgroung Colours
--------------------------------------------------------------------------------------------------------------- */

.bg-img{color:#FFFFFF; background-color:inherit;}
.bg-img::after{color:inherit; background-color:rgba(0,0,0,.55);}


/* clear class*/
.clear{display:block;}
.clear::before, .clear::after{display:table; content:"";}
.clear, .clear::after{clear:both;}
/* a tag*/
a{outline:none; text-decoration:none;color:#41C379;}
a:active, a:focus{background:transparent;}/* IE10 + 11 Bugfix - prevents grey background */

/* Fonts
--------------------------------------------------------------------------------------------------------------- */
.heading{font-family:Georgia, "Times New Roman", Times, serif;}




/* Generalise
--------------------------------------------------------------------------------------------------------------- */

.heading.nospace{margin-bottom:0;}
/*
The "hoc" class is a generic class used to centre a containing element horizontally
It should be used in conjunction with a second class or ID
*/
.hoc{display:block; margin:0 auto;}



/* Grid 
--------------------------------------------------------------------------------------------------------------- */
.one_third, .one_quarter, .three_quarter{display:inline-block; float:left; margin:0 0 0 4.21052%; list-style:none;}

.first{margin-left:0; clear:left;}

.one_quarter{width:21.8421%;}
.one_third{width:30.52631%;}
.three_quarter{width:73.94736%;}

/* Header starts 
--------------------------------------------------------------------------------------------------------------- */
#header #logo a{color:inherit;}
#header ul li div:hover i{color:#FFFFFF; background-color:#41C379;}
#header{padding:50px 0;}

#header #logo *{margin:0; padding:0; line-height:1;}
#header #logo h1{font-size:32px;display:block; margin:0 0 0 20px; padding:0; line-height:normal; font-weight:normal; text-transform:capitalize;}
#header #logo p{font-size:.9rem; margin:0 0 0 20px;}

#header ul{}
#header ul li{}
#header ul li div{position:relative; min-height:45px; padding:0 0 0 60px; line-height:1; word-wrap:break-word;}
#header ul li div i{background-color:#FFFFFF;position:absolute; top:0; left:0; width:45px; height:45px; line-height:45px; font-size:16px;margin:10px 2px 8px -9px; text-align:center; border-radius:50%;}
#header ul li div span{font-size: 14px;margin:12px 0 8px -10px;display:block; padding:0 0 0 0;}
#header ul li div strong{display:block;margin:0 0 8px -10px;font-size: 16px;}

/* header starts 
--------------------------------------------------------------------------------------------------------------- */

/* navbar starts 
--------------------------------------------------------------------------------------------------------------- */
/* The navbar */
.topnav {
  margin-left: 100px;
  overflow: hidden;
  color:#FFFFFF; 
  background-color:rgba(0,0,0,.35);
  width: 1200px;

}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #41C379;
  color: black;
}
.topnav a.active{
  background-color: #41C379;
  color: black;
}
/*drop down navbar*/
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #41C379;
  color: black;
}

.dropdown-content {
  display: none;
  position: absolute; 
  background-color: #41C379;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;

}

.dropdown-content a:hover {
  background-color: #ddd;

}

.dropdown:hover .dropdown-content {
  display: block;
}
/*navbar end-------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------*/

*, *::before, *::after{transition:all .3s ease-in-out;box-sizing:border-box;}


/* center
--------------------------------------------------------------------------------------------------------------- */
.center{text-align:center;}


/* nospace
--------------------------------------------------------------------------------------------------------------- */
.nospace{margin:0; padding:0; list-style:none;}

/* clear class
----------------------------------------------------------------------------------------------------------------*/
.clear{display:block;}
.clear::before, .clear::after{display:table; content:"";}
.clear, .clear::after{clear:both;}

/* a tag
-------------------------------------------------------------------------------------------------------------*/
a{outline:none; text-decoration:none;color:#41C379;}
a:active, a:focus{background:transparent;}/* IE10 + 11 Bugfix - prevents grey background */

/* heading class
--------------------------------------------------------------------------------------------------------------- */
.heading{font-family:Georgia, "Times New Roman", Times, serif;}
.heading.nospace{margin-bottom:0;}

/*hoc class
-----------------------------------------------------------------------------------------------------------*/
.hoc{display:block; margin:0 auto;}



/* Grid 
--------------------------------------------------------------------------------------------------------------- */
.one_quarter{display:inline-block; float:left; margin:0 0 0 4.21052%; list-style:none;}
.first{margin-left:0; clear:left;}
.one_quarter{width:21.8421%;}

/* overlay
--------------------------------------------------------------------------------------------------------------- */
.overlay{color:#FFFFFF; background-color:inherit;position:relative; z-index:1;}
.overlay::after{display:block; position:absolute; top:0; left:0; width:100%; height:100%; content:""; z-index:-1;}
.overlay::after{color:inherit; background-color:rgba(0,0,0,.55);}


/* Image
--------------------------------------------------------------------------------------------------------------- */

.fl_left{float:left;}


.imgl{margin:0 15px 10px 0; clear:left;}
.imgr{margin:0 0 10px 15px; clear:right;}
.imgover{display:inline-block; position:relative; max-width:100%;}
.imgover::before, .imgover::after{display:block; position:absolute; content:""; text-align:center; opacity:0;}
.imgover::before{top:0; right:0; bottom:0; left:0;}
.imgover::after{top:50%; left:50%; width:50px; height:50px; line-height:50px; margin:-25px 0 0 -25px; font-family:"Font Awesome 5 Free"; font-weight:900; content:"\f06e";/* fa-eye */ font-size:28px;}
.imgover:hover::before, .imgover:hover::after{opacity:1;}

.imgover:hover::before{background-color:rgba(0,0,0,.55);}
.imgover, .imgover:hover::after{color:#41C379;}



/* Forms
--------------------------------------------------------------------------------------------------------------- */
form, fieldset, legend{margin:0; padding:0; border:none;}
legend{display:none;}
label, input, textarea, select, button{display:block; resize:none; outline:none; color:inherit; font-size:inherit; font-family:inherit; vertical-align:middle;}
label{margin-bottom:5px;}
:required, :invalid{outline:none; box-shadow:none;}
::placeholder{opacity:1;}/* Makes sure the placeholder text is not transparent */
input:focus, textarea:focus, *:required:focus{border-color:#41C379;}
 input, textarea, select{font-family:Verdana, Geneva, sans-serif;}


/* Generalise
--------------------------------------------------------------------------------------------------------------- */
 

/*hr
--------------------------------------------------------------------------------------------------------------------*/
hr{display:block; width:100%; height:1px; border:solid; border-width:1px 0 0 0;border-color:#D7D7D7;}


/* Wrapper class
--------------------------------------------------------------------------------------------------------------- */
.wrapper{display:block; position:relative; width:100%; margin:0; padding:0; text-align:left; word-wrap:break-word;}




/* bottom spacing btmspc-10,15,50 class
--------------------------------------------------------------------------------------------------------------- */
.btmspace-10{margin-bottom:10px;}
.btmspace-15{margin-bottom:15px;}
.btmspace-50{margin-bottom:50px;}



/* Rows
--------------------------------------------------------------------------------------------------------------- */
.row4, .row4 a{}
.row5, .row5 a{}
.row4{color:#C1C2C4; background-color:#323639;}
.row5, .row5 a{color:#C1C2C4; background-color:#2A2D34;}





/* Footer
--------------------------------------------------------------------------------------------------------------- */
footer{display:block; margin:0; padding:0;}

#footer{padding:80px 0px;}

#footer .heading{color:#FFFFFF;}
#footer hr, #footer .borderedbox, #footer .linklist li{border-color:rgba(255,255,255,.1);}

#footer input, #footer button{border-color:transparent;}

#footer .heading{margin-bottom:50px; font-size:1.2rem;}

#footer > div:first-of-type .heading{margin-bottom:20px; text-transform:uppercase; font-size:1.8rem;}
#footer > div:first-of-type .faico{margin-bottom:30px;}

#footer input, #footer button{border:1px solid;}
#footer input{color:#474747; background-color:#FFFFFF;display:block; width:100%; padding:8px;}
#footer button{color:#FFFFFF; background-color:#41C379;padding:8px 18px 10px; text-transform:uppercase; font-weight:400; cursor:pointer;}
#footer button:hover{color:inherit; background-color:transparent; border-color:inherit;}

#footer .linklist li{display:block; margin-bottom:15px; padding:0 0 15px 0; border-bottom:1px solid;}
#footer .linklist li:last-child{margin:0; padding:0; border:none;}
#footer .linklist li::before, #footer .linklist li::after{display:table; content:"";}
#footer .linklist li, #footer .linklist li::after{clear:both;}

#footer .contact{}
#footer .contact.linklist li, #footer .contact.linklist li:last-child{position:relative; padding-left:40px;}
#footer .contact li *{margin:0; padding:0; line-height:1.6;}
#footer .contact li i{display:block; position:absolute; top:0; left:0; width:30px; font-size:16px; text-align:center;}

#footer .latestimg{}
#footer .latestimg > li{display:inline-block; float:left; width:30%; margin:0 0 5% 5%;}
#footer .latestimg > li:nth-last-child(-n+3){margin-bottom:0;}/* Removes bottom margin from the last three items - margin is restored in the media queries when items stack */
#footer .latestimg > li:nth-child(3n+1){margin-left:0; clear:left;}/* Removes the need to add class="first" */
#footer .latestimg > li img{width:100%;}/* Force the image to resize to take the full space - may have to be changed for tablets, depends on personal preference */
#footer .latestimg > li a.imgover{display:block;}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #41C379;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #41C379;
}

/* Set a style for the submit button */
.btn {
  background-color: #41C379;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}


/* Copyright
--------------------------------------------------------------------------------------------------------------- */
#copyright{padding:20px 0;}
#copyright *{margin:0; padding:0;}



/* Font Awesome Social Icons
--------------------------------------------------------------------------------------------------------------- */
.faico{margin:0; padding:0; list-style:none;}
.faico li{display:inline-block; margin:8px 5px 0 0; padding:0; line-height:normal;}
.faico li:last-child{margin-right:0;}
.faico a{display:inline-block; width:36px; height:36px; line-height:36px; font-size:18px; text-align:center;}

.faico a{color:#FFFFFF; background-color:#2A2D34;}
.faico a:hover{}

.faicon-dribble:hover{background-color:#EA4C89;}
.faicon-facebook:hover{background-color:#3B5998;}
.faicon-google-plus:hover{background-color:#DB4A39;}
.faicon-linkedin:hover{background-color:#0E76A8;}
.faicon-twitter:hover{background-color:#00ACEE;}
.faicon-vk:hover{background-color:#4E658E;}


/* Media Queries
--------------------------------------------------------------------------------------------------------------- */
@-ms-viewport{width:device-width;}


/* Max Wrapper Width - Laptop, Desktop etc.
--------------------------------------------------------------------------------------------------------------- */
@media screen and (min-width:1140px){
  .hoc{max-width:1140px;}
}

@media screen and (min-width:978px) and (max-width:1140px){
  .hoc{max-width:95%;}
}
</style>
</head>
<body>
  
<div class="bg-img" style="background-image:url('https://cdn0.weddingwire.ca/img_r_10838/8/3/8/0/t30_50_10838.jpg');"> 
            <header id="header" class="hoc clear"> 
              <div id="logo" class="one_quarter first">
                <h1 style="margin: 0 0 0 10px;"><a href="home.php">Eventastics</a></h1>
                <p style="margin: 0 0 0 10px;">P P P Pick Up The Event</p>
              </div>
              <div class="three_quarter">
                <ul class="nospace clear">
                  <li class="one_third first">
                    <div class="block clear"><a href="#"><i class="fa fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
                  </li>
                  <li class="one_third">
                    <div class="block clear"><a href="#"><i class="fa fa-envelope"></i></a> <span><strong>Send us a mail:</strong>haniya@gmail.com</span></div>
                  </li>
                  <li class="one_third">
                    <div class="block clear"><a href="#"><i class="fa fa-clock-o"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 8.00pm</span></div>
                  </li>
                </ul>
              </div>
            </header>
            <!--header-->
          
            <!--navbar-->  
          <div class="container">
              <div class="topnav" style="margin: 0 0 0 100px;">
                <a href="home.php" ><i class="fa fa-home"></i>Home</a>
                <a href="why.php"><i class="fa fa-question-circle"></i>Why Eventastics</a>
                <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-camera"></i>Gallery 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="portfolio.php"><i class="fa fa-image"></i>Pictures</a>
                <a href="videos.php"><i class="fa fa-video-camera"></i>Videos</a>
               </div>
            </div> 
                <a href="services.php"><i class="fa fa-cogs"></i>Services</a>
                <div class="dropdown ">
              <button class="dropbtn "><div class= "active"><i class="fa fa-th-list"></i>Menu 
                <i class="fa fa-caret-down"></i></div>
              </button>
              <div class="dropdown-content">
                <a href="packages.php" class="active" ><i class="fa fa-gift"></i>Packages</a>
                <a href="menu.php"><i class="fa fa-cutlery"></i>List of Menu</a>
              </div>
            </div> 
            <a href="contact.php"><i class="fa fa-envelope"></i>Contact Us</a>
            <a href="login.php" style="float:right;"><i class="fa fa-user"></i>Login</a>
            
              </div>
            </div>
            </div>
<div class="container-fluid bg-1 text-center">
  <h3 class="margin"></h3>
   <h1 style="font-weight: bolder;">PACKAGES EVANTASTIC PROVIDE</h1> </div> <br><br>
<div class="container1">
  <img src="https://img.thebridalbox.com/wp-content/uploads/2015/07/Floral-stage-decorations.jpg" width="1150px" height="210px">
  <div class="centered" style="">WEDDING/MEHNDI</div>
  
</div>
<div class="row">
  <div class="col">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <div class="contain">
        <div class="bottom-right">Package 1</div>
      <img src="https://s3-media2.fl.yelpcdn.com/bphoto/kIbys-Gon-8FJYrAmFmyhQ/o.jpg" width= "300px"
  height= "400px">
    </div></div>
    <div class="flip-box-back">
      <ul>
 <li>AFGHANI PULAO</li>
<li>CHICKEN SAJJI</li>
<li>CHICKEN BONELESS GREEN MASALA</li>
<li>MASALA DOSSA</li>
<li>CHAPLI KABAB</li>
<li>LAHORI FRIED FISH</li>
<li>NAN (LIVE 2-TYPES)</li>
<li>PARATHA</li>
<li>SALAD BAR WITH SEPARATE DRESSING</li>
<li>MALPURA WITH RABRI</li>
<li>CRISPY JALEBI</li>
<li>DAL HALWA</li>
</ul>
    </div>
  </div>
</div><div class="w3-container w3-center"><button class="btn" style="margin-left:140px;width:150px;"><a href="inquiry.php" style="color:white;"> Inquire Now</a></button></div>
</div>

 <div class="col">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <div class="contain">
        <div class="bottom-right">Package 2</div>
      <img src="https://harvestmooncateringdcl.com/wp-content/uploads/2016/02/deep-creek-lake-business-catering.jpg" width= "300px"
  height= "400px">
      
    </div>
    </div>
    <div class="flip-box-back">
      <ul>
 <li>HICKEN BIRYANI OR PULAO</li>
<li>MUTTON KUNNA OR MUTTON QORMA</li>
<li>PRAWN HANDI</li>
<li>SEEKH KABAB OR CHANDAN KABAB</li>
<li>CHICKEN MALAI BOTI OR AFGHANI BOTI</li>
<li>LAHORI FRIED FISH WITH TATUR SAUCE</li>
<li>PALAK PANEER OR MIX VEGETABLE</li>
<li>NAN (LIVE 2-TYPES)</li>
<li>SALAD BAR WITH SEPARATE DRESSING</li>
<li>ICE CREAM</li>
<li>MINI HOT GULAB JAMON</li>
</ul>
    </div>
  </div></div><div class="w3-container w3-center"><button class="btn" style="margin-left:140px;width:150px;"><a href="inquiry.php" style="color:white;"> Inquire Now</a></button></div>
</div>
</div> <br><br>
<div class="container1">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTipwQW01L6bfkGUuAsddzy6HlnJcFYJGadmh69PtAXknc221oC" width="1150px" height="210px">
  <div class="centered" style="">BIRTHDAY/CONCERTS</div>
  
</div>
<div class="row">
  <div class="col">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <div class="contain">
        <div class="bottom-right">Package 3</div>
      <img src="http://www.thepartyshop.com.bd/wp-content/uploads/2018/09/fad846c14810909b0a2630717a034629-1-600x600.png" width= "300px"
  height= "400px">
      
    </div>
    </div>
    <div class="flip-box-back">
      <ul>
 <li>MONGOLIAN RICE OR CHINESE FRIED RICE</li>
<li>CHICKEN WITH CASHEW NUTS</li>
<li>CHICKEN TEPENYAKI OR CHICKEN TERIYAKI</li>
<li>DRY BEEF CHILLI</li>
<li>CHICKEN SHASHLIK SKEWERS</li>
<li>FRIED POMFRET WITH SALSA SAUCE</li>
<li>PASTA (LIVE)</li>
<li>EXTENSIVE SALAD BAR WITH SEPARATE DRESSING</li>
<li>FRIED BANANA ICE CREAM</li>
<li>CREAM CARAMEL</li>
</ul>
    </div>
  </div>
</div><div class="w3-container w3-center"><button class="btn" style="margin-left:140px;width:150px;"><a href="inquiry.php" style="color:white;"> Inquire Now</a></button></div>
</div>

 <div class="col">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <div class="contain">
        <div class="bottom-right">Package 4</div>
      <img src="https://i.pinimg.com/originals/3f/f0/85/3ff0851f4a540a872b057a444587f431.jpg" width= "300px"
  height= "400px">
      
    </div>
    </div>
    <div class="flip-box-back">
      <ul>
 <li>CHAT STALL</li>
<li>BUN KABAB</li>
<li>CHICKEN BIRYANI</li>
<li>CHICKEN HANDI OR CHICKEN QORMA</li>
<li>GOLA KABAB OR RESHMI KABAB</li>
<li>CHICKEN TIKKA BOTI</li>
<li>CRUMBED FRIED FISH</li>
<li>NAN (LIVE 2-TYPES)</li>
<li>SALAD BAR WITH SEPARATE DRESSING</li>
<li>KULFI FALUDA</li>
<li>MINI HOT GULAB JAMON</li>
</ul>
    </div>
  </div>
</div><div class="w3-container w3-center"><button class="btn" style="margin-left:140px;width:150px;"><a href="inquiry.php" style="color:white;"> Inquire Now</a></button></div>
</div>
</div> <br><br>
<div class="container1">
  <img src="https://www.stellarplanning.com/wp-content/uploads/corporate-event-indoor.jpg" width="1150px" height="210px">
  <div class="centered" style="">CORPORATE EVENTS</div>
  
</div>
<div class="row">
  <div class="col">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <div class="contain">
        <div class="bottom-right">Package 5</div>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ4cpD521YIUH2XoopqGYI3qERcK9Gwuxb2d7AwyiHhM5W_b__" width= "300px"
  height= "400px">
      
    </div>
    </div>
    <div class="flip-box-back">
      <ul>
 <li>MONGOLIAN RICE OR CHINESE FRIED RICE</li>
<li>CHICKEN WITH CASHEW NUTS</li>
<li>CHICKEN TEPENYAKI OR CHICKEN TERIYAKI</li>
<li>DRY BEEF CHILLI</li>
<li>CHICKEN SHASHLIK SKEWERS</li>
<li>FRIED POMFRET WITH SALSA SAUCE</li>
<li>PASTA (LIVE)</li>
<li>EXTENSIVE SALAD BAR WITH SEPARATE DRESSING</li>
<li>FRIED BANANA ICE CREAM</li>
<li>CREAM CARAMEL</li>
</ul>
    </div>
  </div>
</div><div class="w3-container w3-center"><button class="btn" style="margin-left:140px;width:150px;"><a href="inquiry.php" style="color:white;"> Inquire Now</a></button></div>
</div>

 <div class="col">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <div class="contain">
        <div class="bottom-right">Package 6</div>
      <img src="https://avaloneventscenter.com/wp-content/uploads/2019/02/Avalon-Events-Center-Fargo-Business-Corporate-Events-0018.jpg" width= "300px"
  height= "400px">
      
    </div>
    </div>
    <div class="flip-box-back">
      <ul>
 <li>CHAT STALL</li>
<li>BUN KABAB</li>
<li>CHICKEN BIRYANI</li>
<li>CHICKEN HANDI OR CHICKEN QORMA</li>
<li>GOLA KABAB OR RESHMI KABAB</li>
<li>CHICKEN TIKKA BOTI</li>
<li>CRUMBED FRIED FISH</li>
<li>NAN (LIVE 2-TYPES)</li>
<li>SALAD BAR WITH SEPARATE DRESSING</li>
<li>KULFI FALUDA</li>
<li>MINI HOT GULAB JAMON</li>
</ul>
    </div>
  </div>
</div><div class="w3-container w3-center"><button class="btn" style="margin-left:140px;width:150px;"><a href="inquiry.php" style="color:white;"> Inquire Now</a></button></div>
</div>
</div> <br><br>
<?php include('footer.php'); ?>