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
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Contact Theater Balkendam</h3>
            <h4>Neem contact met ons op zodat wij u kunnen helpen.</h4>
            <fieldset>
                <input placeholder="Voornaam" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="E-mail" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Telefoonnummer" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Uw bericht" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Verstuur</button>
            </fieldset>
        </form>
    </div>
</div>
<?php
require("shared/footer.php");
?>


</body>
</html>