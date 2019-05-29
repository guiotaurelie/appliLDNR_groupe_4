
<!-- Affichage du contenu du formulaire -->
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Vérification du contenu d'un formulaire</title>
<link rel="stylesheet" href="main.css">

</head>

<body id="top">
<?php 

function Affichage()
{
    echo "<h1>Affichage du contenu d'un formulaire</h1>";
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date_de_naissance'];
    $titre = $_POST['titre'];
    //divergence en fonction du titre 
    if($titre== 'MR')
    {
        echo 'Bonjour '.$titre. ' '. $nom.' , '.$prenom.', né le : '.$date;
    }
    else
    {
        echo 'Bonjour '.$titre. ' '. $nom.' , '.$prenom.', née le : '.$date;
    }
echo '<p>Retourner à la page d\'<a href="index.html" title="Retourner au formulaire">accueil</a></p>';
}
?>

</body>
</html>