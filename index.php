<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'animaux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
include '_header.php'
?>
<style>
    #animal-image {
        width: 250px;  
        height: 250px; 
        object-fit: cover; 
        display: none;
    }
</style>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Recherche d'animaux</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="input-group">
                    <!-- Barre de recherche -->
                    <input type="text" id="search" class="form-control" placeholder="Rechercher un animal">
                    
                    <!-- Bouton Rechercher -->
                    <button id="search-btn" class="btn btn-primary">Rechercher</button>
                </div>
                <ul id="suggestions" class="list-group mt-3"></ul>
            </div>
            
            <!-- Colonne pour l'image -->
            <div class="col-md-4">
                <img id="animal-image" src="" alt="Image de l'animal" class="img-fluid" style="display:none; max-width: 100%;">
            </div>
        </div>
    </div>

    <script>
        // Fonction pour la recherche (soit avec input soit avec le bouton)
        // Fonction pour la recherche (soit avec input soit avec le bouton)
function searchAnimal() {
    let query = document.getElementById('search').value;

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

            // Ajout de l'événement "mouseover" sur chaque élément de la liste
            const listItems = document.querySelectorAll('#suggestions li');
            listItems.forEach(item => {
                item.addEventListener('mouseover', function() {
                    const photoUrl = this.getAttribute('data-photo-url');
                    const imgElement = document.getElementById('animal-image');
                    if (photoUrl) {
                        imgElement.src = photoUrl;
                        imgElement.style.display = 'block';
                    } else {
                        imgElement.style.display = 'none';
                    }
                });
            });
        })
        .catch(error => console.error('Erreur:', error));
    } else {
        document.getElementById('suggestions').innerHTML = '';
        document.getElementById('animal-image').style.display = 'none'; // Cacher l'image si aucun résultat
    }
}

// Lancer la recherche quand on tape dans l'input
document.getElementById('search').addEventListener('input', searchAnimal);

// Lancer la recherche quand on clique sur le bouton
document.getElementById('search-btn').addEventListener('click', searchAnimal);

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
