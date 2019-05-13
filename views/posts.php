
<div><br><br><br><br>
<h1>Tidigare poster</h1>
<p></p>
</div>

<?php


$statement = $pdo->prepare("SELECT entries.title, entries.content, entries.createdAt, entries.entryID FROM entries
INNER JOIN users
ON entries.userID = users.userID 
WHERE users.userID = {$_SESSION['user']}
ORDER BY createdAt DESC");
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_CLASS);

foreach($data as $messages){
?><br><br>

<div class="thePost">
  <h2><?=$messages->title?></h2>
  <p><?=$messages->content?></p>
  <p><?=$messages->createdAt?></p>
  <p><?=$messages->entryID?></p>
  <form action='<?=$self?>' method='post'>
  <input type="hidden" value="<?=$messages['entryID']?>" name="entryID">
        <input type="submit" name="deletesubmit" class="deletepost" value="Delete Post">
      </form>

</div>

<?php 
    }
    if(isset($_POST['deletesubmit'])){
      $statement = $pdo->prepare(
        "DELETE FROM entries WHERE entryID = {$_POST['entryID']};"
      );
      $statement->execute();
    }
    ?>