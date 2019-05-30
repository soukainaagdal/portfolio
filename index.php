<?php
    include "config.php";
    include 'dash/Admin/db.php';
require 'dash/Admin/session.php';
Session::start();
$select = $db->query('SELECT id_img, URL, image FROM projet');
$items = $select->fetchAll();
$first_order = 2;
$seconde_order = 1;

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title><?php echo $lang['title'];?> </title>
<meta name="description" content="OnePage Resume Portfolio">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portfolio SOUKAINA AGDAL">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,youcode,portfolio,2019">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
<!--font-family: 'Metrophobic', serif;-->
<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic' rel='stylesheet' type='text/css'> 
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">
<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>
<!--wrapper start-->
<div class="wrapper noGap" id="wrapper">

<!--Header start -->
<header>
  	<!--menu start-->
    <div class="menu">
    <a href="#" class="nav-icon" id="nav-show"><i class="fa fa-bars"></i></a>
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
              	<!--<div class="logo">logo</div> -->
                <div class="navArea"><a href="#" class="closeMenu"><i class="fa fa-times"></i></a>
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     <!-- <a class="navbar-brand" href="#">Menu</a>  --></div>
                    <!-- <div class="navbar-collapse collapse"> -->
                      <ul class="nav navbar-nav">
                        <li class="menuItem active"><a href="#wrapper"><?php echo $lang['Home'];?> </a></li>
                        <li class="menuItem"><a href="#aboutus"><?php echo $lang['About Me'];?></a></li>
                        <li class="menuItem"><a href="#skillset"><?php echo $lang['Skills'];?></a></li>
                        <li class="menuItem"><a href="#projects"><?php echo $lang['Portfolio'];?></a></li>
                        <li class="menuItem"><a href="#message"><?php echo $lang['Contact'];?></a></li>
                        <li class="menuItem"><a href="dash/login.php"><?php echo $lang['login'];?></a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <!--menu end--> 
    <!--banner start-->
    <div class="banner row" id="banner">
    <div class="bannerText">
        <h1><?php echo $lang['disc'];?></h1>
        <h3><?php echo $lang['title2'];?> </h3>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
        <!--background slide show start-->
        <div class="slide"> 
          <img src="images/header-image/image01.jpg" alt="image01"> </div>
        <div class="slide"> 
          <img src="images/header-image/image02.jpg" alt="image01"> </div>
        <!--background slide show end--> 
      </div>
    </div>
    <!--banner end--> 
    
  </header>
  <!--Header end -->
  
 <!--about us start-->
  <section class="aboutus" id="aboutus">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
      	<div class="heading">
        <h2><?php echo $lang['About Me'];?></h2>
        <h3><?php echo $lang['disc2'];?></h3>        
      </div>
      </div> 
       </div> 
      <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="images/jhon-img.png" width="50%" height="60%" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
        	
            <p> <?php echo $lang['moi'];?></p>
             <p> <?php echo $lang['moi2'];?></p>
 <p> <?php echo $lang['moi3'];?></p>

        </div>
      	
      </div>     
    </div>    
  </section>
  <!--about us end--> 
  <!--Skillset start -->
  <section id="skillset" class="skillset">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
               <div class="heading">
                <h2><?php echo $lang['Skills'];?> </h2>
                <h3><?php echo $lang['disc3'];?></h3>        
              </div>
            </div>
            <div class="col-md-12">
            	<div class="col-md-6 col-sm-12 media">
                	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius
mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. cillum dolore eu fugiat nulla pariatur. olore magna aliqua. Ut enim ad minim veniam, quis noss nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            	<div class="col-md-6 col-sm-12">                
                <div class="skillbar clearfix " data-percent="70%">
                    <div class="skillbar-title"><span>html</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="65%">
                    <div class="skillbar-title"><span>css</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="60%">
                    <div class="skillbar-title"><span>JavaScript</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="40%">
                    <div class="skillbar-title"><span>SQl</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->  
                  <div class="skillbar clearfix " data-percent="50%">
                    <div class="skillbar-title"><span>Bootstrap</span></div>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->               
                </div>
            </div>
        </div>
    </div>
  </div>
  </section>
  <!--Skillset end -->
  
  
  
  
 
  <!--portfolio start-->
  <div class="section" id="projects">
      <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

           
         <h1 class="title-s"><?php echo $lang['Portfolio'] ;?></h1> 
            <div class="line-mf"></div>
          
        </div>
      </div>
     
      <div class="row">
         <?php foreach($items as $item):?>
        <div class="col-md-4">
          <div class="work-box">
            
              <div class="work-img">
                <a href="<?=$item['URL']; ?>" target="_blank"> <img src="images/projects/thumb-images/<?=$item['image'];?>" alt="" class="img-fluid"></a>
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                   
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
         <?php endforeach;?>
 </div>
  </div>
  </section>
    </div>
  <!--portfolio end-->   
 
  
  <!--contact start-->

  <section class="contactDetails">
    <div class="container"> 
    <div class="heading">
        <h2><?php echo $lang['h1'];?></h2>
        <h3><?php echo $lang['h2'];?></h3>       
      </div>
      <!--contact form start-->
      <div class="row media">      	 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 conForm text-center">
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" placeholder="Your name" >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 noMarr" placeholder="<?php echo $lang['email'];?>" >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-8 col-lg-8" placeholder="<?php echo $lang['name'];?>"></textarea>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="submit" id="submit" name="send" class="submitBnt" value="<?php echo $lang['message'];?>"></div>
          <div id="simple-msg"></div>
        </form>
      </div>
      </div>
      <!--contact form end--> 
    </div>
  </section>  
  <!--contact end--> 
  
  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <ul>
        <li><a href="https://twitter.com/soukaina_agdal" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
       
        <li><a href="https://www.linkedin.com/in/soukaina-agdal-839b74173/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <li><a href="https://github.com/soukainaagdal" target="_blank"><i class="fa fa-github fa-2x"></i></a></li>
        
      </ul>
      <div id="langue" class="text-center" style="margin-bottom: 53px;"><a href="index.php?lang=en"><img src="languages/eng.jpg" whidth="18px" height="15px" > </a>|<a href="index.php?lang=fr"><img src="languages/france.png" whidth="18px" height="15px"></a></div>
    </div>
    
  
    
  </section>
 
  <!--footer end-->     
  </div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script type="text/javascript" src="js/stickUp.js"></script> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'skillset',
		  3: 'experience',
		  4: 'education',
		  5: 'ourwork',
		  6: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
	

});
</script>
<script>
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>  

<!--for portfolio jquery--> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>


<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.mousewheel.js"></script> 
<script defer src="js/slideroption.js"></script> 

<!--for theme custom jquery--> 
<script src="js/custom.js"></script>

</body>
</html>