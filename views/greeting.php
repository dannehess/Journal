<h1 id="welcome">Välkommen</h1>

<?php

if(isset($_GET['action'])) {
if($_GET['action'] == 'addpost') {
          $statement = $pdo->prepare(
            "INSERT INTO entries (title,content,createdAt,userID)
            VALUES (:title, :content, :createdAt, :userID)");
          $statement->execute([
            ":title" => $_POST['title'],
            ":content" => $_POST['content'],
            ":createdAt" => date('Y-m-d-G-i-s'),
            ":userID" => $_SESSION['user']
          ]);
    }    
}
    ?>