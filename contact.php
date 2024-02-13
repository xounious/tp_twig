<?php 
    require_once('include/init_twig.php');
    $twig = init_twig();
    $employes = file_get_contents('json/employes.json');
    $employes = json_decode($employes);
    $template = $twig->load('contact.twig');
    echo $template->render(['employes' => $employes]);
?>