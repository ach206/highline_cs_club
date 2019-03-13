<?php
	include_once '../PHPscripts/myPDO.php';
	include_once '../PHPscripts/Events.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
            Last edited By: A. Camille Hall
            Created by: A. Camille Hall
            Date: 02.16.2019
            Filename: index.php */

                Landing page for Highline CC Computer Science Club


                -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Highline CC Computer Science Club</title>


<link href="../css/index.css" rel="stylesheet" />
<link href="../css/about.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
<script src="../js/index.js" defer></script>
<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit/MyFontsWebfontsKit.css">
<link href="https://fonts.googleapis.com/css?family=Alegreya|Dr+Sugiyama" rel="stylesheet">
<!--
                    /**
                     * @license
                     * MyFonts Webfont Build ID 3562330, 2018-04-19T19:42:03-0400
                     *
                     * The fonts listed in this notice are subject to the End User License
                     * Agreement(s) entered into by the website owner. All other parties are
                     * explicitly restricted from using the Licensed Webfonts(s).
                     *
                     * You may obtain a valid license at the URLs below.
                     *
                     * Webfont: Code-Pro-Light-Demo by Fontfabric
                     * URL: https://www.myfonts.com/fonts/font-fabric/code-pro/light-demo/
                     * Copyright: Copyright (c) 2010 by Svetoslav Simov. All rights reserved.
                     * Licensed pageviews: Unlimited
                     *
                     *
                     * License: https://www.myfonts.com/viewlicense?type=web&buildid=3562330
                     *
                     * © 2018 MyFonts Inc
                    */

                    -->
<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit/MyFontsWebfontsKit.css">
</head>

<body>
    <div id="navBar">
        <nav>
            <div id="navGraphics">
                <h2>Computer Science Club</h2>
                <h3>at Highline Community College</h3>
                <div id="logoBars">
                    <div class="dkblue">
                        <!--dkblue-->
                    </div> <!-- insert lime blue dkblue logo underlines -->
                    <div class="lime">
                        <!--lime-->
                    </div> <!-- insert lime blue dkblue logo underlines -->
                    <div class="blue">
                        <!--blue-->
                    </div> <!-- insert lime blue dkblue logo underlines -->
                </div>
            </div>
            <div id="navLinks">

                <a href="javascript:void(0);" class="navIcon">
                    <i id="navIcon" class="fa fa-bars fa-2x"></i>
                </a>
                  <a href="index.php" class="menuLinks">Home</a>
                <a href="about.php" class="menuLinks">About</a>
                <a href="getInvolved.php" class="menuLinks">Get Involved</a>
                <a href="signup.php" class="menuLinks">Sign Up</a>
                <a href="faq.php" class="menuLinks">FAQ</a>
                <a href="admin.php" class="menuLinks">Admin</a>
                <a href="contactUs.php" class="menuLinks">Contact</a>
            </div>
        </nav>
    </div>
        <header>

        </header>
            <div class="slideContainer">
                <div class="slideImg fade">
<img src="../images\alex-knight-199368-unsplash.jpg" alt=" kids playing in Mogadishu CS Cluba">
                    
                </div>
                <div class="slideImg fade">
<img src="../images\andres-prieto-molina-139462-unsplash.jpg">
            
                </div>
                <div class="slideImg fade">
<img src="../images\jaz-king-221367-unsplash.jpg">
            
                </div>
                <div class="slideImg fade">
<img src="../images\kari-shea-226153-unsplash.jpg">
            
                </div>
                <div class="slideImg fade">
<img src="../images\randall-bruder-136626-unsplash.jpg">
            
                </div>
               <a class="prev"> &#10094; </a>
               <a class="next"> &#10095; </a>
            <hr>
            </div><!--  close slide container -->
            <div class="slideDials">
                <span class="dial"></span>
                <span class="dial"></span>
                <span class="dial"></span>
                <span class="dial"></span>
                <span class="dial"></span>
            </div>

        <section class="intro">
<p>It is a first Computer Science Club for
    Computer Science Students.
    Purpose of this club is to promote CS
    department and organize CS students.
    Take CS students to different CS events and create events at Highline</p>
        </section>

<?php
    $upcomingEvtDb= new Events();
	$upcomingEvtDb->getUpcomingEvents();
    $pastEvtDb= new Events();
	$pastEvtDb->getPastEvents();
?>
        <div class="footer">
            <footer>
                <div class="footerItem fItem1">
                    Highline CC Computer Science Club &trade;
                    <address>2400 S 240th St, Des Moines, WA 98198</address>
                </div>
                <div class="footerItem fItem2">

    <a href="https://www.facebook.com/Highline-College-Cs-Cis-154892907866999/">
    <i class="fa fa-facebook-square fa-2x"></i>
    </a>
  
    <i class="fa fa-twitter-square fa-2x"></i>
                </div>
            </footer>
        </div>
    </body>
</html>
