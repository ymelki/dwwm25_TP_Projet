<?php include "header.php" ?>
    <h1>Ads</h1>
    
    <div class="container">
        <div class="row">
        <?php 
            // si l'image est vide dans la BD alors on place une image par défaut ! 
            if ($entry->image=="") {  $entry->image="e-learning-18-534347.png"; } ?>
    

            
           <div class="card col-sm" style="width: 18rem;">
                <img src="http://localhost:8000/img/<?=$entry->image ?>" width="300px" class="card-img-top" alt="...">
                <div class="card-body">
                <a href="/adone?id=<?=$entry->id ?>"><p class="card-text">Annonce : <?=$entry->titre ?></a></p>
                    <p class="card-text">Annonce : <?=$entry->message ?></p>
                </div>
            </div>
      
    
        </div>
    </div>
<?php include "footer.php" ?>