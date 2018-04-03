<?php
include 'DBConnection.php';
$conn = getDataBaseconnection("plant");
$sql = "SELECT * from plant.type";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchALL(PDO::FETCH_ASSOC);
print_r ($records);


?>