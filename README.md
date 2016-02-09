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

* cloner le repo (renommer le dossier muffinBox en muffinbox)
* faire un "composer install" à la racine du repo
* renommer le fichier .env.example en .env
* creer une base de donnee en utf8 general-ci et importer le script present dans ressources/database
* modifier le contenu du fichier .env : lignes 5 à 8 (incluses)
* faire un "php artisan key:generate" à la racine du repo
* modifier le fichier config/recaptcha.php et y mettre la cle privee et publique de son domaine
* donner les droit de lecture au dossier storage
* modifier le fichier config/recaptcha.php et y mettre la cle privee de son domaine
* créer le dossier videos dans public/



MuffinBox est un projet gratuit et a été fait par plaisir. Cepandant, ceci demande du temps.
Vous pouvez donc me soutenir en me payant une bière !

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LCZJFS7D8USG4">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
