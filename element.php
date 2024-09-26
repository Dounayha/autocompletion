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
<html>
<head>
    <title><?php echo $element['nom']; ?></title>
</head>
<body>
    <h1><?php echo $element['nom']; ?></h1>
    <p>Informations sur cet élément...</p>
</body>
</html>
