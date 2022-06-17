# stage_l3_2022


Stage L3 2022


Ce dépot contient les différents travaux que j'ai réalisé au cours de mon stage de L3 permttant de réaliser une interface graphique de la base de données RNAnet.

Il contient:

- le dossier csv_form qui contient lui-même: 

+un fichier form_csv.html permettant d'afficher un formulaire dans lequel un utilisateur peut entrer ses informations telles que Nom, Prénom, adresse mail
+un fichier affiche_csv.php permettant de récupérer les information entrées précedemment par l'utilisateur et de les utiliser pour lui afficher un message dans une nouvelle page.


- le dossier data qui contient lui-même:

+un fichier sample_query_output.txt qui est 
+un fichier f1.py qui est un script écrit en python permettant d'ouvrir en fichier de lecture "sample_query_output.txt", de le parser et de créer un fichier "f1.html" et d'y écrire les balises html notamment les balises <script> </script> qui permettent de charger la librairie Javascript de Datatables pour  avoir un affichage interactif des tables de la base de données.  
+un fichier f1.js
+un fichier f1.css

- le dossier kamely_files qui contient lui-même:

+un fichier molstar.js copié du site de Mol* qui est un script en javascript auquel j'ai remplacé une chaine de caractère par une variable code_pdb qui correspond au code_pdb sur lequel l'utilisateur a cliqué et qui va être récupéré par un autre script "aaa.js" pour afficher la structure 3D de l'ARN en question.
-le fichier aaa.js
+un fichier molstar.css
+un fichier beacon.jss


- le fichier kamely.html permet d'afficher la structure 3D des ARN du fichier sample_query_output.txt grâce au viewer Mol*.
Il est lié au =x fichiers se trouvant dans le dossier kamely_files.








