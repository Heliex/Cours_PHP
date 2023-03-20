### Exemple concret : Création d'un formulaire avec les méthodes GET et POST

Dans cet exemple pratique, vous allez créer un formulaire simple en HTML et soumettre les données en utilisant à la fois les méthodes GET et POST. Ensuite, vous allez récupérer les données soumises en PHP en utilisant les superglobales $_GET et $_POST.

### Consignes :

1) Créez un nouveau fichier HTML et ajoutez-y un formulaire avec les éléments suivants :

- Un champ de type "text" pour saisir un nom, avec un label associé
- Un champ de type "email" pour saisir une adresse e-mail, avec un label associé
- Un bouton de type "submit" pour soumettre le formulaire

2) Configurez le formulaire pour utiliser la méthode GET :

- Ajoutez l'attribut method avec la valeur "GET" à l'élément `<form>`
- Ajoutez un attribut name à chaque champ de saisie, par exemple "name" pour le champ du nom et "email" pour le champ de l'email
- Ajoutez l'attribut action avec le nom du fichier PHP qui traitera les données du formulaire, par exemple "get_process.php"

3) Créez un fichier PHP (par exemple, "get_process.php") pour récupérer et afficher les données soumises avec la méthode GET :
- Utilisez les superglobales $_GET pour récupérer les données du formulaire
- Affichez les données récupérées à l'écran
- Testez le formulaire en soumettant des données et en vérifiant leur affichage dans le fichier PHP.

7) Modifiez le formulaire pour utiliser la méthode POST :

- Changez la valeur de l'attribut method en "POST"
- Modifiez l'attribut action pour qu'il pointe vers un nouveau fichier PHP, par exemple "post_process.php"
- Créez un fichier PHP (par exemple, "post_process.php") pour récupérer et afficher les données soumises avec la méthode POST :
- Utilisez les superglobales $_POST pour récupérer les données du formulaire
- Affichez les données récupérées à l'écran
- Testez à nouveau le formulaire en soumettant des données et en vérifiant leur affichage dans le nouveau fichier PHP.

Après avoir terminé cet exercice, vous devriez avoir une meilleure compréhension de la différence entre les méthodes GET et POST et de la manière de les utiliser pour soumettre des données à partir d'un formulaire HTML.