<?php 


 require_once('index.php');

 $sql = "SELECT id, title, price, author_name, category FROM books ";

 $stmt = $conn->prepare($sql);

 $stmt->execute();
 echo "<h1>Book Records</h1>";
 if($stmt->rowCount()) {
     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<br /> ID: ".$row['id']." Book Name: ".$row['title']." Author: ".$row['author_name'].
        " Category:".$row['category'];
     }
 } else {
     echo "No record found";
 }