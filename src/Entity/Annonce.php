<?php

/*MAPPING de l'ensemble de la table USER */
include_once __DIR__.'/../../vendor/SimpleOrm.class.php';

class Annonce extends SimpleOrm {
    public $id;
    public $titre;
    public $message;
    public $image;
}