<?php session_start();?>
<?php

if(isset($_SESSION['beginSession']) && $_SESSION['beginSession'] == 'ok'){
    if (isset($_GET['route'])){
        if ($_GET['route'] == "ballina" || $_GET['route'] == "mesazhet" || $_GET['route'] == "profile" || $_GET['route'] == "logout"){
            include("Views/includes/header.php");
            include("modules/CMS/" . $_GET['route'] . ".php");
            include("Views/includes/footer.php");
        }
    }else{
        include("Views/includes/header.php");
        include("modules/CMS/ballina.php");
        include("Views/includes/footer.php");
    }
}else{
    if (isset($_GET['route'])){
        if ($_GET['route'] == "home"){
            // Header frronti
            include("includes/frontheader.php");
            include("modules/" . $_GET['route'] . ".php");
            include("includes/frontfooter.php");
            // Footer
        }else if ($_GET['route'] == "login" || $_GET['route'] == "forgotpassword"){
            include("Views/modules/Login/frontheader.php");
            include("modules/Login/" . $_GET['route'] . ".php");
            include("Views/modules/Login/frontfooter.php");
        } else {
            include("modules/CMS/404.php");
        }
    } else {

        include("includes/frontheader.php");
        include("modules/home.php");
        include("includes/frontfooter.php");
    }
}
