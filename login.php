<?php
    require_once 'connection/connection.php';
    session_start();
    if(isset($_POST["login"])){
        $email = mysqli_real_escape_string($connection,$_POST["email"]);
        $password = mysqli_real_escape_string($connection,$_POST["password"]);

        if($email != "" && $password != ""){
            $sql1 = "SELECT * FROM login WHERE email='{$email}' AND password='{$password}'";

            $result_set1 = mysqli_query($connection,$sql1);

            if(mysqli_num_rows($result_set1) == 1){
                $row = mysqli_fetch_assoc($result_set1);

                $_SESSION['user_id'] = $row['userid'];
                header("Location: Main.php");
            }        
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register - HavenHunt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Login/Register Form -->
<section class="container py-5">
    <h2 class="text-center">Login or Register</h2>
    <div class="row">
        <div class="col-md-6">
            <h3>Login</h3>
            <form method="POST" action="main.php">
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="loginEmail" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="loginPassword" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Register</h3>
            <form method="POST" action="register.php">
                <div class="mb-3">
                    <label for="registerName" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="registerName" required>
                </div>
                <div class="mb-3">
                    <label for="registerEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="registerEmail" required>
                </div>
                <div class="mb-3">
                    <label for="registerPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="registerPassword" required>
                </div>
                <button type="submit" name="register" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
