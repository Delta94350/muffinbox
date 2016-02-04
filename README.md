# muffinBox

##Prérequis : 

## Serveur : 

* PHP >=5.5.30
* Composer à jour
* module rewrite (Apache) activé

## Client

* Mozilla Firefox à jour (le plugin DivX est bloqué par Chrome)
* plugin DivX
* plugin AC3Filter
* plugin VLC

#Installation :

* cloner le repo
* faire un "composer install" à la racine du repo
* renommer le fichier .env.example en .env
* creer une base de donnee en utf8 general-ci et importer le script present dans ressources/database
* modifier le contenu du fichier .env : lignes 5 à 8 (incluses)
* faire un "php artisan key:generate" à la racine du repo
* modifier le fichier config/recaptcha.php et y mettre la cle privee et publique de son domaine
* donner les droit de lecture au dossier storage


#Formats supportés : 
* video
** MP4
** MKV
** AC3
** DTS

