<?php

    require_once 'db.php';
    $sql = "SELECT * FROM form";
    $statement = $pdo->query($sql);
    $form = $statement->fetchAll();

    if(isset($_POST['firstname']) && isset($_POST['email'])){
      $firstname=$_POST['firstname'];
      $email=$_POST['email'];
      $company=$_POST['company'];
      $description=$_POST['description'];
      $sql = "INSERT INTO form VALUES (null, '$firstname','$email', '$company', '$description')";
      $pdo->exec($sql);
      }foreach($form as $forms) {
      echo '<li>'.$forms['firstname'] . ' ' . $forms['email'].'</li>';}

?>

<form method="POST" action="">
<div class="form-group">
    <label for="firstname">Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="company">Company</label>
    <input type="text" name="company" class="form-control" id="company">
  </div>
  <div class="form-group">
    <label for="description">Describe your project</label>
    <input type="text" name="description" class="form-control" id="description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>