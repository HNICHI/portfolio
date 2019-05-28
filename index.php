<?php
include"lang.php";
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML, CSS, php,JavaScript, beautiful portfolio for beginner ">  <!-- Define keywords for search engines -->
  <meta name="description" content="Portfolio, beautiful portfolio for beginner">   <!-- Define a description of your web page -->
  <meta name="author" content="HNICHI Bouchra">  <!--  Define the author of a page -->
  <!-- <meta http-equiv="refresh" content="60">  --><!-- Refresh document every 30 seconds -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0"/> <!-- make your website look good on all devices-->
  <link rel="icon" href="img/logo/birchland.png" type="image/png">

  <title>Portfolio HNICHI Bouchra</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
  <link rel='stylesheet' href='https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://tympanus.net/Tutorials/CircleHoverEffects/css/common.css'>
  <link rel='stylesheet' href='https://tympanus.net/Tutorials/CircleHoverEffects/css/style.css'>
  <link rel='stylesheet' href='https://reset5.googlecode.com/hg/reset.min.css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Source+Sans+Pro:400" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--   <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
 -->  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Indie+Flower'>
  <link rel="stylesheet" href="style.css">

  
</head>

<body onload="myFunction()" style="margin:0;" id="body">

<div id="loader">

 <div class='container2'>
  <div class='loader'>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--text'></div> 
  </div>
</div>
</div>

<div style="display:none;" id="myLoad">

<!-- <div class="toTop">
<button onclick="topFunction()" id="myBtn" title="Go to top">
	<i class="fa fa-angle-double-up"></i>
</button>
</div>
 -->
	<!-- Menu -->
  
  	<section id="welcome">
  		<div class="skewed-bg">
        <div class="lang">
           <a href="http://localhost/me/index.php?lang=en"><img src="..\Me\language\eng.png" width="40px" height="20px"></a>| <a href="http://localhost/me/index.php?lang=fr"><img src="..\Me\language\fr.png" width="28px" height="20px"></a>
        </div>


  			<div class="content">
  				 <div id="mySidenav" class="sidenav">
              <ul class="navbar">
              <li class="navchild">
                <a href="#about">
                <p class="hidden"><?php echo $lang['About Me'] ?></p>
                <i class="fas fa-user icone"></i>
              </li>
              </a>
              <li class="navchild">
                <a href="#TL">
              <p class=hidden><?php echo $lang['Education'] ?></p>  
              <i class="fas fa-book-reader"></i>
              </li>
              </a>
               <li class="navchild">
                <a href="#SKILLS">
              <p class="hidden"><?php echo $lang['Skills'] ?></p>  
                <i class="fa fa-trophy" style="font-size:24px"></i>
                </a>
              </li> 
              <li class="navchild">
                <a href="#projects">
              <p class="hidden"><?php echo $lang['Projects'] ?></p>  
               <i class="fa fa-thumbs-o-up" style="font-size:24px"></i>
               </a>
              </li> 
              <li class="navchild">
                <a href="#Contact">
              <p class="hidden"><?php echo $lang['Contact'] ?></p>  
              <i class="fas fa-phone"></i>
              </a>
              </li>
            </ul> 
            
  				</div> 
   
  				<div class="welcome">
  					<i class="logo fade-in one"></i>
  					<h1 class="fade-in two"><?php echo $lang['Hello'] ?> <strong><?php echo $lang['World'] ?></strong></h1>
  					<p class="fade-in three"><?php echo $lang['I am'] ?> <strong>Bouchra HNICHI</strong>.</br>
  						<?php echo $lang['A'] ?> <strong> <?php echo $lang['Web Developer'] ?></strong> </br><?php echo $lang['who loves'] ?>
  						<span class="rw-words rw-words-1"><span><?php echo $lang['tech.'] ?></span>
  						<span><?php echo $lang['web development.'] ?></span>
  						<span><?php echo $lang['social media.'] ?></span>
  						<span><?php echo $lang['photography.'] ?></span>
  						<span><?php echo $lang['hiking.'] ?></span>
  						<span><?php echo $lang['basketball.'] ?></span>
  					  </span>
            </p>

            <p><a class="button fade-in four"><?php echo $lang['Who I AM'] ?></a></p>
            <div class="popup">
             <span> 
              <video id='vid' controls>
                    <source src="HNICHI Bouchra.mp4" type="video/mp4">
              </video>
            </span>
            </div>
            <div class="close close-container">
              <div class="leftright"></div>
              <div class="rightleft"></div>
            </div>  
          <div class="scroll-down clear" ><a href="#about"><i class="fa fa-angle-double-down animated infinite bounce"></i></a></div> 
                      
	</section>



<!-- ABOUT Me -->

	<section id="about">
  	  <div class="bg-image"><img src="img/Mine/Moi.jpg" width="200PX" alt="it's Me Buchou" class="center"></div>

  		<div class="holder" id="scrl1">
  			  <div class="title scrollflow -slide-top -opacity"><h2><?php echo $lang['About Me'] ?></h2></div>
  			       <div id="tabs-container">
            				<ul class="tabs-menu title scrollflow -slide-top -opacity">
              					<li class="current"> <a href="#scrl1"  onclick = "y()"> <?php echo $lang['Bio'] ?> </a></li>
              					<li><a href="#scrl1"onclick = "x()"><?php echo $lang['PERSONAL-INFORMATION'] ?></a></li>
            				</ul>

  				<div class="tab">

  					<aside class="tab-content scrollflow -slide-right -opacity" id="bio">
    						<p><?php echo $lang['Hello, my name is'] ?> <strong>HNICHI Bouchra</strong>.</br>
    							<?php echo $lang['I’m'] ?><strong> <?php echo $lang['working'] ?> </strong><?php echo $lang['strong team spirit'] ?> <strong> <?php echo $lang['outgoing'] ?> </strong></p>

                         <div id="block">

                        <p><blockquote><?php echo $lang['solving'] ?></blockquote>
                        <blockquote> <?php echo $lang['career'] ?></blockquote></p> 

                        <div class="links">
                          <a download href="CV.pdf" class="button"><i class="fa fa-download"></i><?php echo $lang['Download Resume'] ?> </a>
    					           <a  href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsvCflsJScDpPnhmprVRddQLtdTfSnpzqHxZMbMzcdsNQNNpNGZjMXfMPGHttXgzXqKMQBGq"  class="button"><i class="fa fa-paper-plane"></i><?php echo $lang['Hire Me'] ?> </a>
  				 
  							          </div>
                        </div>
  						
  				  </aside>
  		   </div>
        
  				<aside id="personal tab-content" >
  					<div class="row" id="Personal">
  					
  			   <ul>

  			   <li><span><?php echo $lang['Name'] ?> :</span>   Hnichi Bouchra</li>
  			   <li><span> Age :</span>    23 Years </li>
  			   <li><span> <?php echo $lang['Phone'] ?></span>    +212(06)00 70 12 24</li>
  			   <li> <span>Email :</span>    hnichibouchra@gmail.com</li>
  			   <li> <span><?php echo $lang['Address'] ?></span>    50,Rue Ibrahim Roudani Qu Takkadom-Youssoufia</li>

  			   </ul>

           <!-- Social links section start -->
                  
                        <div class="social-section">
                          <div class="social-link-warp">
                            <div class="social-links">
                              <a href="https://gitlab.com/Buchou?nav_source=navbar"> <i class="fab fa-gitlab"></i></a>
                              <a href="https://www.linkedin.com/in/bouchra-hnichi-a9496a168/"><i class="fab fa-linkedin-in"></i></a>
                              <a href="https://www.instagram.com/buchou_malek_nour/?hl=fr"><i class="fab fa-instagram"></i></a>
                              <a href="https://www.facebook.com/buchou.maleknour"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <h2 class=""><?php echo $lang['Social'] ?></h2>
                          </div>
                        </div>
                  
                  <!-- Social links section end -->

          <div class="links" id="links2">
             <a download href="CV.pdf" class="button"><i class="fa fa-download"></i> <?php echo $lang['Download Resume'] ?></a>
              <a  href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsvCflsJScDpPnhmprVRddQLtdTfSnpzqHxZMbMzcdsNQNNpNGZjMXfMPGHttXgzXqKMQBGq"  class="button"><i class="fa fa-paper-plane"></i> <?php echo $lang['Hire Me'] ?></a>
           
               </div>
  		
  	       </div>
         </aside>
   </div>

    </div>
 
</section>


<!-- Education -->


 <?php include 'Education.php';?>


<!-- Skills -->

  <?php include 'Skills.php';?>

  <!-- Projects -->
<section id="projects">
  <div class="head">
  <h1 class="headh1">Projects</h1>
</div>
  
  <iframe class="iframscroll"  src="http://localhost/Me/projects.php"  scrolling="yes">

</iframe>
</section>
<!-- Contact -->

 <?php include 'form.php';?>


<!-- Footer -->
<footer class="Foot">
    <span>Copyright ©2019 <b>HNICHI Bouchra.</b><?php echo $lang['All rights reserved'] ?></span>
    <span class="pull-right">
			<a href="#welcome">
				<i class="fa fa-arrow-circle-o-up"></i> <?php echo $lang['Back to Top'] ?>
			</a>
		</span>

		<div class="social">
			<a href="https://github.com/HNICHI" target="_blank"><i class="fa fa-github"></i></a>
			<a href="https://codepen.io/Buchou/#" target="_blank"><i class="fa fa-codepen"></i></a>
			<a href="https://www.linkedin.com/in/bouchra-hnichi-a9496a168/" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="https://www.facebook.com/buchou.maleknour" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href=https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRpclTVwVHTHCZcpQKZJqstgPVBjfcllWhkqfhRJZCgkqwTKmlNTzKwQRGQqmJcPCkJtmMq target="_blank"><i class="fas fa-at"></i></a>
			
		</div>
</footer>

 </div>

<!-- lOADING -->



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script  src="script.js"></script>


</body>