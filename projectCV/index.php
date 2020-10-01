<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="container container-fluid">
    <!----------------------------header--------------------------->
         <?php $nav_en_cours ='Hackerman';?>
         <?php include "./header.php";?> 
       
    <!---------------------------contenu--------------------------->
   
            <div class="window row">
                <img class="windowback row" src="images/window.png">
                <div class="cards row">
                        <button class="card card1 col-6 btn btn-curriculum" type="button"><img alt="curriculum link" src="images/curriculum.png">
                        <a href="./curriculum.php">
                            <div class="card-body">
                                <h5 class="card-title">Curriculum</h5>
                            </div>
                        </a>
                    </button>                  
                    <div class="card card2 col-6">
                        <button class="btn btn-projects" type="button"><img alt="projects link" src="images/projects.png"><a href="./projects.php"></a></button>
                        <div class="card-body">
                            <h5 class="card-title">Projets</h5>
                        </div>
                    </div>
                    <div class="card card3 col-6">
                        <button class="btn btn-hobbies" type="button"><img alt="hobbies link" src="images/hobbies.png"><a href="./hobbies.php"></a></button>
                        <div class="card-body">
                            <h5 class="card-title">Hobbies</h5>
                        </div>
                    </div>
                    <div class="card card4 col-6">
                        <button class="btn btn-contact" type="button"><img alt="contact link" src="images/contact.png"><a href="./contact.php"></a></button>
                        <div class="card-body">
                            <h5 class="card-title">Contact</h5>
                        </div>
                    </div>
                </div> 
            </div>
    <!---------------------------footer--------------------------->
    <?php include "./footer.php";?>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>