<?php
$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $pdo->prepare("SELECT * FROM elements WHERE id = ?");
    $query->execute([$id]);
    $element = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($element['nom']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center"><?php echo htmlspecialchars($element['nom']); ?></h1>
        <p class="lead text-center">Informations sur cet élément...</p>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Détails</h5>
                <p class="card-text">
                    <!-- Ajoutez ici des informations détaillées sur l'élément -->
                    <?php echo htmlspecialchars($element['details'] ?? 'Aucune information disponible.'); ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Inclusion de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

