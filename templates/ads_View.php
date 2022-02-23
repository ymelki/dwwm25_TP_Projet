<?php include "header.php" ?>
    <h1>Ads</h1>
    
    <div class="container">
        <div class="row">
    <?php foreach ($entry as $monannonce ) { ?>
        <?php 
            // si l'image est vide dans la BD alors on place une image par défaut ! 
            if ($monannonce->image=="") {  $monannonce->image="e-learning-18-534347.png"; } ?>
    

            
           <div class="card col-sm" style="width: 18rem;">
                <img src="http://localhost:8000/img/<?=$monannonce->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <a href="/adone?id=<?=$monannonce->id ?>"><p class="card-text">Annonce : <?=$monannonce->titre ?></a></p>
                    <p class="card-text">Annonce : <?=$monannonce->message ?></p>
                    <p class="card-text"><a href="ads_fav?id=<?=$monannonce->id ?>">Ajouter au favoris</a></p>
                    <p class="card-text"><a href="remove_fav?id=<?=$monannonce->id ?>">Supprimer des favoris</a></p>

                </div>
            </div>
      
    <?php } ?> 
    
        </div>
    </div>
<?php include "footer.php" ?>