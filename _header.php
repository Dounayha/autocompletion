<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découverte des animaux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles pour le header avec une image en arrière-plan */
        .header {
            background-image: url('https://i.pinimg.com/originals/3f/99/d9/3f99d9e0d8bbe3576b7d3206dc440839.jpg'); /* Image fournie */
            background-size: cover;
            background-position: center;
            height: 200px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        /* Ajustement sur petits écrans */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header avec image en arrière-plan -->
    <header class="header">
        <div class="container">
            <h1>Venez découvrir les animaux</h1>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
