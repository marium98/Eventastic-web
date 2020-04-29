<!DOCTYPE html>
<html>
  <title></title>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
body {
  font-family: Verdana, sans-serif;

}
.margin {margin-bottom: 0px;


  } 
  .bg-1 { 
    
    color: black;
    background-image: url("https://www.architecturalrecord.com/ext/resources/news/2018/03-March/Burning-Man/No-Spectators-Burning-Man-01.jpg?1522424198");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
   height: 500%;
   text-align: center;
 
  }
  .container-fluid {
    padding-top: 250px;
    padding-top: 250px;
   
  }

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 12px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}
.column {
  float: right;
  width: 24%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
  <?php include("header.php"); ?>
 
 <div class="container-fluid bg-1 text-center">
  <h3 class="margin"></h3>
   <h1 style="font-weight: bolder; font-size: 40px;">GALLERY</h1>
</div>
  
<br><br>
 
 
 <h2 style="text-align:center; font-weight: bolder; font-size: 30px; color: red;">lets have look at fantastic events of Eventastic</h2>

<div class="row">
  <div class="column">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5EcJtbONGmiJcP1PXfG01XE8246dIXuVJ6Yb-oPJFwo4Ye8FEuA" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://image.wedmegood.com/resized/400X/uploads/member/596070/1559289235_rr.png" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://navarravenues.com.au/wp-content/uploads/2018/10/E4_9-high-tea-standard.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://thepeephouse.files.wordpress.com/2015/03/full-table-021.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://bigfday.com/blog/wp-content/uploads/2017/03/Alaap-1-and-2.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://i0.wp.com/www.bookmyballoons.in/wp-content/uploads/2018/09/10-Amazing-Things-You-Can-Do-With-Party-Balloon-Decoration-In-Bangalore-600x450.jpg?fit=600%2C450&ssl=1" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://www.kiyoh.in/wp-content/uploads/2017/03/birthday-event-organiser-chennai.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://gallery.evibe.in/decors/3728/images/results/1554905379-1549720668-IMG_5467.JPG" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="http://cumulusinc.com.au/wp-content/uploads/2012/11/Cumulus_24_09_2012_034-648x432.jpeg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://www.hiretherailwaymuseum.com/wp-content/uploads/2018/04/gallery-28.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://beowellness.ie/wp-content/uploads/2018/12/gallery32-1030x686.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="https://www.questevents.com/wp-content/uploads/2018/08/Quest-Events-Pipe-Drape-Corporate-Event-Sofitel-Chicago.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>

</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 12</div>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5EcJtbONGmiJcP1PXfG01XE8246dIXuVJ6Yb-oPJFwo4Ye8FEuA" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 12</div>
      <img src="https://image.wedmegood.com/resized/400X/uploads/member/596070/1559289235_rr.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 12</div>
      <img src="https://navarravenues.com.au/wp-content/uploads/2018/10/E4_9-high-tea-standard.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 12</div>
      <img src="https://thepeephouse.files.wordpress.com/2015/03/full-table-021.jpg" style="width:100%">
    </div>
     <div class="mySlides">
      <div class="numbertext">5 / 12</div>
      <img src="https://www.oyorooms.com/blog/wp-content/uploads/2018/03/wedding-caterer-520x400.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 12</div>
      <img src="https://i0.wp.com/www.bookmyballoons.in/wp-content/uploads/2018/09/10-Amazing-Things-You-Can-Do-With-Party-Balloon-Decoration-In-Bangalore-600x450.jpg?fit=600%2C450&ssl=1" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 12</div>
      <img src="https://www.kiyoh.in/wp-content/uploads/2017/03/birthday-event-organiser-chennai.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 12</div>
      <img src="https://gallery.evibe.in/decors/3728/images/results/1554905379-1549720668-IMG_5467.JPG" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">9 / 12</div>
      <img src="http://cumulusinc.com.au/wp-content/uploads/2012/11/Cumulus_24_09_2012_034-648x432.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">10 / 12</div>
      <img src="https://www.hiretherailwaymuseum.com/wp-content/uploads/2018/04/gallery-28.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">11 / 12</div>
      <img src="https://beowellness.ie/wp-content/uploads/2018/12/gallery32-1030x686.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">12 / 12</div>
      <img src="https://www.questevents.com/wp-content/uploads/2018/08/Quest-Events-Pipe-Drape-Corporate-Event-Sofitel-Chicago.jpg" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5EcJtbONGmiJcP1PXfG01XE8246dIXuVJ6Yb-oPJFwo4Ye8FEuA" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://image.wedmegood.com/resized/400X/uploads/member/596070/1559289235_rr.png" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://navarravenues.com.au/wp-content/uploads/2018/10/E4_9-high-tea-standard.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://thepeephouse.files.wordpress.com/2015/03/full-table-021.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.oyorooms.com/blog/wp-content/uploads/2018/03/wedding-caterer-520x400.jpg" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://i0.wp.com/www.bookmyballoons.in/wp-content/uploads/2018/09/10-Amazing-Things-You-Can-Do-With-Party-Balloon-Decoration-In-Bangalore-600x450.jpg?fit=600%2C450&ssl=1" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.kiyoh.in/wp-content/uploads/2017/03/birthday-event-organiser-chennai.jpg" style="width:100%" onclick="currentSlide(7)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://gallery.evibe.in/decors/3728/images/results/1554905379-1549720668-IMG_5467.JPG" style="width:100%" onclick="currentSlide(8)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="http://cumulusinc.com.au/wp-content/uploads/2012/11/Cumulus_24_09_2012_034-648x432.jpeg" style="width:100%" onclick="currentSlide(9)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.hiretherailwaymuseum.com/wp-content/uploads/2018/04/gallery-28.jpg" style="width:100%" onclick="currentSlide(10)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://beowellness.ie/wp-content/uploads/2018/12/gallery32-1030x686.jpg" style="width:100%" onclick="currentSlide(11)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://www.questevents.com/wp-content/uploads/2018/08/Quest-Events-Pipe-Drape-Corporate-Event-Sofitel-Chicago.jpg" style="width:100%" onclick="currentSlide(12)" alt="Northern Lights">
    </div>
  </div>
</div>
<br><br><br><hr>
<?php
  include("footer.php");
?>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

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

</body>
</html>
