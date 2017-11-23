# TP Mise en situation du travail en équipe.
## Sujet
L’application Web sur laquelle vous allez travailler et une api d’authentification. Elle comprend une partie inscription où un nouvel utilisateur peut s’enregistrer et une partie service qui répond par un code [ inscrit, mauvais pass, mauvais log … ].

## "Getting started"
Le code de ce dépôt est à cloner pour démarrer le TP sur le "développement en équipe"

Après avoir cloné le dépôt, installez les dépendances en faisant un `php composer.phar install` 
si votre composer est installé localement sinon un `composer install` si composer est installé globalement

Remarque : L'application Web est dépendante des librairies Bootstrap et Jquery.
 Les librairies sont installées via composer. Un lien symbolique sur chaque librairies est créé dans public.

## Organisation
Dans ces travaux pratiques, vous allez travailler en équipe de 5 minimum.
 La compétence visée est d’être capable de développer une application 
 en équipe. Indirectement vous montrez aussi en compétences sur le langage PHP.

La première étape sera donc de constituer votre équipe, 
les équipes sont constituées par tirage au sort, 
le premier tirage désigne les lead-développeurs, 
ensuite chaque lead-développeur tire au sort son équipe
 pour des raisons pratiques vous pouvez changer de place. 
 Vous devez ensuite vous répartir les tâches et démarrer un projet sur 
 Pivotal Tracker où vous recenserez tous les développement à faire. 
 Tâches et développement sont définit à partir de votre étude du code.

Les développements sont à faire en respectant le GitFlow, 
le responsable du TP est le reviewer c'est lui qui validera les pulls resquests. 
_une note est accordée à tous ceux qui lierons [github & pivotal]
(https://content.pivotal.io/blog/level-up-your-development-workflow-with-github-pivotal-tracker)_.

## Votre travail
* Reprendre tout le source, identifier les TODOs et les faire.
* Passer à bootstrap 4.*
* Ecrire les tests unitaires 
* Créez la conf travis associé
* écrire la documentation et la générer avec phpDocumentator
* Définir les conventions de codage de votre équipe et l’intégrer à vos IDE
 