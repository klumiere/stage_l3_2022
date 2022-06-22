# Stage L3 2022



###### Ce dépot contient les différents travaux que j'ai réalisé au cours de mon stage de L3 dont l'obréaliser une interface graphique de la base de données [RNAnet](https://evryrna.ibisc.univ-evry.fr/evryrna/rnanet).

Il contient:

* le dossier FORM qui contient lui-même:

  `* form_simple.html` permettant d'afficher un formulaire qui permet à un utilisateur de choisir sa civilité, de saisir son nom, prénom, adresse mail et postale et de l'envoyer  

  `* affiche_rep.php` qui est un script php qui récupère les données saisies par l'utilisateur et les utilise pour afficher un message personnalisé.

## Exemple

### input

civ sélectionné "Monsieur"

nom= LUMIERE 

prenom= Florian

adr_mail_1=lumiere.florian

adr_mail_2=gmail.com

adr_pos= 32 Rue du Pont Neuf 91160 SLC


### output  


"Bonjour Florian LUMIERE! Nous vous enverrons un mail à l'adresse suivante: lumiere.florian@gmail.com et à l'adresse postale suivante: 32 Rue du Pont Neuf 91160 SLC"



* le dossier csv_form qui contient lui-même: 

  `* form_csv.html` permettant à un utilisateur de saisir une taille de longueur minimale, une taille de longueur maximale ainsi qu'une résolution maximale d'ARN.

  `* affiche_csv.php` permettant de récupérer les informations qui ont été précedemment saisies par l'utilisateur et d'afficher uniquement les lignes de la table Structure de la base de données qui répondent aux critères choisi par l'utilisateur.


* le dossier data qui contient lui-même:

  `* sample_query_output.txt` qui est 

  `* f1.py` qui est un script écrit en python permettant d'ouvrir en fichier de lecture "sample_query_output.txt", de le parser et de créer un fichier "f1.html" et d'y écrire les balises html notamment les balises <script> </script> qui permettent de charger la librairie Javascript de  [DataTables](https://datatables.net/) pour  avoir un affichage interactif des tables de la base de données. `

  `* f1.js`  
  `* f1.css`
  
  ## Exemple
  
  ```markdown
$ ./ISIDE -t 38 -c examples/folds/a_9.pdb -j job01 -n 4 -f examples/pbmtx/a_9.pbmtx -s 1000
```

* le dossier kamely_files qui contient lui-même:

`* molstar.js` copié du site de Mol* qui est un script en javascript auquel j'ai remplacé une chaine de caractère par une variable code_pdb qui correspond au code_pdb sur lequel l'utilisateur a cliqué et qui va être récupéré par un autre script "aaa.js" pour afficher la structure 3D de l'ARN en question.

  `* aaa.js`

  `* molstar.css`

  `* beacon.jss`


  `* kamely.html` permet d'afficher la structure 3D des ARN du fichier sample_query_output.txt grâce au viewer [Mol*](https://molstar.org/).
 

Il est lié aux fichiers se trouvant dans le dossier kamely_files.
 







