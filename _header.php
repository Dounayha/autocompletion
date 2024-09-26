<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site sur les animaux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light py-3">
        <div class="container">
            <h1 class="text-center">En savoir plus sur les animaux</h1>
        </div>
    </header>

    <main class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <form class="d-flex justify-content-center mb-3" action="recherche.php" method="GET">
                <input class="form-control me-2" type="search" name="search" id="search" placeholder="Rechercher un animal..." aria-label="Rechercher" autocomplete="off">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
            <ul id="suggestions" class="list-group mt-2" style="position: absolute; width: 300px; left: 50%; transform: translateX(-50%);"></ul>
        </div>
    </main>

    <script>
        document.getElementById('search').addEventListener('input', function() {
            let query = this.value;

            if (query.length > 0) {
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
