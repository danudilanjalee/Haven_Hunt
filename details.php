<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Details - HavenHunt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="home.php">HavenHunt</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary text-white" href="details.php">Enter Details</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Details Form -->
    <section class="container py-5">
        <h2 class="text-center">Enter Your Property Details</h2>
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Property Title</label>
                <input type="text" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price (LKR)</label>
                <input type="number" class="form-control" id="price" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2023 HavenHunt. All rights reserved.</p>
    </footer>
</body>
</html>