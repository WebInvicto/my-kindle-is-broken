<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kindle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="kindle">
            <div class="screen">
                <div class="header">
                    <a href="index.php">⌂ Home</a>
                    <div class="date">
                        10h25
                    </div>
                </div>
                <div class="screen_content">
                <?php require 'books.php'; ?>

                 <!-- Je check si l'index 'book' n'existe pas dans $_GET -->
                  <?php if(!$_GET['book']) : ?>
                  
                 <!-- Alors j'affiche le contenu d'acceuil avec les couvertures des livres -->

                  <h1 class="title">Ma liste de livres</h1>

                 
                  <div class="covers">
                    <?php 
                                      
                  
                    foreach($books as $index => $book) : 
                    
                    ?>
                       
                       <!-- Dans le href du lien ci-dessous, je passe $index en GET(?) -->
                        <a href="?book=<?= $index ?>"><img src="images/<?= $index ?>.jpg" alt="Couverture du livre <?= $book["titre"] ?>"></a>
                    
                    
                    <?php endforeach; ?>
                    
                    <button class="btn">Changer de vue</button>
                  </div>

                  <!-- Sinon si l'index 'book' existe dans $_GET et si sa valeur correspond à un index du tableau $book -->
                  <?php elseif(array_key_exists($_GET['book'], $books)) : 

                            // Alors je charge le fichier php correspondant
                            include 'livres/'. $_GET['book'] . '.php';

                        else :
                            // Sinon j'affiche un message d'erreur dans le cas ou l'utilisateur s'amuse à chercher une url inexistante
                            echo 'Votre livre n\'existe pas';

                        endif; 
                   ?>

                </div>
            </div>
            <h2>Kindle</h2>
        </div>
    </div>
</body>
</html>