<!DOCTYPE html>
<html lang="en">

<head>
    <!--
            Last edited By: A. Camille Hall
            Created by: A. Camille Hall
            Date: 02.17.2019
            Filename: signup.php */

                Signup page for Highline CC Computer Science Club


                -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join the Computer Science Club</title>
    

    <link href="../css/index.css" rel="stylesheet" />
    <link href="../css/contact.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script src="../js/index.js" defer></script>
    <link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit/MyFontsWebfontsKit.css">
    <link href="https://fonts.googleapis.com/css?family=Dr+Sugiyama" rel="stylesheet">
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
                        <label>Class</label>
                        <p>
                                <input name="group1" type="radio" checked />
                                <span>Freshman</span>
                        </p>
                        <p>
                                <input name="group1" type="radio" />
                                <span>Sophmore</span>

                        </p>
                        <p>
                                <input name="group1" type="radio" />
                                <span>Junior</span>

                        </p>
                        <p>
                                <input name="group1" type="radio" />
                                <span>Senior</span>

                        </p>
                    </div>
                    <div class="formRow">
                        <label for="comments">Additional notes</label>
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
<img src="../images/alex-knight-199368-unsplash.jpg" alt="technology image">
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
