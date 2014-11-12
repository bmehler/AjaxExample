<?php
$pdo = new PDO('mysql:host=localhost;dbname=pixel', 'root', '');
$query = 'SELECT * FROM personen';
$stmt  = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>