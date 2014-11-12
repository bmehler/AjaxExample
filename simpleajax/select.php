<?php
$id = $_POST['id'];
$pdo = new PDO('mysql:host=localhost;dbname=pixel', 'root', '');
$query = 'SELECT * FROM personen WHERE id = :id';
$stmt  = $pdo->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo '<table><tr>';
echo '<td>ID</td>';
echo '<td>Name</td>';
echo '<td>Vorname</td>';
echo '<td>Email</td></tr><tr>';
echo '<td>'.$result['id'].'</td>';
echo '<td>'.$result['name'].'</td>';
echo '<td>'.$result['vorname'].'</td>';
echo '<td>'.$result['email'].'</td>';
echo '</tr></table>';
?>