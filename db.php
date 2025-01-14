<?php
$host = 'localhost';
$dbname = 'quiz_system';
$username = 'root';
$password = ''; // Prazno polje za XAMPP podrazumevani korisnik

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Konekcija sa bazom nije uspela: " . $e->getMessage());
}
?>
