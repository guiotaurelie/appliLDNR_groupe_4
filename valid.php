
<!-- Affichage du contenu du formulaire -->
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
<h1>Affichage du contenu d'un formulaire</h1>
<?php 
    $recupTitre = $_POST['titre'];
    $recupNom = $_POST['nom'];
    $recupPrenom = $_POST['prenom'];
    $recupDate= $_POST['date_de_naissance'];
			//  if($recupTitre== 'MR'):
    echo 'Bonjour '.$recupTitre. ' '. $recupNom.', '.$recupPrenom. 'né le : '.$recupDate;
			//ndif
			//else

?>


<p>Retourner à la page d'<a href="index.html" title="Retourner au formulaire">accueil</a></p>
</body>

</html>
