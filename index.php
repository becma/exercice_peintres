<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>De merveilleux peintres</title>
</head>
<body>
    <?php
        include 'db_conn.php';
        $conn = ouvreConnexion();

        // echo $conn;
    ?>
    <header>
        <h1>De merveilleux peintres</h1>
    </header>
    <main>
        <div class="painters-cards">
            <?php

                $query = "SELECT * FROM `Informations`;"; // définit la requête SQL que nous désirons effectuer

                $result = $conn->query($query); // effectue la requête SQL à la base de données définie sous la variable "$conn"

                if ($result->num_rows > 0) {
                    while ($peintre = $result->fetch_assoc()) { // crée une loop parcourant toutes les rows de la table (et donc nos peintres)
                        echo 
                        "<section> 
                            <div class=\"section-header\">
                                <div class=\"entete-g\">
                                    <h2>" . $peintre["prenom"] . "</h2> 
                                    <h3>" . $peintre["nom"] . "</h3>
                                </div>
                                <div class=\"entete-d\">
                                    <p>" . $peintre["annee_naissance"] . "</p>
                                    <p>". $peintre["ville_naissance"] . "</p>
                                </div>
                            </div>
                            <figure>
                                <img src=\"" . $peintre["image_url"] . "\" alt=\"\">
                                <figcaption>". $peintre["oeuvre_celebre"] . "</figcaption>
                            </figure>
                        </section>";
                    }
                }
            ?>
        </div>

        <form action="form_add.php" method="POST">
            <label for="villeAjout">Ville à ajouter</label>
            <input type="text" id="villeAjout" name="ajoutVille">
            <button type="submit">Soumettre</button>
        </form>
    </main>
</body>
</html>