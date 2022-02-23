<?php
function viewone(){
    // appel du modele 
    require __DIR__.'/../Entity/Annonce.php'; 
    $entry = Annonce::retrieveByPK($_GET['id']);
 
    include __DIR__.'/../../templates/viewone.php';

}
function view(){
    // appel du modele 
    require __DIR__.'/../Entity/Annonce.php'; 
    $entry = Annonce::all();

  

    include __DIR__.'/../../templates/ads_View.php';

}
function add(){
    include __DIR__.'/../../templates/Add_ads_View.php';
}

function save(){
  //  var_dump($_FILES);
    if(isset($_FILES['img'])){
        $tmpName = $_FILES['img']['tmp_name'];
        $name = $_FILES['img']['name'];
        $size = $_FILES['img']['size'];
        $error = $_FILES['img']['error'];

        move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"]."/img/".$name);

    }

    // si la piece jointe est vide alors nom=""
    if($_FILES['img']['name']=""){
        $name ="";
    }


    // appel du modele 
    require __DIR__.'/../Entity/Annonce.php'; 
    $annonces = new Annonce();
    $annonces->titre =  $_POST['title'];
    $annonces->message = $_POST['msg'];
    $annonces->image = $name;
    $annonces->save();

    // appel de la vue
    include __DIR__.'/../../templates/Add_save_View.php';
}