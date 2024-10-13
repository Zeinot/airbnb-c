@extends("layouts.custom.home")
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Airbnb Clone</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Ajoute du style simple pour ressembler à Airbnb */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .header {
            background-color: #FF5A5F;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .search-bar {
            text-align: center;
            margin: 50px 0;
        }
        .search-bar input {
            width: 60%;
            padding: 10px;
            border-radius: 50px;
            border: 1px solid #ccc;
        }
        .listings {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 0 auto;
            width: 90%;
        }
        .listing {
            background-color: white;
            margin: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 30%;
        }
        .listing img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .listing-details {
            padding: 15px;
        }
        .listing-details h3 {
            margin: 0;
        }
        .listing-details p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Bienvenue sur notre plateforme Airbnb Clone</h1>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Rechercher des destinations, des logements...">
    </div>

    <div class="listings">
        <!-- Exemple de listing -->
        <div class="listing">
            <img src="https://via.placeholder.com/300x200" alt="Image de la propriété">
            <div class="listing-details">
                <h3>Appartement à Paris</h3>
                <p>Prix : 80€ par nuit</p>
                <p>Localisation : Paris, France</p>
            </div>
        </div>
        <!-- Ajoute d'autres listings ici -->
    </div>
</body>
</html>

        </form>
    </section>

@endsection
