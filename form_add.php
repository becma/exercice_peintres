<?php
    include "db_conn.php";
    $conn = ouvreConnexion();
?>

<?php
    $ville = $_REQUEST["ajoutVille"];

    $query = "INSERT INTO pays VALUES (DEFAULT, '$ville')";

    if (mysqli_query($conn, $query)) {
        echo "$ville a bien été ajoutée à la base de données.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>