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
                  <!-- Ajout du h1 -->
                  <h1 class="title">Ma liste de livres</h1>

                  <!-- Ajout d'une div qui va me permettre de gérer la mise en forme des images-->
                  <div class="covers">
                    <?php 
                    
                    // Je dois récupérer le fichier dans lequel se trouve la variable dont j'ai besoin.
                    require 'books.php'; 
                    
                    // Ensuite je dois creer une image cliquable (anticipation etape 2) pour chaque élément du tableau $books.
                    // Je creer donc une boucle foreach.
                    foreach($books as $index => $book) : 
                    
                    ?>
                        <!-- A chaque itération, un lien contenant l'image de l'élément courant sera créé --> 
                        <a href="#"><img src="images/<?= $index ?>.jpg" alt="Couverture du livre <?= $book["titre"] ?>"></a>
                    
                    <!-- Je n'oublie pas de fermer la boucle -->
                    <?php endforeach; ?>

                    <!-- J'ajoute le bouton pour changer la vue (non fonctionnel pour l'instant) -->
                    <button class="btn">Changer de vue</button>
                  </div>
                    

                </div>
            </div>
            <h2>Kindle</h2>
        </div>
    </div>
</body>
</html>