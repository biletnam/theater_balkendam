<!--©Brandon v dongen 2017-->
<?php
require_once("../classes/database.class.php");
$database = new Database();
?>
<html lang="en">
<?php
require("shared/header.php");
?>

<body>
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
        $result = $database->prepared_query("SELECT * FROM voorstellingen");
        foreach ($result as $entry){
            echo "<div class=\"entry\">";
            echo "<div class=\"img\"><img src=\"../images/placeholder.png\"></div>";
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