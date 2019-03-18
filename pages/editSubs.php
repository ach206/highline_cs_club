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
            Date: 03.04.2019
            Filename: editSubs.php */

                Admin welcome page for Highline CC Computer Science Club


                -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Subscriber</title>


    <link href="../css/materialize.css" rel="stylesheet" />
    <link href="../css/index.css" rel="stylesheet" />
    <link href="../css/about.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script src="../js/index.js" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div id="alert_bar">
            <p class="announcement-description">Admin Portal</p>
</div>

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
    <?php
session_start();

if(isset($_SESSION['timer'])){
	
	if((time() - $_SESSION['timer'])> 44000){
		header("Location: logout.php");
	}else{
		$_SESSION['timer'] = time();
	}
}
//in real life this would be coming from db.
$username = "admin";
$password = "password";
if(isset($_SESSION['username'])){
	//if the session has already started and set.
	display();
	//print_r($_SESSION);
}else{
	if($username == $_POST['username'] && 
		$password == $_POST['userPw']){
		$_SESSION['username'] = $username;
		$_SESSION['userPw'] = $password;
		$_SESSION['admin'] = "Yes";
		$_SESSION['Employee'] = "No";
		$_SESSION['timer'] = time();
		display();
	}else{
		echo "<script>alert('username and password is incorrect')</script>";
		//header("Location : admin.php");
		echo "<script>location.href ='admin.php'</script>";
}

}

function display(){
	
	echo time() - $_SESSION['timer']."<br>";
    echo "Welcome ". $_SESSION['username']."</br>";
	echo "<a href='welcome.php'>Admin Home</a></br>";
    echo "<a href='allSubs.php'>See all subscribers</a></br>";
    echo "<a href='editSubs.php'>Add new subscriber</a></br>";
	echo "<a href='logout.php'><input type =button name =logout value=Logout></a>";
	
}

?>
<?php
$form = <<<FORMBLCK
            <form id="addSubsForm" action="" method="POST" enctype="multipart/form-data">
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
                        <label for="comments">Additional notes</label>
                        <textarea name="custComment" id="comments" rows="5"></textarea>
                    </div>
                    <div class="formRow">
                        <label for="leadership">Sign this person up for club leadership positions?
                            </label>
                            <input name="leadership" id="leadership" type="checkbox" class="filled-in" checked>
                    </div>
                    <div class="formRow">
                        <label for="subscribe">Does this subscriber want to enroll onto the newsletter?
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
        $prefTime = '';
        $prefDay = '';
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
    <script src="../js/materialize.js"></script>

</body>

</html>