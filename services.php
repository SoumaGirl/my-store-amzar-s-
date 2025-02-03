<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-image: url('4.jpg'); /* Background image */
            background-size: cover;
            background-position: center;
            color: #fff;
        }
    

        h2 {
            margin-top: 50px;
        }

        .service {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .service img {
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }

        .service p {
            max-width: 600px;
            margin: 0 auto;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column; /* Affichage des éléments de la liste verticalement */
        }

        nav li {
            margin-bottom: 10px; /* Ajoute un espacement entre chaque élément */
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="acceuil.php">Accueil</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="recommandations.php">Recommandations</a></li>
            </ul>
        </nav>
    </header>
    <h2>Nos Services</h2>

    <div class="service">
        <h3>Unisex Sandales</h3>
        <img src="1.jpg" alt="Unisex Sandales">
        <p>Les sandales unisexes sont des chaussures polyvalentes conçues pour convenir à la fois aux hommes et aux femmes. Leur design est simple et fonctionnel, offrant confort et style sans distinction de genre. Parfaites pour une utilisation décontractée en été, ces sandales s'adaptent à une variété de tenues avec leur esthétique neutre.</p>
    </div>

    <div class="service">
        <h3>Women's Sandales</h3>
        <img src="2.jpg" alt="Women's Sandales">
        <p>Les sandales pour femmes sont des chaussures élégantes conçues pour offrir confort et style. Elles sont parfaites pour les occasions décontractées ou formelles, ajoutant une touche féminine à n'importe quelle tenue estivale.</p>
    </div>

    <div class="service">
        <h3>Men's Sandales</h3>
        <img src="3.jpg" alt="Men's Sandales">
        <p>Les sandales pour hommes sont des chaussures robustes et confortables, idéales pour les journées chaudes. Elles offrent un style décontracté et polyvalent, parfait pour les loisirs en extérieur ou les vacances.</p>
    </div>
</body>
</html>