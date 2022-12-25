<?php 

    //Db connection code
    require_once('index.php');

    $sql =  "INSERT INTO books (`title`, `description`, `author_name`, `price`, `ISBN`, `category`)
    VALUES (:title, :detail, :author, :price, :isbn, :category) ";

    $title = 'Machine Learning';
    $desc = 'Machine Learning for beginners';
    $author = 'author'; 
    $price = '50.0';
    $isbn = '123-ABZ-980'; 
    $category = 'artificial-intelligence';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':detail', $desc);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':isbn', $isbn);
    $stmt->bindParam(':category', $category);

    if($stmt->execute()) {
        echo "<br />Record inserted successfully";
    } else {
        echo "Error in record insertion.";
    }