<!DOCTYPE html>
<html lang="en">
<head>
  <title>Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style >
    @charset "utf-8";
    
    body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
    background-color: white;

  }
  p {font-size: 19px;
  font-weight: bold; 

  }
  .margin {margin-bottom: 0px;


  } 
  .bg-1 { 
    
    color: black;
    background-image: url("https://crystalballroom.com/wp-content/uploads/2018/12/crystal-ballroom-table-decorations-3-5ba295d758ab0-1200x675.jpeg");
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   height: 600%;
   text-align: center;
 
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: black;
  }
  .bg-3 { 
    
   /* White */
    color: #6A274A;
  }
  .col-sm-4{
    text-align: center;
  }
 
  .container-fluid {
    padding-top: 200px;
    padding-top: 200px;
   
  }
      img:hover{
  animation: shake 0.5s; 

  /* When the animation is finished, start again */
  animation-iteration-count: infinite; 
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

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
.one_third{width:30.52631%;margin:10px;padding-right: 20px;}
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
#header ul li div span{font-size: 14px;margin:12px 0 8px -14px;display:block; padding:0 0 0 0;}
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
-----------------------------------------------------------------------------------------------------------------------*/-
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
.btmspace-15{margin-bottom:15px; font-size:16px;}
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
  text-align:left;
  font-size:16px;
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
                <a href="why.php" ><i class="fa fa-question-circle"></i>Why Eventastics</a>
                <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-camera"></i>Gallery 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="portfolio.php"><i class="fa fa-image"></i>Pictures</a>
                <a href="videos.php"><i class="fa fa-video-camera"></i>Videos</a>
               </div>
            </div> 
                <a href="services.php" class = "active"><i class="fa fa-cogs"></i>Services</a>
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
   <h1 >SERVICES EVANTASTIC PROVIDE</h1>
    <p style="text-align: center;">It is not about great photography, neither about being in the news highlights or receiving maximum wows from the guests attending the event. In fact, for two people, this is the day and this has to be the day which a couple will remember for the rest of their life. Traditional or modern,in anyway a couple chooses to celebrate their big day, Eventastic believes in their fantasies and makes them closer to possibilities. </p>
</div>

<div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-medium">
     <img src="http://sliceweston.com/wp-content/uploads/2019/03/Slice-Catering-Service-5-copy.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750px">
    </div>

  <div class="container-fluid bg-3 text-center">
<div class="w3-col m6 w3-padding-64">
      <h1 class="w3-center" style= "margin-top:-270px;">About Catering</h1><br>
      <h5 class="w3-center" style= "margin-top:-50px;">Tradition since 1889</h5>
      <p class="w3-large">Food is one of the important decisions of wedding or any other event preparations. For each event, it takes lots of discussions between the family members to finally select a menu that has favorites of every generation. Food is an important factor why your event will be rated as a great one. Back then the taste was the only quality factor associated with food, whereas now presentation has held equal standing. A great food presented in a great possible manner is something for which only experts can be depended upon. And, So Evento brings the Chefs from top-notch restaurants of Pakistan to serve a variety of cuisines available in our menu to your guests.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Our specialty food suggests traditional Pakistani, Chinese, Japanese and Italian cuisines which sums up almost every exclusive food idea that you may have on your mind. Evento will provide you with quality food catering services which in mouth-watering dishes, served elegantly in a stylish entrée. </p>
    </div>
  </div>
 </div>
  <hr>
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-medium">
     <img src="https://www.capitalfm.co.ke/lifestyle/files/2017/08/wedding-reception-3.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

  <div class="container-fluid bg-3 text-center">
<div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style= "margin-top:-200px;">WEDDING PLANNER</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">It is not about great photography, neither about being in the news highlights or receiving maximum wows from the guests attending the event. In fact, for two people, this is the day and this has to be the day which a couple will remember for the rest of their life. Traditional or modern,in anyway a couple chooses to celebrate their big day, Evento believes in their fantasies and makes them closer to possibilities.
In our 10 years expedition of event planning, Evento has managed to bring together wedding ceremonies so magnificent, that those moments still.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Eventastic is one of the few event wedding planners of Pakistan, offering a variety of wedding event themes. For traditional mehndi, revels of Barat and Valima, our doors are opened for you with unique ideas and high team spirits in Karachi, Lahore and Islamabad.</p>
    </div>
  </div> 
</div> <hr>
   <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-medium">
     <img src="https://cf5.s3.souqcdn.com/item/2018/09/27/38/91/20/35/item_XL_38912035_151617668.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>
  <div class="container-fluid bg-3 text-center">
<div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style= "margin-top:-180px;">BIRTHDAY PARTIES</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">We can arrange all your party needs from surprise big birthday bashes to small intimate affairs!

Birthday Party Themes
Disney’s Princess Birthday Theme Idea
Mickey Mouse Birthday Theme idea
Dora the Explorer Birthday Theme idea
Cars birthday Theme idea
Spiderman Birthday Theme Idea
Hello kitty Birthday Theme Idea
Minnie Mouse Birthday Theme Idea
Jungle Book Theme Animal Birthday Idea
Your own Custom Made Birthday Ideas
</p>
      
    </div>
  </div> </div> <hr>
   <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-medium">
     <img src="https://i0.wp.com/www.evolve-events.com/wp-content/uploads/2016/12/Corporate-Events-by-Evolve-Events-1.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>
   <div class="container-fluid bg-3 text-center">
<div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style= "margin-top:-200px;">CORPORATE EVENT PLANNING</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">If a new launch or a big milestone is ahead of your business, let us take the opportunity to tell you that Evento is the most dependable corporate event planners for multinational businesses. After managing electrifying events like concerts, brand launchings and annual dinners, our pool of resources may attend to need of branding, marketing and promotion of your next big thing.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">We give full liberty to the ideas of clients and do our best to execute them as smartly and realistically as possible. We strive to add value to our service, providing cohesive corporate event planning while outlining your event strategy. Handling one event at a time help Evento’s full resources towards exceptional and well focused event management.</p>
    </div>
  </div>
  </div>
  <hr>
 <?php
include('footer.php'); ?>

</body>
</html>