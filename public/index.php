<?php 
if (!isset($_SERVER['PATH_INFO'])) {
    $path="";
}
if (isset($_SERVER['PATH_INFO'])) {
    $path=$_SERVER['PATH_INFO'];
}

if ($path==''){
    include __DIR__.'/../src/Controller/HomeController.php';
    index(); //Renvoyer la vue du formulaire de connexion
}
if ($path=='/add_ads'){
    include __DIR__.'/../src/Controller/AdsController.php';
    add(); //Renvoyer la vue du formulaire de connexion
}
  