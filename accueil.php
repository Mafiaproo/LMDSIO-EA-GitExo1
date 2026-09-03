<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);

    echo "Bonjour $nom $prenom bienvenue sur votre page.";
}