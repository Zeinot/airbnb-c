@extends("layouts.home")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Airbnb Clone</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('home.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo">
            <i class="fab fa-airbnb"></i> airbnb
        </div>
        <nav class="nav-links">
            <a href="#">Hébergements</a>
            <a href="#">Expériences</a>
            <a href="#">En ligne</a>
        </nav>
    </header>

    <div class="search-bar">
        <input type="text" placeholder="Commencez votre recherche">
        <div class="search-icon">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <div class="listings">
        @foreach($listings as $listing)
        <div class="listing">
            <img src="{{ $listing->image_url }}" alt="{{ $listing->title }}">
            <div class="listing-details">
                <h3>{{ $listing->title }}</h3>
                <p>{{ $listing->description }}</p>
                <p class="price">{{ $listing->price }}€ par nuit</p>
            </div>
        </div>
        @endforeach
    </div>

    <footer class="footer">
        <p>© 2024 Airbnb Clone, Inc. · Confidentialité · Conditions générales · Plan du site</p>
    </footer>
</body>
</html>
@endsection
