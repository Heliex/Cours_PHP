### TP : Gestion d'un formulaire de contact avec redirection

### Objectif : 

Dans ce TP, vous allez créer un formulaire de contact simple en HTML et PHP, et utiliser la fonction `header()` pour rediriger l'utilisateur après la soumission du formulaire.

### Consignes :

1) Créez un nouveau fichier contact_form.html et ajoutez le code HTML de base, avec un titre pour le formulaire de contact.
2) Dans le corps du fichier HTML (<body>), ajoutez un formulaire HTML avec les champs suivants :
- Nom (type : text)
- Adresse e-mail (type : email)
- Message (type : textarea)
- Bouton de soumission (type : submit)

3) Définissez l'attribut action du formulaire pour soumettre les données à un fichier PHP nommé process_contact_form.php.
4) Créez un nouveau fichier process_contact_form.php. 
5) À l'intérieur du fichier process_contact_form.php, vérifiez si les données du formulaire ont été soumises en utilisant la superglobale `$_POST`. 
6) Si les données ont été soumises, traitez les données du formulaire (par exemple, en les affichant, en les enregistrant dans un fichier, ou en les envoyant par e-mail). 
7) Utilisez la fonction `header()` pour rediriger l'utilisateur vers une page de confirmation nommée confirmation.html après le traitement des données du formulaire.

Par exemple :

```php
header("Location: confirmation.html");
exit;
```

8) Créez un fichier confirmation.html avec un message de confirmation, comme "Merci pour votre message ! Nous vous répondrons dans les plus brefs délais."
9) Testez votre formulaire de contact en soumettant des données et en vérifiant que la redirection vers la page de confirmation fonctionne correctement.

Astuce : Vous pouvez ajouter des styles CSS et des validations côté client (par exemple, avec JavaScript) pour améliorer la présentation et l'ergonomie du formulaire de contact.