<?php
session_start(); // Assurez-vous de démarrer la session en haut du fichier
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
<h1>Thank you for your message!</h1>
<h2>Submitted Data</h2>
<p>Name: <?php echo htmlspecialchars($_SESSION["name"]); ?></p>
<p>Email: <?php echo htmlspecialchars($_SESSION["email"]); ?></p>
<p>Message: <?php echo nl2br(htmlspecialchars($_SESSION["message"])); ?></p>
<p><a href="contact_form.html">Back to Contact Form</a></p>
</body>
</html>
