<?php
	include_once '../PHPscripts/myPDO.php';
	include_once '../PHPscripts/Events.php';
	include_once '../PHPscripts/Alerts.php';
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
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.10"></script>

<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit/MyFontsWebfontsKit.css">
</head>

<body>

<div id="alert_bar"><?php $displayAlert=new Alerts(); $displayAlert->getRecentAlert() ?></div>
;
    <div id="navBar">
        <nav>
            <a href="index.php" id="navGraphics" >
                <h2>Computer Science Club</h2>
                <h3>at Highline Community College</h3>
            </a>
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
    <!-- slideshow animations inspired by Adair https://codepen.io/RileyAdair/pen/ZvyYzr -->
    <div class="slideshow">
      <div class="item">
          <div class="item-image-container">
            <img class="item-image" src="../images/CS_group_cropped_x5.png"/>
          </div>
          <!-- Staggered Header Elements -->
          <div class="item-header">
            <span class="vertical-part"><b>W</b></span>
            <span class="vertical-part"><b>e</b></span>
            <span class="vertical-part"><b>l</b></span>
            <span class="vertical-part"><b>c</b></span>
            <span class="vertical-part"><b>o</b></span>
            <span class="vertical-part"><b>m</b></span>
            <span class="vertical-part"><b>e</b></span>
          </div>
          <!-- Staggered Description Elements -->
          <div class="item-description">
            <span class="vertical-part">
              <b>Git to know us</b>
            </span>
            <span class="vertical-part">
              <b>It is a first Computer Science Club for
    Computer Science Students.
    Purpose of this club is to promote CS
    department and organize CS students.
    Take CS students to different CS events and create events at Highline</b>
            </span>
          </div>
        </div>
      <!-- </div> -->
      <div class="item">
          <div class="item-image-container">
            <img class="item-image" src="../images/offset_club_meeting_x5.png"/>
          </div>
          <!-- Staggered Header Elements -->
          <div class="item-header">
            <span class="vertical-part"><b>T</b></span>
            <span class="vertical-part"><b>e</b></span>
            <span class="vertical-part"><b>c</b></span>
            <span class="vertical-part"><b>h</b></span>
          </div>
          <!-- Staggered Description Elements -->
          <div class="item-description">
            <span class="vertical-part">
              <b>All tech, all day</b>
            </span>
            <span class="vertical-part">
              <b>It is a first Computer Science Club for
    Computer Science Students.
    Purpose of this club is to promote CS
    department and organize CS students.
    Take CS students to different CS events and create events at Highline</b>
            </span>
          </div>
        </div>
      <!-- </div> -->
      <div class="item">
          <div class="item-image-container">
            <img class="item-image" src="../images/studying_cropped_x5.png"/>
          </div>
          <!-- Staggered Header Elements -->
          <div class="item-header">
            <span class="vertical-part"><b>A</b></span>
            <span class="vertical-part"><b>c</b></span>
            <span class="vertical-part"><b>a</b></span>
            <span class="vertical-part"><b>d</b></span>
            <span class="vertical-part"><b>e</b></span>
            <span class="vertical-part"><b>m</b></span>
            <span class="vertical-part"><b>i</b></span>
            <span class="vertical-part"><b>c</b></span>
            <span class="vertical-part"><b>s</b></span>
          </div>
          <!-- Staggered Description Elements -->
          <div class="item-description">
            <span class="vertical-part">
              <b>Come see what we're learning</b>
            </span>
            <span class="vertical-part">
              <b>It is a first Computer Science Club for
    Computer Science Students.
    Purpose of this club is to promote CS
    department and organize CS students.
    Take CS students to different CS events and create events at Highline</b>
          </div>
        </div>
      <!-- </div> -->
    </div>
    
    <div class="controls">
      <ul>
        <li class="control" data-index="0"></li>
        <li class="control" data-index="1"></li>
        <li class="control" data-index="2"></li>
      </ul>
    </div>
<div class="pages">
<div class="intro-container">
    <span class="intro">
</span> 
</div>
<section class="highlights">
    <?php
        $upcomingEvtDb= new Events();
      $upcomingEvtDb->getUpcomingEvents();
        $pastEvtDb= new Events();
      $pastEvtDb->getPastEvents();
    ?>
  </section>
  </div>
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
