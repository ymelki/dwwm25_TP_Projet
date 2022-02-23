<?php
function remove_favorite(){
    $entry = json_decode($_COOKIE['favoris']);

var_dump($entry);
echo "<br />";echo "<br />";echo "<br />";


    foreach( $entry as $key=>$favoris){
        if ($favoris->id == $_GET['id'] ){
             var_dump($favoris);
             
             unset($entry[$key]);
             setcookie("favoris",json_encode($entry));
        }
    }


    echo "<br />";echo "<br />";echo "<br />";
    var_dump($entry);
}
function my_favorite(){
        // appel du modele 
        require __DIR__.'/../Entity/Annonce.php'; 
        $entry = json_decode($_COOKIE['favoris']);

        include __DIR__.'/../../templates/ads_View.php';
}
function vider_fav(){
    setcookie('favoris',null);
}
function add_fav(){
    // appel du modele 
    require __DIR__.'/../Entity/Annonce.php'; 

    // Recuperer l'annonce depuis l'ID de l'URL
    $entry = Annonce::retrieveByPK($_GET['id']);
 

    // creez un tab en php
    require __DIR__.'/../Entity/Mesfav.php';
    $mesfavoris= new Mesfav();
   

    if ((!isset($_COOKIE['favoris'])))  {
         $mesfavoris->mesfav=[];
    }

    if (isset($_COOKIE['favoris']))  {
        $mesfavoris->mesfav=json_decode($_COOKIE['favoris']);

        // verifier si l'ID est deja present 

        foreach( $mesfavoris->mesfav as $favoris){
            if ($favoris->id == $_GET['id'] ){
                echo "je n'ajoute pas ce favoris car il est deja present dans mon tableau de favoris !";
                return;
            }
        }
    }
 
     
    array_push($mesfavoris->mesfav, $entry);    
    setcookie('favoris',json_encode($mesfavoris->mesfav));
 
 //   include __DIR__.'/../../templates/viewone.php';

}
function viewone(){
    // appel du modele 
    require __DIR__.'/../Entity/Annonce.php'; 

    // Recuperer l'annonce depuis l'ID de l'URL
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