### Exemple pratique : formulaire avec une action définie ou auto-référencée

Dans cet exemple pratique, vous allez créer deux formulaires simples en HTML : un formulaire avec une action définie et un formulaire auto-référencé. Vous apprendrez comment récupérer les données soumises à l'aide de PHP et les afficher à l'écran.

### Consignes :

1) Créez un nouveau fichier HTML et ajoutez-y deux formulaires avec les éléments suivants :

- Un champ de type "text" pour saisir un nom, avec un label associé
- Un champ de type "email" pour saisir une adresse e-mail, avec un label associé
- Un bouton de type "submit" pour soumettre le formulaire Configurez le premier formulaire avec une action définie :

2) Ajoutez l'attribut method avec la valeur "POST" à l'élément `<form>`
3) Ajoutez un attribut name à chaque champ de saisie, par exemple "name" pour le champ du nom et "email" pour le champ de l'email
4) Ajoutez l'attribut action avec le nom du fichier PHP qui traitera les données du formulaire, par exemple "defined_action.php"
5) Configurez le deuxième formulaire en tant que formulaire auto-référencé :

- Ajoutez l'attribut method avec la valeur "POST" à l'élément `<form>`
- Ajoutez un attribut name à chaque champ de saisie, par exemple "name" pour le champ du nom et "email" pour le champ de l'email
- Laissez l'attribut action vide ou omettez-le, ce qui signifie que les données du formulaire seront envoyées au même fichier qui contient le formulaire *
6) Créez un fichier PHP (par exemple, "defined_action.php") pour récupérer et afficher les données soumises avec le premier formulaire :

- Utilisez les superglobales $_POST pour récupérer les données du formulaire
- Affichez les données récupérées à l'écran
7) Modifiez le fichier HTML contenant les formulaires pour inclure du code PHP pour récupérer et afficher les données soumises avec le deuxième formulaire auto-référencé :

- Ajoutez des balises PHP `<?php?>` en haut du fichier HTML
- Utilisez les superglobales $_POST pour récupérer les données du formulaire seulement si la requête est de type POST (en vérifiant la méthode de la requête avec $_SERVER['REQUEST_METHOD'])
- Affichez les données récupérées à l'écran
- Testez les deux formulaires en soumettant des données et en vérifiant leur affichage dans les fichiers correspondants.

Après avoir terminé cet exercice, vous devriez avoir une meilleure compréhension de la différence entre un formulaire avec une action définie et un formulaire auto-référencé, et comment récupérer et afficher les données soumises avec PHP.