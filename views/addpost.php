<button id="newPostBtn">Lägg till en ny post</button><br><br><br>
<div id="newPost">
<form action="?action=addpost" method="POST">
  <label for="title">Titel:</label>
  <input type="text" name="title">
  <br>
  <label for="content">Inlägg:</label>
  <textarea name="content"></textarea>
  <br>
  <input type="submit" value="Lägg till">
</form>
</div>
