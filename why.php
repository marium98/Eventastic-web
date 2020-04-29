<!DOCTYPE html>
<html>
<title>Why Eventastics</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  @charset "utf-8";
body{
  font-size: 25px;
  color: black;
  margin: 0;
  background-color: white;
 }
 
 .margin {margin:0px;}
  .bg-1 { 
    text-align: center;
    color: black;
    background-image: url("https://files.salsacdn.com/card/1625_Sugokuii_Luxury_Events_/image/6_d.20170803174912.jpg");
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   height: 500px;
  }


.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
html {
  box-sizing: border-box;
  margin: 0;
}

*, *:before, *:after {
  box-sizing: inherit;
  margin: 0;
}


.column {
  float: left;
  width: 43.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
border-style: double; 


}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #7E1518;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.container-fluid {
    padding-top: 200px;
    padding-bottom: 200px;}
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
#header #logo h1{font-size:32px;display:block; margin:0 0 0 20px; padding:0 0px; line-height:normal; font-weight:normal; text-transform:capitalize;}
#header #logo p{font-size:.9rem; margin:0 0 0 20px;}
#header .block .clear span{
  font-size: 10px;
}
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
.linklist li a{ font-size: 16px; margin-bottom: 10px;}
/*hoc class
-----------------------------------------------------------------------------------------------------------*/
.hoc{display:block; margin:0 auto;}

button{
  font-size: 16px;
}

/* Grid 
--------------------------------------------------------------------------------------------------------------- */
.one_quarter{display:inline-block; float:left; margin:0 0 0 4.21052%; list-style:none;}
.first{margin-left:0; clear:left;}
.one_quarter{width:21.8421%;}

/* overlay
--------------------------------------------------------------------------------------------------------------- */
.overlay{color:#FFFFFF;background-size: cover;background-color:inherit;position:relative; z-index:1;}
.overlay::after{display:block; position:absolute; top:0; left:0; width:100%; height:100%; content:""; z-index:-1;}
.overlay::after{color:inherit; background-color:rgba(0,0,0,.55);}


/* Image
--------------------------------------------------------------------------------------------------------------- */

.fl_left{float:left;

}


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
hr{display:block; width:100%; height:2px; border:solid; border-width:1px 0 0 0;border-color:#D7D7D7;}


/* Wrapper class
--------------------------------------------------------------------------------------------------------------- */
.wrapper{display:block; position:relative; width:100%; margin:0; padding:0; text-align:left; word-wrap:break-word;}




/* bottom spacing btmspc-10,15,50 class
--------------------------------------------------------------------------------------------------------------- */
.btmspace-10{margin-bottom:10px; font-size: 16px;}
.btmspace-15{margin-bottom:15px;font-size: 16px;}
.btmspace-50{margin-bottom:50px;font-size: 16px;}



/* Rows
--------------------------------------------------------------------------------------------------------------- */
.row4, .row4 a{}
.row5, .row5 a{}
.row4{color:#C1C2C4; background-color:#323639;background-size: cover;}
.row5, .row5 a{color:#C1C2C4; background-color:#2A2D34;}





/* Footer
--------------------------------------------------------------------------------------------------------------- */
footer{display:block; margin:0px; padding:0px; background-size: cover;background-color: black;}

}

#footer{padding:80px 0px;margin: 0; background-size: cover;background-color: black;margin: 0 auto -4em;
position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;}
#footer .heading{color:#FFFFFF;}
#footer hr, #footer .borderedbox, #footer .linklist li{border-color:rgba(255,255,255,.1);}

#footer input, #footer button{font-size: 16px;border-color:transparent;}

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
#copyright{padding:10px 0;}
#copyright *{margin:0px; padding:0; font-size: 16px;background-position: cover;position: relative;width: 100%;}



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

.w3-center .w3-class p{
  font-size: 25px;
} 

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
<body>
<div class="bg-img" style="background-image:url('https://cdn0.weddingwire.ca/img_r_10838/8/3/8/0/t30_50_10838.jpg');"> 
            <header id="header" class="hoc clear"> 
              <div id="logo" class="one_quarter first">
                <h1 style="margin: 0 0 0 10px;"><a href="index.html">Eventastics</a></h1>
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
                <a href="why.php" class = "active"><i class="fa fa-question-circle"></i>Why Eventastics</a>
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
                <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-th-list"></i>Menu 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="packages.php" ><i class="fa fa-gift"></i>Packages</a>
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
   <h1 style="font-weight: bolder;">WHY EVENTASTICS</h1><br>
   <h2>P~P~P PICK UP THE EVENT</h2> </div> <br><br>

<!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="https://brideworthy.libpx.com/images/public/listings/37273132_1270440513092519_5739125713995300864_o_9ec46c19732a34e560b086877ab9a817.jpg?upscale=false&width=1024&height=768" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Make It Happen</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="https://alexandra.bridestory.com/images/c_scale,dpr_1.0,f_auto,fl_progressive,pg_1,q_90,w_680/v1/blogs/DSC_7290_sddqiw/french-garden-inspired-chinese-engagement-party-in-surabaya-19.jpg" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Life's a party</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="https://static1.squarespace.com/static/59cc1d43197aea6d683b9d52/5a7902c6ec212de7dd85fe5a/5b78bb844ae2377ea91850c5/1550021322907/wedding-birthday-party-decoration-event-styling-edmonton-15.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Make It Memorable</span>
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <hr>
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16" style="font-size: 40px;">What We Offer</span>
    </div>
    <div class="w3-col l3 m6 w3-green w3-container w3-padding-16">
      <h3>Decor hire services</h3>
      <p style="background-color: black; color: white;">We are specialize to provide décor hire services that will suit and bridge the needs of your next special event.Make it happen.</p>
    </div>

    <div class="w3-col l3 m6 w3-blue w3-container w3-padding-16">
      <h3 style="color: white;">Events entertainment</h3>
      <p style="background-color: black; color: white;">Whether you’re in need of corporate entertainment is Brisbane, the best event management company will bring them to you!</p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Online resource</h3>
      <p style="background-color: black;">Online resources can help you to find the right event management company for your next special and more special event.</p>
    </div>

    <div class="w3-col l3 m6 w3-red w3-container w3-padding-16">
      <h3>Special services</h3>
      <p style="background-color: black;">The aim of event planners is to take the stress out of planning a special event by taking a step ahead of the market</p>
    </div>
  </div>
<hr>
<!-- Page content -->
<div class="w3-content" style="max-width:1100px">
</div>
  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="https://5.imimg.com/data5/SD/OX/MY-7803889/wedding-decoration-material-500x500.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" style = "width: 600px;height: 600px">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Who We Are???</h1><br>
      <h5 class="w3-center">Enjoy the luxury and peace of mind by working with us</h5>
      <p class="w3-large" style="font-size:30px;">We don’t only arrange events we create memories for your guests. We supply everything you need from start to finish and help you create exactly the event you want.
With every event our customer’s needs are most important to us. Whether you are planning a chic outdoor wedding or any corporate event gala, we take great pride in providing our event planning experience to help create an unforgettable event. Browse our vast events gallery & rentals collection for inspiration and design your own combinations. If something catches your eye, feel free to get in touch with a member of our event team here. </p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Achievements</h1><br>
      <p class="w3-text-grey">We have worked with companies and trade associations of all sizes ranging from the very small all the way up to the major blue chip companies such as Mobilink, Barclay’s etc.</p><br>
      <p class="w3-text-blue">“Our extensive knowledge makes us Event Management Specialists.”</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQWXkwvpUtgFuE0Mm2UmnAR9hmn-H79Q95JGpi2XbdutOLStiU" class="w3-round w3-image w3-opacity-min" alt="decor" style="width:750px; height: 500px">
    </div>
  </div>

  <hr>
<!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Pricing Plans</h3>
      <p>Choose a pricing plan that fits your needs.</p>
    </div>
    <hr>


<h2 style="text-align: center; background-color: pink;">"Meet The Team" </h2>
<p style="text-align: center;background-color: pink;">The makers of eventastics</p>
<br>

<div class="row">
  <div class="column">
    <div class="card"style="margin-left:120px;">
      <img src="haniya.jpg" alt="Haniya" style="width:400px; height: 400px;">
      <div class="container">
        <h2>Haniya Younus</h2>
        <p class="title">CEO & Founder</p>
        <p>“Can we build it??? Yes We Can!!!"</p>
        <p>younushaniya@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card"style="margin-left:120px;">
      <img src="mari.jpg" alt="marium" style="width:400px; height: 400px;">
      <div class="container">
        <h2>Marium Adnan</h2>
        <p class="title">Art Director</p>
        <p>“Nothing succeeds like success!"</p>
        <p>mariumadnan@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
</div>
 <hr>
</div>
<?php
 include("footer.php");
?>
<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>