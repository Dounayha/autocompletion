<?php
$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    // Rechercher les éléments qui commencent par la recherche
    $query_exact = $pdo->prepare("SELECT * FROM elements WHERE nom LIKE ? ORDER BY nom ASC");
    $query_exact->execute([$search . '%']);
    $resultats_exact = $query_exact->fetchAll(PDO::FETCH_ASSOC);

    // Rechercher les éléments qui contiennent la recherche (mais ne commencent pas par)
    $query_contains = $pdo->prepare("SELECT * FROM elements WHERE nom LIKE ? AND nom NOT LIKE ? ORDER BY nom ASC");
    $query_contains->execute(['%' . $search . '%', $search . '%']);
    $resultats_contains = $query_contains->fetchAll(PDO::FETCH_ASSOC);

    echo '<ul>';
    // Résultats exacts
    if (count($resultats_exact) > 0) {
        foreach ($resultats_exact as $resultat) {
            echo '<li>' . $resultat['nom'] . '</li>';
        }
        echo '<hr>';
    }

    // Résultats contenant la recherche
    if (count($resultats_contains) > 0) {
        foreach ($resultats_contains as $resultat) {
            echo '<li>' . $resultat['nom'] . '</li>';
        }
    }

    echo '</ul>';
}
?>
