<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
    <!-- Inclusion de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include '_header.php'; ?>

<div class="container mt-4">
    <input type="text" id="search" class="form-control" placeholder="Rechercher un animal...">
    <ul id="suggestions" class="list-group mt-2"></ul>
</div>

<script>
    document.getElementById('search').addEventListener('input', function(){
        let query = this.value;

        if(query.length > 0){
            fetch('autocomplete.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'search=' + encodeURIComponent(query)
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('suggestions').innerHTML = data;
            })
            .catch(error => console.error('Erreur:', error));
        } else {
            document.getElementById('suggestions').innerHTML = '';
        }
    });
</script>

<!-- Inclusion de Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
