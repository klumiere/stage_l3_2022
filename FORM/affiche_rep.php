<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title> Formulaire </title>
</head>
<body>

 <! -- Message personnalisé affiché à l'écran en fonction des infos qui ont été précedemment saisies par l'utilisateur -->
 
<h1>Bonjour <?php echo $_GET['civ']?> <?php echo $_GET['prenom'] ?>  <?php echo $_GET['nom']?> !</h1>
<h2>Nous vous enverrons un mail à l'adresse suivante:  <?php echo $_GET['adr_mail_1']?>@<?php echo $_GET['adr_mail_2']?> et à l'adresse postale suivante: <?php echo $_GET['adr_pos']?></h2>

 <! -- La variable $_GET permet de récupérer les paramètres qui ont été saisies -->
   <?php
    $civ=$_GET['civ'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $adr_mail_1 = $_GET['adr_mail_1'];
    $adr_mail_2 = $_GET['adr_mail_2'];
    $adr_pos =$_GET ['adr_pos'];
    ?>

</body>

</html>
