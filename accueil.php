<?php 
    require_once('include/init_twig.php');
    $twig = init_twig();
    $produits = file_get_contents('json/produits.json');
    $produits = json_decode($produits);
    $template = $twig->load('accueil.twig');
    echo $template->render(['produits' => $produits]);
?>