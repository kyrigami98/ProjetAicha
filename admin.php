<?php include('header.php'); ?>

 <!--je change la couleur du bouton de memu sur lequel ont a cliquer-->
<style>
    #admin {
        background-color: #111;
    }
</style>

<!--voici le formulaire d'ajout d'un etudiant-->
<form method="post" action="">

<!--fieldset est une balise Html qui permet de creer des div avec des bordure et un titre d'entete-->
	<fieldset>
        <legend>Ajout Etudiant</legend>
        <p>
        <label for="nom">Nom :</label><input name="nom" type="text" id="nom" required/><br />
        <label for="prenom">Prénom :</label><input name="prenom" type="text" id="prenom" required/><br />
        <label for="photo">Photo :</label><input type="file" name="photo" id="photo" required />
        </p>
        <p><input type="submit" value="Ajouter" /></p></form>
    </fieldset>

</form>

<form method="post" action="">

<!--fieldset est une balise Html qui permet de creer des div avec des bordure et un titre d'entete-->
	<fieldset>
        <legend>Liste des étudiants</legend>
            <table id="t01">
              <tr>
                <th>Selection</th>
                <th>Prénom</th>
                <th>Photo</th>
              </tr>
              <tr>
                <td>
                   <div>
                      <input type="checkbox" id="scales" name="scales">
                      <label for="scales"></label>
                   </div>
                </td>
                <td>ABOGOURIN Aicha</td>
                <td>
                  <img class="photo" width="50px" src="img/team/1.jpg">
                </td>
              </tr>

            </table>
    <p><input type="submit" style="background:red;" value="Supprimer la Selection" /></p>
    </fieldset>

</form>


<?php include('footer.php'); ?>
