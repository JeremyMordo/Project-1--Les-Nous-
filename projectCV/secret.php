<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./style-projets.css">
<title>Page Secrete</title>
</head>

<body>
    <div class="container container-fluid">
    <?php $nav_en_cours ='curriculum';?>
    <?php include "./header.php";?> 
  
<?php

if ($_POST ['mot_de_passe'] == 'password')
{  
?>  
    <article>
        <div id="div-clignotante">
            <h1 class ="pagetitle">PROJET ULTRA TOP SECRET</h1>
        </div>
<script>
var clignotement = function(){ 
   if (document.getElementById('div-clignotante').style.visibility=='visible'){ 
      document.getElementById('div-clignotante').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('div-clignotante').style.visibility='visible'; 
   } 
}; 
periode = setInterval(clignotement, 600); 
</script> 

        <div>
                <h2 class ="pagetitle">Le MARTEAU De THOR</h2>
        </div>
        <div class="div-img img-thor">
        <img class="imgproject" alt="Thor Hackermann" src="images/thor.gif">      
        </div>
        <div class ="div-secret">
                <p>Utiliser la puissance du marteau de Thor pour améliorer le voyage temporel.</p>
                <p>Ce projet s'articule en 3 points :</p>
                <ul>
                    <li>Etape 1 : Voler les slips.</li>
                    <li>Etape 2 : ###############</li>
                    <li>Etape 3 : Faire du profit.</li>                            
                </ul>
        </div>
    </article>

<?php
}
else {
?> 
   <div class="mire"><a href="./projects.php"><img class="mireImg" src="images/mire1.png" alt="mire"></a></div>
<?php   
}
?>

<?php include "./footer.php";?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>