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
    <div id="home_wrapper">
        <?php
        $result = $database->prepared_query("SELECT * FROM voorstellingen ORDER BY date ASC LIMIT 3");
        foreach ($result as $entry){
            echo "<div class=\"entry\">";
            echo "<p class='date'>$entry->date</p>";
            echo "<div class=\"img\"><img src=\"../images/full/$entry->image\"></div>";
            echo "<div class=\"entry-content\">";
            echo "<h2>$entry->title</h2>";
            echo "<p>$entry->description</p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<?php
require("shared/footer.php");
?>


</body>
</html>