<?php
// Database connection
$host = "sql200.infinityfree.com";
$username = "if0_36329016";
$password = "W61DxPiDLMGDqN3";
$database = "if0_36329016_url_short_t";

// Validate the input
if (!isset($_GET['code']) || empty($_GET['code'])) {
    http_response_code(400);
    die("Error: Short code is required");
}
$shortCode = $_GET['code'];

// Create a prepared statement to prevent SQL injection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    http_response_code(500);
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT long_url FROM urls WHERE short_code = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    http_response_code(500);
    die("Error: " . $conn->error);
}
$stmt->bind_param("s", $shortCode);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Redirect to the original long URL
    $stmt->bind_result($longURL);
    $stmt->fetch();
    header("Location: $longURL");
    exit();
} else {
    http_response_code(404);
    echo "URL not found";
}

$stmt->close();
$conn->close();
?>
