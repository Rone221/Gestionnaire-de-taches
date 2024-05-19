 <?php
    //  Declaration d'un tableau indexé qui va contenir les taches
    $taches = [];

    //Verification de l'existence des champs du formulaire
    if (isset($_POST['tache']) && isset($_POST['description'])) {
        $tache = $_POST['tache'];
        $description = $_POST['description'];

        //Creation d'un tableau associatif qui a pour premier clé "tache" deuxieme "description"
        $element = [
            $tache => $description
        ];
        //Ajout du tableau associatif "element" dans le tableau indexé "tache"
        array_push($taches, $element);
    }

    if (isset($_GET["suppression"]) && isset($_POST['tache'])) {
        unset($taches[$_POST['tache']]);

        # code...
    }

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Liste de Taches</title>
     <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/bootstrap-5.2.3/dist/css/bootstrap.min.css">
 </head>

 <body>

     <div class="container-fluid  pt-5  ">
         <div class="w-25 mx-auto  ">
             <h2 class="text-center">Linga wara def🗒️</h2>

             <form action="index.php" method="POST">

                 <div class=" mb-3">
                     <label for="tache" class="form-label ">Tache</label>
                     <input type="text" name="tache" class="form-control" id="tache" placeholder="Veuillez ajouter une tache">
                 </div>
                 <div class="mb-3">
                     <label for="description" class="form-label">Description</label>
                     <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                 </div>

                 <div class="col-auto ">
                     <input type="submit" class="btn btn-success  mb-3 mx-auto px-4 py-2 d-block  " id="submit" value="Ajouter" />
                 </div>

             </form>
         </div>
         <hr>

         <div class="row" id="row">
             <!-- debut 1ere tache -->

             <?php
                for ($i = 0; $i < count($taches); $i++) {


                    foreach ($taches[$i] as $key => $value) {
                        # code...



                ?>


                     <div class="col-3">


                         <div class="card" style="width: 18rem;">
                             <div class="card-body">
                                 <h5 class="card-title"> <?php echo ($key); ?></h5>
                                 <p class="card-text"><?php echo ($value); ?></p>
                                 <form action="index.php?suppression=1" method="post">
                                     <input value="Supprimer" type="submit" class="btn btn-danger" />
                                     <input type="hidden" name="tache" value="<?php echo ($i); ?>" />
                                 </form>
                             </div>
                         </div>

                 <?php

                    }
                }
                    ?>


                     </div>
                     <!-- fin 1ere tache -->




         </div>


     </div>



     <script src="./assets/bootstrap-5.2.3/dist/js/bootstrap.min.js"></script>
     <!-- <script src="./assets/js/script.js"></script> -->
 </body>

 </html>