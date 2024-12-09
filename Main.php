<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HavenHunt - Real Estate Listings</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Header Background Image */
        header {
            background-image: url('unnamed.jpg'); /* Replace with your background image */
            background-size: cover;
            background-position: center;
            color: white;
        }

        header .container {
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent overlay for better readability */
            padding: 2rem;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">HavenHunt</a>
        <img src="images/Havent Hunt.jpg" height="150" alt="HavenHunt Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li> <!-- Link to Home -->
                <li class="nav-item"><a class="nav-link" href="#listings">Listings</a></li>
                <li class="nav-item"><a class="nav-link" href="#lands">Lands</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> <!-- Link to Contact -->
                <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="login.php">Login/Register</a></li>
                <li class="nav-item"><a class="btn btn-success ms-2 text-white" href="details.php">Enter Details</a></li> <!-- Link to Details -->
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="text-center py-5">
    <div class="container">
        <h1>Welcome to HavenHunt</h1>
        <p class="lead">Your platform for buying, renting, and selling properties.</p>
        <a href="#listings" class="btn btn-light btn-lg">Browse Listings</a>
    </div>
</header>

<!-- Search Filter -->
<section class="container py-5">
    <h2 class="text-center">Search Properties</h2>
    <form class="row g-3">
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Location">
        </div>
        <div class="col-md-3">
            <input type="number" class="form-control" placeholder="Min Price">
        </div>
        <div class="col-md-3">
            <input type="number" class="form-control" placeholder="Max Price">
        </div>
        <div class="col-md-3">
            <select class="form-select">
                <option selected>Property Type</option>
                <option value="1">House</option>
                <option value="2">Apartment</option>
                <option value="3">Land</option>
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</section>

<!-- Listings Section -->
<section id="listings" class="container py-5">
    <h2 class="text-center">Available Properties</h2>
    <div class="row">
        <!-- Property Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/Coral Homes.jpg" class="card-img-top" height="300px" alt="Modern Family Home">
                <div class="card-body">
                    <h5 class="card-title">Modern Family Home</h5>
                    <p class="card-text">Located in a serene neighborhood with great amenities.</p>
                    <p class="card-text"><strong>LKR 75,000,000</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Property Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/triton-luxury-villa.jpg" class="card-img-top" height="300px" alt="Luxury Villa">
                <div class="card-body">
                    <h5 class="card-title">Luxury Villa</h5>
                    <p class="card-text">A spacious villa with stunning ocean views and a private pool.</p>
                    <p class="card-text"><strong>LKR 450,000,000</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Property Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/Midtown.jpg" class="card-img-top" height="300px" alt="City Apartment">
                <div class="card-body">
                    <h5 class="card-title">City Apartment</h5>
                    <p class="card-text">A modern apartment in the heart of the city with top-notch facilities.</p>
                    <p class="card-text"><strong>LKR 200,000,000</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lands Section -->
<section id="lands" class="container py-5">
    <h2 class="text-center">Lands for Sale</h2>
    <div class="row">
        <!-- Land Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/Great_Farm_Lands.jpg" class="card-img-top" height="300px" alt="Farm Land">
                <div class="card-body">
                    <h5 class="card-title">Farm Land</h5>
                    <p class="card-text">A vast expanse of fertile land perfect for farming or investment.</p>
                    <p class="card-text"><strong>LKR 25,000,000</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Land Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/Vacant Lands.jpg" class="card-img-top" height="300px" alt="Beachfront Land">
                <div class="card-body">
                    <h5 class="card-title">Beachfront Land</h5>
                    <p class="card-text">Prime beachfront property perfect for commercial or private use.</p>
                    <p class="card-text"><strong>LKR 50,000,000</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Land Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="images/Lands.jpg" class="card-img-top" height="300px" alt="Residential Land">
                <div class="card-body">
                    <h5 class="card-title">Residential Land</h5>
                    <p class="card-text">Perfectly located land for residential development in a peaceful area.</p>
                    <p class="card-text"><strong>LKR 40,000,000</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact/Message Form -->
<section id="contact" class="container py-5">
    <h2 class="text-center">Contact Seller</h2>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p>&copy; 2023 HavenHunt. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>