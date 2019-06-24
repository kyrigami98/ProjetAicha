<?php include('header.php'); ?>

<form method="post" action="">
	<fieldset>
        <legend>Contactez-nous</legend>
        <p>
        <label for="mail">Votre mail :</label><input name="mail" type="mail" id="mail" required/><br />
        <label for="message">Message:</label><textarea type="text" name="message" id="message" required /></textarea>
        </p>
        <p><input type="submit" value="Connexion" /></p></form>

    </fieldset>

</form>

<?php include('footer.php'); ?>
