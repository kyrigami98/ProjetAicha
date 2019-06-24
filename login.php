<?php include('header.php'); ?>


<!--voici le formulaire de connection-->
<!--fieldset est une balise Html qui permet de creer des div avec des bordure et un titre d'entete-->

<form method="post" action="">
	<fieldset>
        <legend>Connexion</legend>
        <p>
        <label for="pseudo">Login :</label><input name="pseudo" type="text" id="pseudo" required/><br />
        <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" required />
        </p>
        <p><input type="submit" value="Connexion" /></p></form>
    <a href="admin.php">Espace Administrateur</a>
    </fieldset>

</form>

<?php include('footer.php'); ?>
