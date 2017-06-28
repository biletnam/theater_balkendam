<!--©Brandon v dongen 2017-->
<?php
session_name("theater_balkendam_bvd");
session_start();
require_once("../classes/database.class.php");
require_once("../classes/auth.class.php");
$database = new Database();
$auth = new Auth($database);
?>
<html lang="en">
<?php
require("shared/header.php");
?>

<body>
<?php
require("shared/login.php");
?>
<div id="header">
    <div id="header_container">Theater Balkendam</div>
</div>
<div id="nav">
    <?php
    require("shared/nav.php");
    ?>
</div>
<div id="content_container">
    <div id="info_wrapper">
        <img src="../images/vloerplan.jpg">
        <ol>
            <li>
                Multi-purpose
            </li>
            <li>
                Lobby
            </li>
            <li>
                Snackbar
            </li>
            <li>
                Schoonmaak kast
            </li>
            <li>
                Vrouwen toilet
            </li>
            <li>
                Mannen toilet
            </li>
            <li>
                Foyer
            </li>
            <li>
                Trappengang
            </li>
            <li>
                Electriche ruimte
            </li>
            <li>
                Box kantoor
            </li>
            <li>
                Hoofdingang
            </li>
            <li>
                Kantoor
            </li>
            <li>
                Overgang
            </li>
            <li>
                Gangpad
            </li>
            <li>
                Audioruimte
            </li>
            <li>
                Podium
            </li>
            <li>
                Backstage
            </li>
            <li>
                Werkruimte
            </li>
            <li>
                toilet (M/V)
            </li>
            <li>
                Kleedruimte
            </li>
            <li>
                Wasruimte
            </li>
            <li>
                Oefenruimte
            </li>
        </ol>
    </div>
</div>
<?php
require("shared/footer.php");
?>


</body>
</html>