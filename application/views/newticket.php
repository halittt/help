<html>

<h1>Nieuwe ticket maken</h1>


<h3>Categorie:</h3>
<form action="<?php echo site_url('User/dashboard')?>" method = "post">
  <input type="radio" name="category" value="Sql" checked> SQL<br>
  <input type="radio" name="category" value="PHP"> PHP<br>
  <input type="radio" name="category" value="C#"> C#<br><br>
  <h3>Wat is je vraag?</h3>
  <textarea name="question" rows="4" cols="50">

  </textarea><br><br>
  <input type="submit">
</form>


</html>