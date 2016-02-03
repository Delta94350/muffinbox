# muffinBox

##Prérequis : 
* PHP >=5.5.30
* Composer à jour

#Installation :

* cloner le repo
* faire un "composer install" à la racine du repo
* renommer le fichier .env.example en .env
* creer une base de donnee en utf8 general-ci et importer le script present dans ressources/database
* modifier le contenu du fichier .env : lignes 5 à 8 (incluses)
* faire un "php artisan key:generate" à la racine du repo
* modifier le fichier config/recaptcha.php et y mettre la cle privee de son domaine