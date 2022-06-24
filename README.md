# Stage L3 2022



###### Ce dépot contient les différents travaux que j'ai réalisé au cours de mon stage de L3 dont l'obréaliser une interface graphique de la base de données [RNAnet](https://evryrna.ibisc.univ-evry.fr/evryrna/rnanet).

Il contient:

* le dossier FORM qui contient lui-même:

  `* form_simple.html` permettant d'afficher un formulaire qui permet à un utilisateur de choisir sa civilité, de saisir son nom, prénom, adresse mail et postale et de l'envoyer  

  `* affiche_rep.php` qui est un script php qui récupère les données saisies par l'utilisateur et les utilise pour afficher un message personnalisé.

## Exemple

### input

Sélectionner Mme

Entrez dans la case Nom: 

LUMIERE 

Entrez dans la case Prénom:

Kamély

Entrer dans la 1ère case de l'Adresse mail: 

kamely

Entrer dans la 2ème case de l'Adresse mail: 

gmail.com

Entrez dans la case Adresse postale:

Rue Henri Dunant 91160 LONGJUMEAU


### output  

Vous obtiendrez ceci: 

Bonjour Kamély LUMIERE! Nous vous enverrons un mail à l'adresse suivante: kamely@gmail.com et à l'adresse postale suivante: Rue Henri Dunant 91160 LONGJUMEAU



* le dossier csv_form qui contient lui-même: 

  `* form_csv.html` permettant à un utilisateur de saisir une taille de longueur minimale, une taille de longueur maximale ainsi qu'une résolution maximale d'ARN.

  `* affiche_csv.php` permettant de récupérer les informations qui ont été précedemment saisies par l'utilisateur et d'afficher uniquement les lignes de la table Structure de la base de données qui répondent aux critères choisi par l'utilisateur.


* le dossier data qui contient lui-même:

  `* sample_query_output.txt` qui est 

  `* f1.py` qui est un script écrit en python permettant d'ouvrir en fichier de lecture "sample_query_output.txt", de le parser et de créer un fichier "f1.html" et d'y écrire les balises html notamment les balises <script> </script> qui permettent de charger la librairie Javascript de  [DataTables](https://datatables.net/) pour  avoir un affichage interactif des tables de la base de données. `

  `* f1.js`  
  `* f1.css`


## Exemple

### input
  ```markdown
  $ ./stage_l3_2022/data/ python 
  
  ```
  


  * le dossier kamely_files qui contient lui-même:

  `* molstar.js` copié du site de [Mol*](https://molstar.org/) qui est un script en javascript auquel j'ai remplacé une chaine de caractère par une variable code_pdb qui correspond au code_pdb sur lequel l'utilisateur a cliqué et qui va être récupéré par un autre script "aaa.js" pour afficher la structure 3D de l'ARN en question.

  `* aaa.js`est un script permettant de récupérer les var

  `* molstar.css`

  `* beacon.jss`


  `* kamely.html` permet d'afficher la structure 3D des ARN du fichier sample_query_output.txt grâce au viewer [Mol*](https://molstar.org/).
 

Il est lié aux fichiers se trouvant dans le dossier kamely_files.
 







