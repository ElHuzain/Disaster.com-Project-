<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

if (isset($_GET['logout'])) {
    unset($_SESSION['username']);
    unset($_SESSION['userid']);
    header("Location: ../login.php");
}

?>

<html>
<header style="background-color: white; padding:1.5vh; min-height:6.5vh;">
    <a href="./home.php">
        <h3 style="float:left;color:black;">Disaster.com</h3>
    </a>
    <div style="display:flex;float:right">
        <h5><?php echo $_SESSION['username'] ?> | <a href="./files/header.php?logout=true"> logout </a></h5>
    </div>

</header>

<div id="about" class="hidden">
    <div class="floating">
        <h4 style="display:flex;float:right"><span style="color:red;" onclick="closeAbout()">[X]</span></h4>
        <h4 style="display:flex;float:left">Project</h4><br>
        <hr>
        <h4>Team:</h4>
        <ul>
            <li>Ahmed Mohammed Huzain</li>
            <li>Mariam Moustafa Abdel moniem</li>
            <li>Nada Ahmed Abdelhafiez</li>
            <li>Samar Hany Mahrous</li>
            <li>Yousry Ezzat Mohamed</li>
        </ul>
        <h4>Instructor: Dr. Prof. Fatma Hammam</h4>
    </div>
</div>

<div id="team" class="hidden">
    <div class="floating">
        <h4 style="display:flex;float:right"><span style="color:red;" onclick="closeTeam()">[X]</span></h4>
        <h4 style="display:flex;float:left">Disaster.com:</h4><br>
        <hr>
        <p>"Watch Egypt Collapse On Real Time"<br>This is our signature sentence. Our website aims on bringing up disasterious events happening in Egypt, regardless of whether these events were true or not.<br>Our main objective is to make things worse and only worse.<br>In Disaster.com, you are free to post, view, and comment in any post saying whatever you want!<br><br>Best wishes,<br>- Disaster.com team</p>
    </div>
</div>
<!-- <script src="./js/main.js"></script> -->

</html>