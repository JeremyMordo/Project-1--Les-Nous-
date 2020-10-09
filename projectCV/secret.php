<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="./style-index+hobbies.css">
<link rel="stylesheet" href="./style-projets.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"> 
<title>Page Secrete</title>
</head>

<body>
    <div class="container container-fluid">
    <?php $nav_en_cours ='curriculum';?>
    <?php include "./header.php";?> 

    <div class="wrapper row">
            <svg height="320" width="400" class="logo-triangle">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="100%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:rgb(50,50,50);stop-opacity:1" />
                        <stop offset="100%" style="stop-color:black;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
                    <feOffset dx="2" dy="2" result="offsetblur" />
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>
                <polygon points="0,0 400,0 200,300" stroke="#36e2f8" stroke-width="3" />
            </svg>
    <div class="grid"></div>
    
  
<?php

if ($_POST ['mot_de_passe'] == 'Password')
{  
?>  
    <article  class="secret-article">
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
        <div id="no-opacity5"class="div-img img-thor background">
        <img class="imgproject gif-thor" alt="Thor Hackermann" src="images/thor.gif">      
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
    </div> 
<?php
}
else {
    header('Location: wrongpassword.php');
    exit();
?> 
   <!-- <div class="mire"><a href="./projects.php"><img class="mireImg" src="images/mire1.png" alt="mire"></a></div>-->
<?php   
}
?>

<?php include "./footer.php";?>
 
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>