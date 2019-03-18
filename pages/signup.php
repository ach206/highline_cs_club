<?php
	include_once '../PHPscripts/myPDO.php';
	include_once '../PHPscripts/Subscriptions.php';
?>

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
<?php
$form = <<<FORMBLCK
            <form id="contactForm" action="" method="POST" enctype="multipart/form-data">
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
                        <label>Times of Availability</label>
                        <select name="available_times" id="available_times">
                            <option value="morning">Mornings 8AM-12PM</option>
                            <option value="afternoon">Afternoons 12pm-4PM</option>
                            <option value="evening">Evening 4PM-8PM</option>
                        </select>
                    </div>
                        <label>Days of Availability</label>
                        <select name="available_days" id="available_days">
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                           <option value="Saturday">Saturday</option>
                        </select>
                    </div>

                    <div class="formRow">
                        <label for="comments">Additional notes</label>
                        <textarea name="custComment" id="comments" rows="5"></textarea>
                    </div>
                    <div class="formRow">
                        <label for="leadership">Would you like to be considered for club leadership positions?
                            </label>
                            <input name="leadership" id="leadership" type="checkbox" class="filled-in" checked>
                    </div>
                    <div class="formRow">
                        <label for="subscribe">Subscribe to newsletter
                            </label>
                            <input name="subscribe" id="subscribe" type="checkbox"  class="filled-in" checked>
                    </div>
                    <div class="formRow">
                        <input type="submit" name="submit" class="subButton" value="Send" />
                        <input type="reset" class="resButton" value="Reset" />
                    </div>

                </fieldset>
            </form>

FORMBLCK;
    if(isset($_POST['submit'])){
        $name = isset($_POST['custName']) ? $_POST['custName'] : '';
        $email = isset($_POST['custEmail']) ? $_POST['custEmail'] : '';
        $prefTime = isset($_POST['available_times']) ? $_POST['available_times'] : '';
        $prefDay = isset($_POST['available_days']) ? $_POST['available_days'] : '';
        $notes = $_POST['custComment'];
        $leadership = 1;
        $subscribe = 1;
        $id = null;
        $timestamp = null;
        $uploaderrors= array();
            if(empty($name)){
            $uploaderrors[]="<div class='errMsg'><p style='color:#6cc644;'>Error: Please be sure to include name</p></div><br/>";
            }
            if(empty($email)){
            $uploaderrors[]="<div class='errMsg'><p style='color:#6cc644;'>Error: Please be sure to include email</p></div><br/>";
            }
            if(isset($_POST['subscribe'])){
                $subscribe = 1;
            } else {
                $subscribe = 0;
            }
            if(isset($_POST['leadership'])){
                $leadership = 1;
            } else {
                $leadership = 0;
            }
            if(empty($uploaderrors)){
                // echo 'Your name is ' . $name .' ' . $email . ''. $prefTime .' ' . $prefDay. ''. $notes .' ' . $leadership . '' . $subscribe;

            $myPDO= new Subscriptions();
            $myPDO->sendSub(
        $name, 
        $email, 
        $prefTime, 
        $prefDay, 
        $notes, 
        $leadership, 
        $subscribe);
            } else {
                foreach ($uploaderrors as $key => $value) {
                    echo "<div class='errMsg'><p style='color:#6cc644;'>Attention: $value</p></div><br/>";
                }
                print $form;
            }
        } else {
                print $form;
        }
?>
<!-- 
            <form id="contactForm" action="submit" method="post">
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
                        <label>Times of Availability</label>
                        <select name="available_times" id="available_times">
                            <option value="morning">Mornings 8AM-12PM</option>
                            <option value="afternoon">Afternoons 12pm-4PM</option>
                            <option value="evening">Evening 4PM-8PM</option>
                        </select>
                    </div>
                        <label>Days of Availability</label>
                        <select name="available_days" id="available_days">
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                           <option value="Saturday">Saturday</option>
                        </select>
                    </div>

                    <div class="formRow">
                        <label for="comments">Additional notes</label>
                        <textarea name="custComment" id="comments" rows="5"></textarea>
                    </div>
                    <div class="formRow">
                        <label for="subscribe">Would you like to be considered for club leadership positions?
                            </label>
                            <input name="subscribe" id="subscribe" type="checkbox" required="required" class="filled-in" checked="checked">
                    </div>
                    <div class="formRow">
                        <label for="subscribe">Subscribe to newsletter
                            </label>
                            <input name="subscribe" id="subscribe" type="checkbox" required="required" class="filled-in" checked="checked">
                    </div>
                    <div class="formRow">
                        <button type="submit" class="subButton">Send</button>
                        <button type="reset" class="resButton">Clear</button>
                    </div>

                </fieldset>
            </form> -->
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
