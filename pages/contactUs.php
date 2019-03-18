<?php
	include_once '../PHPscripts/myPDO.php';
	include_once '../PHPscripts/Leaders.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
            Last edited By: A. Camille Hall
            Created by: A. Camille Hall
            Date: 02.17.2019
            Filename: contactUs.php */

                Contact Us page for Highline CC Computer Science Club


                -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Highline CC Computer Science Club</title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="../css/materialize.css" rel="stylesheet"  />
        <link href="../css/index.css" rel="stylesheet"  />
        <link href="../css/contact.css" rel="stylesheet"  />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        <script src="../js/index.js" defer></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- <script src="../js/materialize.min.js" defer></script> -->
  </head>
    <body>
        <div id="navBar">
            <nav>
            <div id="navGraphics">
                <h2>Computer Science Club</h2>
                <h3>at Highline Community College</h3>
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
        <div class="list-leaders">
    <?php
        $listAllLeaders= new Leaders();
      $listAllLeaders->getLeaders();

    ?>
    </div>
        <main>
            <section>
            <form id="contactForm">
                <fieldset id="custInfo">
                    <legend>Contact Information</legend>
                    <div class="formRow">
                    <label for="name">Name</label>
                    <input name="custName" id="name" type="text" required="required" placeholder="Required Field">
                    </div>
                    <div class="formRow">
                    <label for="email">E-mail</label>
                    <input name="custEmail" id="email" type="email" required="required" placeholder="Required Field">
                </div>
                    <div class="formRow">
                    <label for="phone">Telephone</label>
                    <input name="custPhone" id="phone" type="tel">
                    </div>
                    <div class="formRow">
                    <label for="comments">Write Your Message Below</label>
                    <textarea name="custComment" id="comments" rows="5"></textarea>
                </div>
                    <div class="formRow">
                    <button type="submit" class="subButton">Send</button>
                    <button type="reset" class="resButton">Clear</button>
                </div>

                </fieldset>
            </form>
        </section>
        <aside>
              <div class="googleMap">
   <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 47.388, lng: -122.304003},
          zoom: 12,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#ac2823'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ac2823'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ac2823'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#ac2823'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ac2823'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ac2823'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK2nDSUtEh1L633quA3NMW73wjJLc-TS8&callback=initMap"
    async defer></script>

            </div>
        </aside>
    </main>
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
