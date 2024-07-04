#Déploiement du projet PHP sur une machine locale

##Prérequis

- Serveur web (Apache, Nginx, etc.)
- PHP installé (version 8.1 ou supérieure recommandée)
- MySQL installé
- Git installé

##Étapes de déploiement

###1. Cloner le dépôt GitHub

Ouvrez un terminal et exécutez la commande suivante pour cloner le dépôt sur votre machine locale :

```
git clone https://github.com/Mika-Otter/PHP_POO-Project-Ri7.git
```

###2. Configurer le serveur web

- Déplacez les fichiers du projet cloné vers le répertoire racine de votre serveur web (par exemple, /var/www/html pour Apache).
- Assurez-vous que les fichiers .htaccess (s'ils existent) sont correctement configurés et activés sur votre serveur.

###3. Configurer la base de données MySQL

- Connectez-vous à votre serveur MySQL et créez une base de données pour le projet :

``
CREATE DATABASE nom_de_votre_base_de_donnees;
```

- Importez les tables et les données en utilisant le fichier SQL fourni (poo_project_database.sql à la racine du projet) :

```bash
    mysql -u votre_utilisateur -p nom_de_votre_base_de_donnees < poo_project_database.sql
```

###4. Configurer les paramètres de connexion à la base de données

Modifiez le fichier de configuration de votre projet pour indiquer les paramètres de connexion à la base de données (par exemple, config.php, database.php, etc.) :

```php

    $dbhost = 'localhost';
    $dbname = 'nom_de_votre_base_de_donnees';
    $dbusername = 'votre_utilisateur';
    $dbpassword = 'votre_mot_de_passe';
```

###6. Lancer le serveur web
Démarrez (ou redémarrez) votre serveur web pour appliquer les changements.

###7. Accéder à l'application
Ouvrez votre navigateur web et accédez à http://localhost (ou à l'URL configurée pour votre serveur web) pour voir votre application en action.

##Support

Pour toute question ou problème, veuillez ouvrir une issue sur GitHub ou contacter l'administrateur du projet.
