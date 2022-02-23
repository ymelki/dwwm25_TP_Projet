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
if ($path=='/save_ad'){
    include __DIR__.'/../src/Controller/AdsController.php';
    save(); //Renvoyer la vue du formulaire de connexion
}
if ($path=='/view_ads'){
    include __DIR__.'/../src/Controller/AdsController.php';
    view(); //Renvoyer la vue du formulaire de connexion
}
if ($path=='/adone'){
    include __DIR__.'/../src/Controller/AdsController.php';
    viewone(); //Renvoyer la vue du formulaire de connexion
}
