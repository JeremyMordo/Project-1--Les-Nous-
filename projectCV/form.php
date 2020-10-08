<?php
  require_once '_db.php';

  if(isset($_POST['firstname'])<>'' && isset($_POST['email'])<>'' && isset($_POST['company'])<>'' && isset($_POST['project'])<>''){
    $query = "SELECT * FROM form WHERE firstname=:firstname AND email=:email AND company=:company AND project=:project";
    $statement = $pdo->prepare($query);    
    $statement->bindValue('firstname', $_POST['firstname'], \PDO::PARAM_STR);
    $statement->bindValue('email', $_POST['email'], \PDO::PARAM_STR);
    $statement->bindValue('company', $_POST['company'], \PDO::PARAM_STR);
    $statement->bindValue('project', $_POST['project'], \PDO::PARAM_STR);
    $statement->execute();
    if(!$statement->fetch()){
      $query = "INSERT INTO form VALUES (null, '".$_POST['firstname']."', '".$_POST['email']."', '".$_POST['company']."', '".$_POST['project']."')))";
      $statement = $pdo->prepare($query);
      $statement->execute();
    }
  }
    //select allform
  $query = 'SELECT * FROM form';
  $allform = $pdo->query($query)->fetchAll();

    echo '<p>These companies have already been hacked :</p>';
    echo '<ul>';
    foreach($allform as $forms) 
      {
      echo '<li> '.$forms['company'] . ' ' . $forms['email'].'</li>';
    }
    echo '</ul>';
  // header(urlpagehack)
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
    <label for="project">Describe your project</label>
    <input type="text" name="project" class="form-control" id="project">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
