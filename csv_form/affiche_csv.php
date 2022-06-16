<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title> Comptage de lignes </title>
</head>
<body>

<?php
   $taille_min_seq = $_GET['taille_min_seq'];
   $taille_max_seq = $_GET['taille_max_seq'];
   $resol_max= $_GET ['resol_max'];
   
  $nom_dossier = 'RNANet_fichiers';
  $dossier = opendir($nom_dossier);

while($fichier = readdir($dossier))
{
    $lines = count(file($nom_dossier."/".$fichier));
    $lignes=$lines-1; //la longueur de la sequence fait le nb de lignes du fichier -1
    
if (($lignes>$taille_min_seq) && ($lignes<$taille_max_seq)){
echo $fichier. "  Le nombre de lignes est". $lignes . "<br>";
}


}
closedir($dossier);
  
  

    
    
    
    
 
?>




   
    

</body>

</html>
