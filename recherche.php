<?php
//include '_header.php';
$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = $pdo->prepare("SELECT * FROM elements WHERE nom LIKE ?");
    $query->execute(['%' . $search . '%']);
    $resultats = $query->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de recherche</title>
    <!-- Inclusion de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Résultats pour "<?php echo htmlspecialchars($search); ?>"</h1>
        <ul class="list-group mt-3">
            <?php foreach ($resultats as $resultat): ?>
                <li class="list-group-item">
                    <a href="element.php?id=<?php echo $resultat['id']; ?>" class="text-decoration-none">
                        <?php echo htmlspecialchars($resultat['nom']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Inclusion de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
