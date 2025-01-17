<?php

include('connection/connection.php');


$location = isset($_GET['location']) ? $_GET['location'] : '';
$min_price = isset($_GET['min_price']) ? $_GET['min_price'] : '';
$max_price = isset($_GET['max_price']) ? $_GET['max_price'] : '';
$property_type = isset($_GET['property_type']) ? $_GET['property_type'] : '';


$sql = "SELECT p.Property_ID, p.Property_Name, p.Description, p.Price, p.Image_Name, pt.Type_Name
        FROM properties p
        JOIN property_types pt ON p.Type_ID = pt.Type_ID
        WHERE 1";


if ($location != '') {
    $sql .= " AND p.Title LIKE '%" . $location . "%'"; 
}

if ($min_price != '') {
    $sql .= " AND p.Price >= " . $min_price; 
}

if ($max_price != '') {
    $sql .= " AND p.Price <= " . $max_price; 
}

if ($property_type != '') {
    $sql .= " AND p.Type_ID = '" . $property_type . "'"; 
}


$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HavenHunt - Real Estate Listings</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        header {
            background-image: url('images/unnamed.jpg'); 
            background-size: cover;
            background-position: center;
            color: white;
        }

        header .container {
            background: rgba(0, 0, 0, 0.6); 
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
                <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li> <!-- Link to About Us -->
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
    <form class="row g-3" method="GET" action="main.php">
        <div class="col-md-3">
            <input type="text" class="form-control" name="location" value="<?php echo $location; ?>" placeholder="Location">
        </div>
        <div class="col-md-3">
            <input type="number" class="form-control" name="min_price" value="<?php echo $min_price; ?>" placeholder="Min Price">
        </div>
        <div class="col-md-3">
            <input type="number" class="form-control" name="max_price" value="<?php echo $max_price; ?>" placeholder="Max Price">
        </div>
        <div class="col-md-3">
            <select class="form-select" name="property_type">
                <option value="">Select Property Type</option>
                <option value="1" <?php echo ($property_type == '1') ? 'selected' : ''; ?>>House</option>
                <option value="2" <?php echo ($property_type == '2') ? 'selected' : ''; ?>>Apartment</option>
                <option value="3" <?php echo ($property_type == '3') ? 'selected' : ''; ?>>Land</option>
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</section>

<!-- Listings Section -->
<section class="container py-5" id="properties">
    <h2 class="text-center">Available Properties</h2>
    <div class="row">
        <?php
       
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="images/' . $row['Image_Name'] . '" class="card-img-top" height="300px" alt="' . $row['Property_Name'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['Property_Name'] . '</h5>
                                <p class="card-text">' . $row['Description'] . '</p>
                                <p class="card-text"><strong>LKR ' . number_format($row['Price'], 2) . '</strong></p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                      </div>';
            }
        } else {
            echo '<p class="text-center">No properties found based on your criteria.</p>';
        }
        ?>
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

<?php

?>
