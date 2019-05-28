<!-- Vérification du contenu d'un formulaire -->
<?php
ini_set('display_errors',1);
if (empty($_post['nom'])) {
    echo 'veuillez entrer votre nom';
} elseif (empty($_post['prenom'])) {
    echo 'veuillez entrer votre prénom';
} elseif (empty($_post['date_de_naissance'])) {
    echo 'veuillez entrer votre date de naissance';
} else {
    $nom = $_post['nom'];
    $prenom = $_POST['prenom'];
    $date = $_post['date_de_naissance'];
    $titre = $_post['titre'];
}
?>