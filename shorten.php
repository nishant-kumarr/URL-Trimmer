<?php
// Database connection
$host = "sql200.infinityfree.com";
$username = "if0_36329016";
$password = "W61DxPiDLMGDqN3";
$database = "if0_36329016_url_short_t";

// Validate and sanitize the input
if (!isset($_POST['long_url']) || empty($_POST['long_url'])) {
    die("Error: Long URL is required");
}
$longURL = filter_var($_POST['long_url'], FILTER_SANITIZE_URL);
if (!$longURL) {
    die("Error: Invalid long URL");
}

// Generate a unique short code using SHA-256
$shortCode = substr(hash('sha256', $longURL), 0, 6);

// Create a prepared statement to prevent SQL injection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO urls (long_url, short_code) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Error: " . $conn->error);
}
$stmt->bind_param("ss", $longURL, $shortCode);
if (!$stmt->execute()) {
    die("Error: " . $stmt->error);
}
$stmt->close();

echo "http://tinyurl.rf.gd/$shortCode";

$conn->close();
?>
