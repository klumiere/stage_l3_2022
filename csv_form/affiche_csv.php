<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title> Comptage de lignes </title>
</head>
<body>

<?php
   $taille_min_seq = $_GET['taille_min_seq']; /* récupère la taille min entrée par l'utilisateur*/
   $taille_max_seq = $_GET['taille_max_seq'];/* récupère la taille max entrée par l'utilisateur*/
   $resol_max= $_GET ['resol_max']; /* récupère la résolution max entrée par l'utilisateur*/
   
  $nom_dossier = 'RNANet_fichiers';  
  $dossier = opendir($nom_dossier); /* ouvre les fichiers du dossier RNANet_fichiers contenant les fichiers plats du site RNANet*/

while($fichier = readdir($dossier))
{
    $lines = count(file($nom_dossier."/".$fichier)); /*compte le nombre de lignes pour chaque fichier txt du dossier*/
    $lignes=$lines-1; /*la longueur de la sequence fait le nb de lignes du fichier -1 car la séquence est lu de haut en bas*/
    
if (($lignes>$taille_min_seq) && ($lignes<$taille_max_seq)){ /* si la longueur de la séquence est comprise dans l'intervalle demandé on affiche le nom du fichier suivi de sa longueur*/
echo $fichier. "  Le nombre de lignes est". $lignes . "<br>";
}


}
closedir($dossier);
  
  

    
    
    
    
 
?>




   
    

</body>

</html>
