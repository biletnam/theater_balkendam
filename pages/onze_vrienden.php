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
    onze vrienden
</div>
<?php
require("shared/footer.php");
?>


</body>
</html>