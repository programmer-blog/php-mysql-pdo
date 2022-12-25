<?php 


require_once('index.php');

$title = 'Learn Machine learnig the easy way';
$price = 49.99;
$id = 32;

$sql = "UPDATE `books` SET `title`= :title,`price`= :price WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':title', $title);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':id', $id);

if($stmt->execute()) {
    echo 'Record updated successfully.';
} else {
    echo "An error occured";
}