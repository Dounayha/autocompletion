<!DOCTYPE html>
<html>
<head>
    <title>Recherche</title>
</head>
<body>
    <h1>Recherche</h1>
    <form action="recherche.php" method="GET">
        <input type="text" name="search" id="search" autocomplete="off" placeholder="Recherchez un élément...">
        <input type="submit" value="Rechercher">
    </form>

    <ul id="suggestions"></ul>

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
</body>
</html>
