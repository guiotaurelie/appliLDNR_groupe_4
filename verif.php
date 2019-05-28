
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
<h1>Vérification du contenu d'un formulaire</h1>


<pre>
<!-- Vérification du contenu d'un formulaire -->
<?php
include 'valid.php';


echo Verif();
echo Affichage();

function Verif()
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date = $_POST['date_de_naissance'];
  $titre = $_POST['titre'];
  //vérification de champ rempli Champ par champ
  if (($nom == '') || ($nom == 'Mon nom') )
  {
    echo '<h2>veuillez entrer votre nom</h2>';
    echo'<br/>';
  } 
  if (($prenom == '') || ($prenom == 'Mon Prénom')) 
  {
    echo '<hr>';
    echo '<h2>veuillez entrer votre prénom</h2>';
  } 
  if ($date == '' ) 
  {
    echo '<h2>veuillez entrer votre date de naissance</h2>';
  } 
}



?>
</pre>
<p>Retourner à la page d'<a href="index.html" title="Retourner au formulaire">accueil</a></p>
</body>

</html>
