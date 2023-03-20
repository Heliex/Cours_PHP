<!--
Le fichier commentindex.php contient le formulaire de commentaire.
Les données sont envoyées au fichier submit_comment.php pour être traitées.
Dans le fichier submit_comment.php, nous utilisons les fonctions strip_tags() et
htmlspecialchars() pour nettoyer les données entrantes.
Les commentaires sont ensuite stockés dans la session et affichés sur la page commentindex.php via l'inclusion du
fichier comments.php.
!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de commentaire sécurisé</title>
</head>
<body>
<h1>Formulaire de commentaire sécurisé</h1>
<form action="submit_comment.php" method="post">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="comment">Commentaire :</label>
    <textarea id="comment" name="comment" required></textarea>
    <br>
    <input type="submit" value="Envoyer">
</form>
<h2>Commentaires :</h2>
<?php include 'comments.php'; ?>
</body>
</html>
