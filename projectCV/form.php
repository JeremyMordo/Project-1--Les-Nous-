<?php
  require_once '_db.php';

  if(@$_POST['firstname']<>'' && @$_POST['company']<>''){     
    
    $query = 'SELECT * FROM form WHERE firstname=:firstname AND company=:company';
    $statement = $pdo->prepare($query);
    $statement->bindValue('firstname', $_POST['firstname']);
    $statement->bindValue('company', $_POST['company']);
    $statement->execute();
    if(!$statement->fetch()){
      
        $query = "INSERT INTO form VALUES (null, '".$_POST['firstname']."', '".$_POST['email']."', '".$_POST['company']."', '".$_POST['project']."')";
        $statement = $pdo->prepare($query);
        $statement->execute(); 
    }
    }
    //select allfriends
    $query = 'SELECT * FROM form';
    $allform = $pdo->query($query)->fetchAll();

    echo '<p>These companies have already been hacked :</p>';
    echo '<ul>';
    foreach($allform as $forms) 
      {
      
      echo '<li> '.$forms['company'] . ' ' . $forms['firstname'].'</li>';
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
