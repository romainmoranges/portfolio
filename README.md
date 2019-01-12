# base_integration
Une base correcte pour intégrer une maquette, avec des icônes, un peu de js

# NE PAS OUBLIER NPM INSTALL

Pour Paul le con, 
Pour te servir de tout ca t'auras besoin de node JS, effectivement on a besoin de NPM pour installer toutes les dépendances que l'on a besoin. (nodeJS = javascript côté serveur; NPM = gestionnaire de paquets de nodeJS. l'équivalent chez php c'est composer il me semble)

https://nodejs.org/dist/v10.15.0/node-v10.15.0-x64.msi

(pour vérifier si t'as node, avec la bonne version: dans un terminal "node -v")
T'installes ca, t'ouvre une invite de commande pas affreuse, tu te déplaces dans le dossier que tu viens de télécharger et tu fais npm install.
NPM va lire ton fichier package.json et télécharger tout ce dont tu as besoin

Ensuite, tu seras bon :) 

Gulp est un task runner, il permet de faire des tâches tout seul. Ici on a un watcher scss et un truc qui fait des sprite svg (on en parle + tard si tu veux, mais si t'es curieux ya des exemple dans le dossier)

pour lancer le watcher : gulp watch. à chaque ctrl+s sur ton fichier principal, il va regarder les différences avec l'ancien et le compiler en css
