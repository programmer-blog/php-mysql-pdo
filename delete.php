<?php 

require_once('index.php');

$sql = "DELETE FROM books WHERE id = :id";

$id = 32;

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

if($stmt->execute()) {
    echo "<br />Record deleted successfully.";
} else {
    echo "<br />Error in deleting the record";
}