<?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

// Initialiser l'animal à afficher
$animal = null;

if (isset($_GET['id'])) {
    // Récupérer l'ID de l'animal sélectionné
    $id = (int) $_GET['id'];

    // Préparer et exécuter la requête pour récupérer les informations de l'animal
    $query = $pdo->prepare("SELECT * FROM elements WHERE id = ?");
    $query->execute([$id]);
    $animal = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $animal ? htmlspecialchars($animal['nom']) : 'Aucun animal trouvé'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/recherche.css">
</head>
<body>
    <div class="container mt-4">
        <?php if ($animal): ?>
            <!-- Affichage des détails de l'animal -->
            <h1 class="text-center"><?php echo htmlspecialchars($animal['nom']); ?></h1>
            <ul class="list-group mt-3">
                <li class="list-group-item">
                    <h5>Description</h5>
                    <p><?php echo htmlspecialchars($animal['description']); ?></p>
                </li>
                <li class="list-group-item">
                    <img src="<?php echo htmlspecialchars($animal['photo_url']); ?>" alt="<?php echo htmlspecialchars($animal['nom']); ?>" style="width: 100px;">
                </li>
            </ul>
        <?php else: ?>
            <!-- Si l'animal n'existe pas ou n'a pas été trouvé -->
            <p class="text-center">Aucun animal trouvé pour cet ID.</p>
        <?php endif; ?>
    </div>

    <!-- Inclusion de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
