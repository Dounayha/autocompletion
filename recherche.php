<?php
$pdo = new PDO('mysql:host=localhost;dbname=autocompletion', 'root', '');

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = $pdo->prepare("SELECT * FROM elements WHERE nom LIKE ?");
    $query->execute(['%' . $search . '%']);
    $resultats = $query->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultats de recherche</title>
</head>
<body>
    <h1>Résultats pour "<?php echo htmlspecialchars($search); ?>"</h1>
    <ul>
        <?php foreach ($resultats as $resultat): ?>
            <li><a href="element.php?id=<?php echo $resultat['id']; ?>"><?php echo $resultat['nom']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
