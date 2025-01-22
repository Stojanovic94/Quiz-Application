<?php
include 'db.php';

// Povuci 10 nasumičnih pitanja
$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 10";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($questions);
?>
