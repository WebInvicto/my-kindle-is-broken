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

                    
                    <?php if (!$_GET['book']) : ?>

                       

                        <h1 class="title">Ma liste de livres</h1>


                        <div class="covers">
                            <?php


                            foreach ($books as $index => $book) :

                            ?>

                               
                                <a href="?book=<?= $index ?>"><img src="images/<?= $index ?>.jpg" alt="Couverture du livre <?= $book["titre"] ?>"></a>


                            <?php endforeach; ?>
                        </div>

                        <!-- J'ajoute une div list qui sera en display none par défaut. -->
                        <!-- Je gère son apparition ou sa disparition en JS -->
                      
                        <ul class="list">   
                            <?php

                            // La boucle est la même que dans la div covers
                            foreach ($books as $index => $book) :

                            ?>
                                    <!-- Il n'y a que l'affichage qui change -->
                                    <li>
                                        <a href="?book=<?= $index ?>"><?= $book['titre'];?></a> -
                                        <span class="author"><?= $book['auteur']; ?></span><span class="year"><?= $book['annee']; ?></span> 
                                    </li>
                                



                            <?php endforeach; ?>
                        </ul>

                            <button class="btn">Changer de vue</button>
                              
                    <?php elseif (array_key_exists($_GET['book'], $books)) :

                        
                        include 'livres/' . $_GET['book'] . '.php';

                    else :
                        
                        echo 'Votre livre n\'existe pas';

                    endif;
                    ?>

                </div>
            </div>
            <h2>Kindle</h2>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>