# Exercice pratique : Gestion de la sécurité pour un formulaire de commentaire

**Objectif** : Créer un formulaire de commentaire sécurisé pour empêcher les attaques XSS.

## Consignes

1. **Créez un fichier HTML** contenant un formulaire permettant aux utilisateurs de soumettre un commentaire.
    - Le formulaire doit contenir un champ de texte pour le nom de l'utilisateur et une zone de texte pour le commentaire.

2. **Créez un fichier PHP** pour traiter les données du formulaire.
    - Stockez les commentaires dans un tableau associatif en mémoire plutôt que dans une base de données.

3. **Protégez le formulaire contre les attaques XSS**.
    - Utilisez la fonction `htmlspecialchars()` pour convertir les caractères spéciaux en entités HTML avant d'afficher les données sur la page.
    - Utilisez la fonction `strip_tags()` pour supprimer les balises HTML potentiellement malveillantes des données entrantes.
    - Vous pouvez également spécifier des balises autorisées pour conserver certaines balises HTML dans les commentaires.

4. **Affichez les commentaires stockés dans le tableau associatif sur la page HTML**.
    - Assurez-vous d'utiliser `htmlspecialchars()` pour afficher les données de manière sécurisée.

5. **Testez la sécurité du formulaire**.
    - Essayez d'insérer du code JavaScript malveillant dans les champs du formulaire pour vérifier que le code est correctement nettoyé et sécurisé.

N'oubliez pas de configurer l'environnement de développement avant de commencer l'exercice.
