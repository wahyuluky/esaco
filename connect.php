<?php
$servername = "localhost"; // or your server name
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "esaco"; // your database name
$charset = 'utf8mb4';

// Menyiapkan DSN (Data Source Name)
$dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Membuat instance PDO baru
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    // Menangani kesalahan koneksi
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch articles
$sql = "SELECT * FROM articles ORDER BY date DESC";
$result = $conn->query($sql);

?>
