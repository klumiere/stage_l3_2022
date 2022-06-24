# Stage L3 2022



###### Ce dépot contient les différents travaux que j'ai réalisé au cours de mon stage de L3 dont l'objectif était de réaliser une interface graphique de la base de données [RNAnet](https://evryrna.ibisc.univ-evry.fr/evryrna/rnanet).

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

  `* affiche_csv.php` permettant de récupérer les informations qui ont été précedemment saisies par l'utilisateur et d'afficher uniquement les code_pdb qui répond aux critères saisies. 
  
  A noter: Il est nécessaire de télécharger les fichiers textes (CSV) des ARN dans le site https://evryrna.ibisc.univ-evry.fr/evryrna/rnanet pour faire fonctionner le code des fichiers form_csv.html et affiche_csv.php.


* le dossier data qui contient lui-même:

  `* sample_query_output.txt` qui un fichier contenant un extrait du résultat de la requête SELECT* FROM Structure; . Il contient des code_pdb (4 caractères commençant par un chiffre)  avec la méthode expérimentale, la résolution, la date, le modèle pdb (caractère à un chiffre) qui leur sont associés.
  
  `* f1.js`  
  `* f1.css`qui permet de gérer les couleurs, la disposition de la page avec la présence de bordures (cell-border), une alternance de la couleur des lignes entre gris et blanc (classe stripe). Ce code est issu du site https://datatables.net/examples/styling/display.html.

  `* f1.py` qui est un script écrit en python permettant d'ouvrir en fichier de lecture "sample_query_output.txt", de le parser et de créer un fichier "f1.html" et d'y écrire les balises html notamment les balises <script> </script> qui permettent de charger la librairie Javascript de  [DataTables](https://datatables.net/) pour  avoir un affichage interactif des tables de la base de données. Il permet également à ce que lorsque l'on clique sur un code pdb, la structure 3D de cet ARN (avec le viewer Mol*) apparaisse dans un nouvel onglet.
  
  `* f1.html` qui contient le code html généré par le script f1.py. Celui-ci contient la classe "stripe" dans la balise <table id="example" class="stripe" style="width:100%"> et permet ainsi d'afficher les lignes du tableau en gris et blanc en alternace donnant un effet rayure "Stripe" en anglais.
  
## Exemple

### input
  ```markdown
  $ ./stage_l3_2022/data/ python3 f1.py sample_query_output.txt
  
  ```
### output

Le fichier f1.html est créé et permet d'afficher la page contenant la table Structure de RNAnet avec la librairie [DataTables](https://datatables.net/). Chaque ligne correspond à un code _pdb et les colonnes indiquent le modèle pdb qui est un caractère, la date de découverte de l'ARN, la méthode expérimentale utilisé pour prédire la structure 3D ce cet ARN. En ouvrant cet page html avec un navigateur, on observe le résultat suivant:
  
  
  ![image](https://user-images.githubusercontent.com/105880255/175695918-1f4ff27d-b1f9-4c88-bf73-cc6bed579f71.png)

  
  En cliquant sur un pdb (ici 7oiz), on peut obtenir la structure 3D ce cet ARN grâce au viewer Mol* comme ci-dessous:
  
  ![image](https://user-images.githubusercontent.com/105880255/175696148-0ecf27e2-bb79-40ef-8b41-4bb848ed7e2a.png)

  
  


  * le dossier kamely_files qui contient lui-même:

  `* molstar.js` copié du site de [Mol*](https://molstar.org/) qui est un script en javascript auquel j'ai remplacé une chaine de caractère par une variable code_pdb qui correspond au code_pdb sur lequel l'utilisateur a cliqué et qui va être récupéré par un autre script "aaa.js" pour afficher la structure 3D de l'ARN en question.

  `* aaa.js`est un script permettant de récupérer les variables que l'on rajoute après un ? dans l'adresse URL.

  `* molstar.css`qui permet de gérer les couleurs, la disposition de la page. Ce fichier provient du site Mol*.

  `* beacon.jss`


  `* kamely.html` permet d'afficher la structure 3D des ARN du fichier sample_query_output.txt grâce au viewer [Mol*](https://molstar.org/).Il est lié aux fichiers se trouvant dans le dossier kamely_files.
 








