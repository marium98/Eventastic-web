<!DOCTYPE html>
<html>
<head>
  <title>Eventastics</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body{
	color:#474747;
	background-color:#FFFFFF;
	margin-left: 20px;
  margin:0; 
  padding:0; s
  font-size:14px; 
  line-height:1.6em;
  font-family:Verdana, Geneva, sans-serif;
}

h1,h2,h3,h4,h5,h6{
	font-family:Georgia, "Times New Roman", Times, serif;
}

*, *::before, *::after{transition:all .3s ease-in-out;box-sizing:border-box;}

/* nospace class*/
.nospace{
  margin:0; 
  padding:0; 
  list-style:none;
}

/* block class*/
.block{
  display:block;
}

/*background image */
.bg-img::after{
  color:inherit; 
  background-color:rgba(0,0,0,.55);
  display:block; 
  position:absolute; 
  top:0; 
  left:0; 
  width:100%; 
  height:100%; 
  content:""; 
  z-index:-1;
}

.bg-img{
  position:relative; 
  z-index:1;
  background-position:top center;
  color:#FFFFFF; 
  background-color:inherit; 
  background-repeat:no-repeat; 
  background-size:cover;
}


/* clear class*/
.clear{
  display:block;
}

.clear::before, .clear::after{
  display:table; 
  content:"";
}

.clear, .clear::after{
  clear:both;
}

/* h1 h2 h3 h4 h5 h6
---------------------------------------------------------------------------------*/
h1 h2 h3 h4 h5 h6{
  margin:0 0 20px 0; 
  font-size:22px; 
  line-height:normal; 
  font-weight:normal; 
  text-transform:capitalize;
   font-family:Georgia, "Times New Roman", Times, serif;
}


/* a tag
-------------------------------------------------------------------------------------------------------*/
a{
  outline:none; 
  text-decoration:none;
  color:#41C379;
}

a:active, a:focus{
  background:transparent;
}/* IE10 + 11 Bugfix - prevents grey background */

/* heading class
--------------------------------------------------------------------------------------------------------------- */
.heading{
  font-family:Georgia, "Times New Roman", Times, serif;
  margin:0 0 20px 0; 
  font-size:22px; 
  line-height:normal; 
  font-weight:normal; 
  text-transform:capitalize
}

.heading.nospace{
  margin-bottom:0;
}

/* hoc class 
------------------------------------------------------------------------------------------------------------*/
.hoc{
  display:block; 
  margin:0 auto;
}



/* Grid 
--------------------------------------------------------------------------------------------------------------- */
.one_third, .one_quarter, .three_quarter{
  display:inline-block; 
  float:left; 
  margin:0 0 0 4.21052%; 
  list-style:none;
}

.first{
  margin-left:0; 
  clear:left;
}

.one_quarter{
  width:21.8421%;
}

.one_third{
  width:30.52631%;
}

.three_quarter{
  width:73.94736%;
}

/* Header starts 
--------------------------------------------------------------------------------------------------------------- */
#header #logo a{
  color:inherit;
}

#header ul li div:hover i{
  color:#FFFFFF; 
  background-color:#41C379;
}

#header{
  padding:50px 0;
}

#header #logo *{
  margin:0; 
  padding:0; 
  line-height:1;
}

#header #logo h1{
  font-size:32px;
  display:block; 
  margin:0 0 0 100px; 
  padding:0; 
  line-height:normal; 
  font-weight:normal; 
  text-transform:capitalize;
}

#header #logo p{
  font-size:.9rem; 
  margin:0 0 0 100px;
}

#header ul{}

#header ul li{}

#header ul li div{
  position:relative; 
  min-height:45px; 
  padding:0 0 0 60px; 
  line-height:1; 
  word-wrap:break-word;
}

#header ul li div i{
  background-color:#FFFFFF;
  position:absolute; 
  top:0; 
  left:0; 
  width:45px; 
  height:45px; 
  line-height:45px; 
  font-size:16px; 
  text-align:center; 
  border-radius:50%;
}

#header ul li div span{
  display:block; 
  padding:4px 0 0 0;
}

#header ul li div strong{
  display:block; 
  margin:0 0 8px 0;
  font-size: 18px;
}

/* header starts 
--------------------------------------------------------------------------------------------------------------- */

/* navbar starts 
--------------------------------------------------------------------------------------------------------------- */
/* The navbar */
.topnav {
  margin-left: 50px;
  margin-top: :150px;
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
.topnav a.active{
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

/* Page Intro starts
--------------------------------------------------------------------------------------------------------------- */
#pageintro{
  padding:180px 0;
  color: #FFFFFF;  
  margin-left: 100px;
}

#pageintro article{
  display:block; 
  max-width:55%;
}

#pageintro .heading{
  margin-bottom:20px; 
  font-size:4rem;
}

#pageintro p:first-of-type{
  margin:0 0 20px 0; 
  text-transform:uppercase; 
  font-size:1.6rem; 
  letter-spacing:2px;
}

#pageintro p:last-of-type{
  font-size:1.2rem;
}

#pageintro footer{
  margin-top:50px;
}
/* Page Intro ends
--------------------------------------------------------------------------------------------------------------- */

/* footer and article tag
----------------------------------------------------------------------------------------------------------*/
article, footer{
  display:block; margin:0; padding:0;
}

/* btn class button
-----------------------------------------------------------------------------------------------------------------*/
.btn{
  display:inline-block; 
  padding:8px 18px 10px; 
  text-transform:uppercase; 
  border:1px solid;
}

.btn, .btn.inverse:hover{
  color:#FFFFFF; 
  background-color:#41C379; 
  border-color:#41C379;
}

.btn:hover, .btn.inverse{
  color:inherit; 
  background-color:transparent; 
  border-color:inherit;
}

/* event section 
-----------------------------------------------------------------------------------------------------------------*/
/* Rows */
.row3{
  color:#474747; 
  background-color:#FFFFFF;
}


/* Content Area
--------------------------------------------------------------------------------------------------------------- */
.container{
  padding:80px 0;
}


/* Introblocks 
-------------------------------------------------------------------------------------------------------------*/
#introblocks{
  display:block; 
  position:relative; 
  margin:-150px 0 0 100px; 
  z-index:1;
}/* 180px => 100px + container padding */

#introblocks > ul > li{
  margin-bottom:50px;
}

#introblocks > ul > li:nth-last-child(-n+3){
  margin-bottom:0;
}/* Removes bottom margin from the last line of items - margin is restored in the media queries when items stack */

#introblocks > ul > li:nth-child(3n+1){
  margin-left:0; 
  clear:left;
}/* Removes the need to add class="first" */

#introblocks figure{}

#introblocks figure figcaption{
  display:block; 
  padding:30px 0 0 0;
}

#introblocks figure figcaption > a{}

#introblocks figure figcaption .heading{
  font-size:1.2rem; 
  font-weight:700; 
  margin-bottom:0;
}

/* image
------------------------------------------------------------------------------------------------------------------------*/

/* img tag
------------------------------------------------------------------------------------*/
.fl_left, .imgl{
  float:left;
}

.fl_right, .imgr{
  float:right;
}

img{
  width:auto; 
  max-width:100%; 
  height:auto; 
  margin:0; 
  padding:0; 
  border:none; 
  line-height:normal; 
  vertical-align:middle;
}

img{
  width: 350px;
  height: 350px;
}

.imgl{
  margin:0 15px 10px 0; 
  clear:left;
}

.imgr{
  margin:0 0 10px 15px; 
  clear:right;
}

.imgover{
  display:inline-block; 
  position:relative; 
  max-width:100%;
}

.imgover::before, .imgover::after{
  display:block; 
  position:absolute; 
  content:""; 
  text-align:center; 
  opacity:0;
}

.imgover::before{
  top:0; 
  right:0; 
  bottom:0; 
  left:0;
}

.imgover::after{
  top:50%; 
  left:50%; 
  width:50px;
  height:50px; 
  line-height:50px; 
  margin:-25px 0 0 -25px; 
  font-family:"Font Awesome 5 Free"; 
  font-weight:900; 
  content:"\f06e";/* fa-eye */ 
  font-size:28px;
}

.imgover:hover::before, .imgover:hover::after{
  opacity:1;
}

.imgover:hover::before{
  background-color:rgba(0,0,0,.55);
}

.imgover, .imgover:hover::after{
  color:#41C379;
}

/* wrspper class
---------------------------------------------------------------------------*/
.wrapper{
  display:block; 
  position:relative; 
  width:100%; 
  margin:0; 
  padding:0; 
  text-align:left; 
  word-wrap:break-word;
}
/*event section end
-----------------------------------------------------------------------------------*/

/* services section
-----------------------------------------------------------------------------------*/

/* row2
-------------------------------------------------------------------------------------*/
.row2, .row2 a{}
.row2{
  color:#474747; 
  background-color:#F4F4F4;
}


/* group class
-------------------------------------------------------------------------------------*/
.group{
  display:block;
}

.group::before, .group::after{
  display:table; 
  content:"";
}

.group, .group::after{
  clear:both;
}

/* center class
-------------------------------------------------------------------------------------*/
.center{text-align:center;}

/* btms-30
-------------------------------------------------------------------------------------*/
.btmspace-30{margin-bottom:30px;}



/* services section end
 -----------------------------------------------------------------------------------*/

/* menu section start
 -----------------------------------------------------------------------------------*/
/* container class
-------------------------------------------------------------------------------------*/
/* Content Area
--------------------------------------------------------------------------------------------------------------- */
.container{padding:80px 0;}

/* Content */
.container .content{}

/* sectiontitle
-------------------------------------------------------------------------------------*/
.sectiontitle{
  display:block; 
  max-width:55%; 
  margin:0 auto 80px; 
  text-align:center;
}

.sectiontitle *{
  margin:0;
}

/* font-xs class
-------------------------------------------------------------------------------------*/
.font-xs{
  font-size:.8rem;
}

/* stats id
----------------------------------------------------------------------------*/
#stats{}

#stats > li{
  display:block; 
  float:left; 
  width:25%; 
  border:solid; 
  border-width:0 1px 0 0; 
  text-align:center;
  border-color:#D7D7D7;
}

#stats > li i{
  margin-bottom:30px; 
  font-size:5rem;
  color:rgba(0,0,0,.2);
}

#stats > li:hover i{
  color:rgba(0,0,0,.6);
}

#stats > li:last-child{
  border:none;
}

#stats > li *{
  margin:0; padding:0;
}

#stats > li p:first-of-type{
  margin-bottom:15px; 
  font-size:3rem; 
  font-weight:700; 
  line-height:1;
}

#stats > li p:last-of-type{
  text-transform:uppercase;
}

/* menu section end
 -----------------------------------------------------------------------------------*/
/* about the team section
 -----------------------------------------------------------------------------------*/

/*one-half class
-----------------------------------------------------------------------------------*/
.one_half{
  display:inline-block; 
  float:left; 
  margin:0 0 0 4.21052%; 
  list-style:none;
}

.one_half{
  width:47.89473%;
}

/* blockquote
------------------------------------------------------------------------------------*/
blockquote{
  display:block; 
  position:relative; 
  width:100%; 
  margin:0; 
  padding:0; 
  line-height:1.4;
  z-index:1;
}

blockquote::before{
  display:block; 
  position:absolute; 
  top:0; 
  left:0; 
  font-family:"Font Awesome 5 Free"; 
  font-weight:900; 
  font-size:60px; 
  line-height:60px; 
  content:"\f10d"; 
  z-index:-1;
}

/* coloured class
---------------------------------------------------------------------------------------*/
.coloured{
  color:#FFFFFF; 
  background:linear-gradient(90deg, #41C379, #37AE6A);
}

/* testimonials
--------------------------------------------------------------------------------*/
#testimonials{}

#testimonials article{
  text-align:center;
  width: 43.33%;
}

#testimonials article *{
  margin:0; padding:0;
}

#testimonials article img{
  margin-bottom:20px; 
  border-radius:50%;
}

#testimonials article blockquote{
  margin-bottom:20px; 
  padding:20px;
  color:#474747; 
  background-color:#FFFFFF;
}

#testimonials article blockquote::before{
  top:5px; 
  left:5px; 
  font-size:30px; 
  line-height:30px;
  color:rgba(0,0,0,.1);
}

#testimonials article .heading{
  font-size:1.4rem;
}

#testimonials article em{
  display:block; 
  margin-top:-5px; 
  font-size:.8rem; 
  font-style:normal;
}

/* about the team section end
--------------------------------------------------------------*/

/* reviews and feedback
--------------------------------------------------------------*/
.latest article time{
  color:#474747; 
  display:block; 
  position:absolute; 
  top:0; 
  left:0; 
  width:60px;
  background-color:#F4F4F4;
}
.latest article time strong{
  border-color:rgba(0,0,0,.2);
  padding:12px 0; 
  font-size:18px; 
  border-bottom:1px solid; 
  opacity:.5;
}

.latest{
  margin-bottom:80px;
  width: 83.33%
}

.latest > li:last-child{
  margin-bottom:0;
  }/* Used when elements stack in small viewports */

.latest article{
  position:relative; 
  padding:0 0 0 80px;
}

.latest article time *{
  display:block; 
  margin:0; 
  padding:0; 
  text-align:center; 
  text-transform:uppercase; 
  font-style:normal; 
  line-height:1;
}

.latest article time em{
  padding:8px 0;
}

.latest article .excerpt .meta li{
  display:inline-block; 
  font-size:.8rem;
  width: 43.33%;
}

.latest article .excerpt .meta li::after{
  margin-left:5px; 
  content:"|";
}

.latest article .excerpt .meta li:last-child::after{
  margin:0; 
  content:"";
}

.latest article .excerpt .heading{
  margin:0; 
  font-size:1.2rem;
}

.latest article .excerpt p{
  margin-bottom:30px;
}

/* reviews and feedback end
--------------------------------------------------------------*/

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
                <a href="home.php" class = "active"><i class="fa fa-home"></i>Home</a>
                <a href="why.php"><i class="fa fa-question-circle"></i>Why Eventastics</a>
                <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-camera"></i>Gallery 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="portflio.php"><i class="fa fa-image"></i>Pictures</a>
                <a href="video.php"><i class="fa fa-video-camera"></i>Videos</a>
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
  <div id="pageintro" class="hoc clear"> 
    <article>
      <p>Where you dream and we create</p>
      <h3 class="heading">The Event Planner</h3>
      <p>As the premier event planning company in Pakistan we know that it’s not “one size fits all”. Each event and client is unique and we believe our services should be as well.</p>
      <footer style="width:150px;"><a class="btn" href="why.php">Read More</a></footer>
    </article>
  </div>
</div>
</div>
<!--navbar ends-->

<!--event desription-->
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <section id="introblocks">
      <ul class="nospace group">
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="https://i.weddingomania.com/beaurtiful-and-fun-backyard-engagement-party-to-get-inspired-15.png" alt=""></a>
            <figcaption>
              <h6 class="heading">ENGAGEMENT PARTIES</h6>
              <p>Plan for your Big day & Show off that important ring! We will help you:Create the guest list!Customized Invitation Cards!Decide on a venue!Plan the menu!Engagement Cake! Set the perfect theme</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="https://i.pinimg.com/originals/27/dc/d2/27dcd2ff47aa5b95bb812a79cd3e405b.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">BIRTHDAY PARTIES</h6>
              <p>We can arrange all your party needs from surprise big birthday bashes to small intimate affairs!Birthday Party Themes Disney’s Princess Birthday Theme Idea Mickey Mouse Birthday Theme idea Dora the Explorer Birthday Theme</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="pictures.php"><img src="https://s7.orientaltrading.com/is/image/OrientalTrading/wedding-decorations-021819-1x1?$1x1main$&$NOWA$" alt=""></a>
            <figcaption>
              <h6 class="heading">WEDDING CEREMONIES</h6>
              <p>Eventastics is one of the few event wedding planners of Pakistan, offering a variety of wedding event themes. For traditional mehndi, revels of Barat and Valima, our doors are opened for you with unique ideas</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="pictures.php"><img src="https://m.media-amazon.com/images/I/71gaEzcIzhL._SR500,500_.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">FASHION SHOW PLANNER</h6>
              <p>We will help you:Back Drop Screen Designs Entrance Screens & backdrops Designs Complete Wooden & Crystal Glass Event Stage & Ramp Special VVVIP Guests Sitting lounges
Perfect Sound System Setup Complete Floral Arrangements Lighting</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="pictures.php"><img src="https://dl1.cbsistatic.com/i/r/2018/08/09/b6ca69f8-f123-408c-9b1f-ea3f9cf1fb17/resize/620xauto/8787947d1d00135d3f2ed512e56bee72/concert-crowd.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">LIVE CONCERTS</h6>
              <p>Nax Event Management has created some of the world’s leading cultural and entertainment events for its clients.We have an extensive global reach of resources and experiences that can help make even the most challenging project a successful operation.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="pictures.php"><img src="https://www.corporateeventnews.com/sites/default/files/inline-images/Event%20Photo_0.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">ANNUAL DINNER</h6>
              <p>Annual Dinner is the most prestigious event in the companies’ calendar and the perfect opportunity to network with your customers and to enjoy the company of colleagues and your peers within the industry in a relaxed and luxurious environment.
</figcaption>
          </figure>
        </li>
      </ul>
    </section>
   <div class="clear"></div>
  </main>
</div>
<!--event desription ends-->


<!--services desription-->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <p class="nospace font-xs">SERVICES THAT WE OFFER</p>
      <h6 class="heading">EVERY THING YOU NEED TO KNOW</h6>
    </div>
    <ul class="nospace group center">
      <li class="one_third first">
        <article><i class="fa fa-cutlery
 fa-5x btmspace-50"></i></a>
          <h6 class="heading">CATERING SERVICE</h6>
          <p class="btmspace-30">Our menu options feature a wide range of flavors selected from around the world, You may choose from one of our pre-fixed menus or customize a menu to your taste.</p>
          <footer style= "width:150px;"><a class="btn" href="menu.php">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fa fa-free-code-camp
 fa-5x btmspace-50"></i></a><h6 class="heading">BRAND ACTIVATION</h6>
          <p class="btmspace-30">Pakistan has come across a numerous number of brand activation agencies trying their best to achieve a positive name and make their way through the hall of fame.</p>
          <footer style= "width:150px;"><a class="btn" href="services.php">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fa fa-users
 fa-5x btmspace-50"></i></a><h6 class="heading">TEAM BUILDING ACTIVITIES</h6>
          <p class="btmspace-30">Team building and motivation is the foremost constituent that a business would rely on for their continuous growth. Now you don’t have to own extra resources.</p>
          <footer style= "width:150px;"><a class="btn" href="services.php">Read More</a></footer>
        </article>
      </li>
    </ul>
  </section>
</div>
<!--eservices desription ends-->

<!--menu section-->
<div class="wrapper row3">
  <section class="hoc container clear"> 
   <div class="sectiontitle">
      <p class="nospace font-xs">Let’s start planning your event. Fill out the short form to get started right now!</p>
      <h6 class="heading">WHAT ARE YOU WAITING FOR?</h6>
    </div>
<ul id="stats" class="nospace group">
      <li><i class="fa fa-clock-o"></i>
        <p><a href="#">2000</a></p>
        <p>since</p>
      </li>
      <li><i class="fa fa-cutlery"></i>
        <p><a href="#">1000+</a></p>
        <p>menu items</p>
      </li>
      <li><i class="fa fa-map-marker"></i>
        <p><a href="#">250+</a></p>
        <p>venue</p>
      </li>
      <li><i class="fa fa-smile-o"></i>
        <p><a href="#">500+</a></p>
        <p>happy clients</p>
      </li>
    </ul>
  </section>
</div>
<!--menu section end-->

<!-- about the team section -->
<div class="wrapper coloured">
  <section id="testimonials" class="hoc container clear"> 
    <div class="sectiontitle">
      <p class="nospace font-xs">Good Words Good People</p>
      <h6 class="heading">ABOUT THE TEAM</h6>
    </div>
    <article class="one_half first"><img src="haniya.jpg" alt="">
      <blockquote>“Can we build it? Yes We Can!

This quote defines my complete success story of event management. I love the industry because every day is different. Every client has different expectations, not only pushing me but pushing my skills into new creative boundaries. I believe events are so much more than parties and conferences. Events connect people, breed innovation and build communities. Whether it is team building, a corporate party or private event our skills and team will only provide the best.”</blockquote>
      <h6 class="heading">HANIYA YOUNUS</h6>
      <em>CEO & FOUNDER</em></article>
    <article class="one_half"><img src="mari.jpg" alt="">
      <blockquote>“Nothing succeeds like success!
By the grace of the Almighty ALLAH, given Nax Event Management an exposure more than we expected in our first ever event giving us firmness at the very outset in the highly competitive arena. The needs and desires of the clients are the focal point and thus we are all set to satisfy each and every of customer with the utmost integrity.  I am confident that Nax Forum is simply the best of its kind but as we are constantly moving upward we are certainly striving for Excellence.”</blockquote>
      <h6 class="heading">MARIUM ADNAN</h6>
      <em>MANAGER</em></article>
  </section>
</div>
<!-- section end -->

<!-- reviews and feedback -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <p class="nospace font-xs">Because life is a party</p>
      <h6 class="heading">PEOPLE REVIEWS AND FEEDBACKS</h6>
    </div>
    <ul class="nospace group latest">
      <li class="one_half first">
        <article>
          <div class="excerpt">
            <ul class="nospace meta">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-tag"></i> <a href="#">Category Name</a></li>
            </ul>
            <h6 class="heading">Why not destination wedding?</h6>
            <p>Hey say marriages are built in heaven then why not built a heaven on earth by choosing a perfect destination for your dreamy wedding.A pre planned destination wedding is a unique idea involving family and friends.</p>
            <footer><a href="services.php">Read More</a></footer>
          </div>
          <time datetime="2045-04-06T08:15+00:00"><strong>06</strong> <em>Aug</em></time>
        </article>
      </li>
      <li class="one_half">
        <article>
          <div class="excerpt">
            <ul class="nospace meta">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fas fa-tag"></i> <a href="#">Category Name</a></li>
            </ul>
            <h6 class="heading">Mehndi Celebrations</h6>
            <p>There are many themes for Mehndi ceremony. Thematic Panaflex & photo booth are designed for the perfect ambiance. Flower plays the important role wether its a stage or entrance they make the event lively.</p>
            <footer><a href="services.php">Read More</a></footer>
          </div>
          <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
        </article>
      </li>
    </ul>
    <br>
    <br>
    <footer class="center"><a class="btn" href="services.php" style= "width:150px;margin-left:-80px;">View More</a></footer>
  </section>
</div>
<?php include("footer.php"); ?>
</body>