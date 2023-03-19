# Guide d'installation d'un environnement de développement PHP sur Ubuntu 20.04

## Étape 1: Mise à jour du système

Ouvrez un terminal et exécutez la commande suivante pour mettre à jour les paquets existants:

```bash
sudo apt update && sudo apt upgrade
```

## Étape 2: Installer Apache

Exécutez la commande suivante pour installer le serveur web Apache:

```bash
sudo apt install apache2
```

Une fois l'installation terminée, activez Apache pour qu'il démarre automatiquement au démarrage:

```bash
sudo systemctl enable apache2
```

Démarrez le serveur Apache:

```bash
sudo systemctl start apache2
```

Pour vérifier si Apache est installé et fonctionne correctement, ouvrez un navigateur et accédez à l'URL suivante:
```bash
http://localhost/
```

## Étape 3: Installer PHP

Installez PHP en exécutant la commande suivante:

```bash
sudo apt install php libapache2-mod-php
```
Redémarrez le serveur Apache pour prendre en compte les modifications:

```bash
sudo systemctl restart apache2
```

Pour vérifier si PHP est correctement installé, créez un fichier info.php dans le répertoire /var/www/html:

```bash
sudo nano /var/www/html/info.php
```

Ajoutez le code suivant dans le fichier info.php:

```php
<?php
phpinfo();
?>
```

Enregistrez le fichier et quittez l'éditeur de texte.

Ouvrez un navigateur et accédez à l'URL suivante pour vérifier l'installation de PHP:


```bash
http://localhost/info.php
```

## Étape 4: Installer MySQL (optionnel)

Si vous souhaitez utiliser une base de données MySQL avec PHP, installez le serveur MySQL avec la commande suivante:

```bash
sudo apt install mysql-server
```

Une fois l'installation terminée, exécutez la commande suivante pour sécuriser l'installation de MySQL:

```bash
sudo mysql_secure_installation
```

Répondez aux questions pour configurer le mot de passe root et les paramètres de sécurité.

## Étape 5: Installer phpMyAdmin (optionnel)

Si vous préférez utiliser une interface graphique pour gérer vos bases de données MySQL, installez phpMyAdmin avec la commande suivante:

```bash
sudo apt install phpmyadmin
```

Pendant l'installation, choisissez Apache comme serveur web et configurez le mot de passe pour phpMyAdmin.

Redémarrez le serveur Apache pour prendre en compte les modifications:

```bash
sudo systemctl restart apache2
```

Accédez à phpMyAdmin via l'URL suivante:

```bash
http://localhost/phpmyadmin
```

## Étape 6: Installer un IDE (optionnel)

Vous pouvez également installer un environnement de développement intégré (IDE) pour travailler avec PHP, comme Visual Studio Code, PHPStorm ou Sublime Text. Par exemple, pour installer Visual Studio Code, suivez les instructions sur le site officiel: https://code.visualstudio.com/docs/setup/linux

Félicitations! Vous avez maintenant installé et configuré un environnement de développement PHP sur Ubuntu 20.04.