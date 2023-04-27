<?php
    include "db_conn.php";
    $conn = ouvreConnexion();
?>

<?php
    $ville = $_REQUEST['retraitVille'];

    $query = "DELETE FROM pays WHERE Ville='$ville';";

    if (mysqli_query($conn, $query)) {
        echo "$ville a bien été retirée de la base de données.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>