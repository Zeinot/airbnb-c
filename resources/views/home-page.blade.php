<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb Clone</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #484848;
        }
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header styles */
        header {
            background-color: #fff;
            border-bottom: 1px solid #e4e4e4;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        .logo {
            color: #ff5a5f;
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            display: flex;
            list-style-type: none;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a:hover {
            color: #ff5a5f;
        }

        /* Hero section styles */
        .hero {
            background-image: url('https://a0.muscache.com/im/pictures/e4a2a61c-589f-4e49-b3b8-968a6bc23389.jpg?im_w=2560');
            background-size: cover;
            background-position: center;
            height: 70vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .search-form {
            background-color: #fff;
            border-radius: 30px;
            padding: 10px;
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }
        .search-input {
            flex-grow: 1;
            border: none;
            padding: 10px;
            font-size: 16px;
        }
        .search-button {
            background-color: #ff5a5f;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
        }
        .search-button:hover {
            background-color: #ff3b3f;
        }

        /* Listings section styles */
        .listings {
            padding: 60px 0;
        }
        .listings h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .listings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }
        .listing-card {
            border: 1px solid #e4e4e4;
            border-radius: 12px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }
        .listing-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .listing-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .listing-info {
            padding: 20px;
        }
        .listing-info h3 {
            margin-bottom: 10px;
        }
        .listing-info p {
            margin-bottom: 10px;
            color: #767676;
        }
        .listing-price {
            font-weight: bold;
        }
        .view-details {
            display: inline-block;
            background-color: #ff5a5f;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .view-details:hover {
            background-color: #ff3b3f;
        }

        /* Footer styles */
        footer {
            background-color: #f7f7f7;
            padding: 60px 0;
        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .footer-section ul {
            list-style-type: none;
        }
        .footer-section ul li {
            margin-bottom: 10px;
        }
        .footer-section ul li a:hover {
            text-decoration: underline;
        }
        .copyright {
            text-align: center;
            margin-top: 40px;
            color: #767676;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }
            .listings-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">Airbnb Clone</div>
                <nav>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/listings') }}">Listings</a></li>
                        @auth
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" style="background: none; border: none; cursor: pointer;">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Find your next stay</h1>
            <form action="{{ url('/listings') }}" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Where are you going?" class="search-input">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
    </section>

    <section class="listings">
        <div class="container">
            <h2>Discover our listings</h2>
            <div class="listings-grid">
                @foreach ($listings as $listing)
                    <div class="listing-card">
                        <img src="{{ $listing->photos->first()->path ?? 'https://via.placeholder.com/300x200' }}" alt="{{ $listing->title }}">
                        <div class="listing-info">
                            <h3>{{ $listing->title }}</h3>
                            <p>{{ Str::limit($listing->description, 100) }}</p>
                            <p class="listing-price">{{ $listing->price }}€ / night</p>
                            <a href="{{ url('/listings/' . $listing->id) }}" class="view-details">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Investors</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Community</h3>
                    <ul>
                        <li><a href="#">Diversity & Belonging</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">Associates</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Host</h3>
                    <ul>
                        <li><a href="#">Host your home</a></li>
                        <li><a href="#">Host an experience</a></li>
                        <li><a href="#">Resource Center</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Cancellation options</a></li>
                        <li><a href="#">Trust & Safety</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                © 2024 Airbnb Clone. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
