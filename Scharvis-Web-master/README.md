Scharvis-Web
On utilise : Aucun framework HTML + CSS + PHP

0.1 : HTML On fait un truc dégueulasse mais qui marche

Comment ça marche :

Page Sign in/up
Home page (liste chambre avec le élements et leurs états)
Room Page
User page (historique + habitudes + settings)
Qui fait quoi :

User Interface : Yatreb
Room Interface : Fawzi
DB Interactions : CurryBoy
User Interface :

Formulaire d'inscription
Formulaire de Connexion
Boutton Déconnexion
Créer la page index.php (formulaire de connexion et/ou inscription qui ramène sur home.php une fois connecté)
DB Interactions :

créer des fonctions pour la connexion et deconnexion à la base de donnée et les différents machin en SQL (SELECT, INSERT INTO, UPDATE etc...)
Room Interface:

Vue d'ensemble des rooms
Vue des objets présent dans ces rooms
Interactions avec ces objets
                                  ====================================================
Pour l'instant on a : 
  - Vue des chambres avec les objets qui y sont présents et l'état de ces objets
  - Quand on clique sur ces objets on a une vue détaillé de ces objets et un bouton on/off qui pour l'instant ne marche pas

Ce qu'il faut faire : 
  - Inscription + Connexion
  - Faire marcher le bouton on/off ( quand tu clique ça change la valeur dans la base de donnée + rajoute une ligne dans la table historique
  - Les habitudes (si quelqu'un allume 5 fois la lumière a 10h rajoute une ligne dans base de donnée qui dit d'allumer la lumière a 10h par exemple)
  - 
  Pour l'instant ça fera l'affaire
