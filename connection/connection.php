

    //$hostname = "127.0.0.1";
    //$username = "root";
    //$password = "mariadb";
    //$dbname = "havenhunt";

    //$connection = mysqli_connect($hostname,$username,$password,$dbname);


    <?php
// Database connection
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "haventhunt";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Query to check the user credentials
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($pass, $user['password'])) {
            echo "Login successful! Welcome, " . $user['email'];
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
    $conn->close();
}
?>


