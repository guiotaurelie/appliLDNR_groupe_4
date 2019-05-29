
<!-- Vérification du contenu d'un formulaire -->
<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Vérification du contenu d'un formulaire</title>
<link rel="stylesheet" href="main.css">

</head>

<body id="top">

<pre>
<!-- Vérification du contenu d'un formulaire -->
<?php
include 'valid.php';


echo Verif();

function Verif()
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date = $_POST['date_de_naissance'];
  $titre = $_POST['titre'];
  $retour = "0";
  //vérification de champ rempli Champ par champ
  if (($nom == '') || ($nom == 'Mon nom') )
  {
    echo '<h2>veuillez entrer votre nom</h2>';
    $retour = "1";
    echo'<br/>';
  } 
  if (($prenom == '') || ($prenom == 'Mon Prénom')) 
  {
    echo '<h2>veuillez entrer votre prénom</h2>';
    $retour = "1";
    echo'<br/>';
  } 
  if ($date == '' ) 
  {
    echo '<h2>veuillez entrer votre date de naissance</h2>';
    $retour = "1";
    echo'<br/>';
  } 
  if ($retour == "1") {
    echo "<h1>Formulaire invalide</h1>";
    echo '<p><a href="index.html" title="Retourner au formulaire">Cliquez ici pour mettre à jour le formulaire</a></p>';
    die;
  } else {
    echo Affichage();
  }
  }
?>
</body>

</html>
