
<!-- Vérification du contenu d'un formulaire -->
<?php
ini_set('display_errors',1);
if (empty($_POST['nom'])) {
    echo 'veuillez entrer votre nom';
} elseif (empty($_POST['prenom'])) {
    echo 'veuillez entrer votre prénom';
} elseif (empty($_POST['date_de_naissance'])) {
    echo 'veuillez entrer votre date de naissance';
} else {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date_de_naissance'];
    $titre = $_POST['titre'];
}
?>
