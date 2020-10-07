<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style-index+hobbies.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <title>HackerMan CV</title>
</head>
<body>
    <div class="container container-fluid">
<!----------------------------header--------------------------->
        <?php $nav_en_cours ='Hackerman';?>
        <?php include "./header.php";?> 
<!---------------------------contenu--------------------------->
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
            <img class="windowback row" src="images/window.png">
            <div class="cards row">
                <div class="card card1 col-md-6 col-12">
                    <a href="./curriculum.php">
                        <button class="btn btn-curriculum" type="button"><img alt="curriculum link" src="images/curriculum.png">
                            <div class="card-body">
                                <h5 class="card-title">Curriculum</h5>
                            </div>
                        </button>
                    </a>                    
                </div> 
                <div class="card card2 col-md-6 col-12">
                    <a href="./projects.php">
                        <button class="btn btn-projects" type="button"><img alt="projects link" src="images/projects.png">
                            <div class="card-body">
                                <h5 class="card-title">Projets</h5>
                            </div>
                        </button>
                    </a>
                </div>
                <div class="card card3 col-md-6 col-12">
                    <a href="./hobbies.php">
                        <button class="btn btn-hobbies" type="button"><img alt="hobbies link" src="images/hobbies.png">
                            <div class="card-body">
                                <h5 class="card-title">Hobbies</h5>
                            </div>
                        </button>
                    </a>
                </div>
                <div class="card card4 col-md-6 col-12">
                   <a href="./contact.php">
                        <button class="btn btn-contact" type="button"><img alt="contact link" src="images/contact.png">
                            <div class="card-body">
                                <h5 class="card-title">Contact</h5>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    <!---------------------------footer--------------------------->            
    <?php include "./footer.php";?>
</div>
<script src="src/index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>