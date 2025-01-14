<?php
include 'db.php';

$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 10"; // Povuci 10 nasumičnih pitanja
$stmt = $pdo->prepare($sql);
$stmt->execute();
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($questions);
?>
