<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style-index+hobbies.css">
    <title>Document</title>
</head>
<body>
<div class="container container-fluid">
<!----------------------------header--------------------------->
    <?php $nav_en_cours = 'Hobbies';?>
    <?php include "./header.php";?>
    <!---------------------------contenu--------------------------->
    <div class="wrapper row">
        <svg height="320" width="400" class="logo-triangle">
            <defs>
                <linearGradient id="grad1" x1="0%"y1="100%" x2="100%" y2="0%">
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
            <polygon points="0,0 400,0 200,300" stroke="#36e2f8" stroke-width="3">            
        </svg>
        <div class="grid"></div>
        <div class="windowbackHobbies col justify-content-flex-start">
            <div class="windowbackHobbie1 row justify-content-flex-start">
                <img src="./images/curling.gif" width=280em height=230em>
                <div class="row justify-content-center">
                    <h4>Curling</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est perspiciatis atque fuga sunt omnis ab. Expedita alias quas at aperiam incidunt a. Ducimus mollitia possimus voluptatibus praesentium beatae, repellendus debitis!</p>
                </div>
                </div>
            <div class="windowbackHobbie2 row">
                <div class="row justify-content-center">
                <h4>Video Games</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid libero sequi ratione dolore delectus maiores, maxime sit in labore cum? Officia quasi expedita dicta et rerum nobis maxime quidem repellendus!</p>
                </div>    
                <img src="./images/jeuxvideo.gif" width=280em height=238em>
            </div>
            <div class="windowbackHobbie3 row">
                <img src="./images/cuisine.gif" width=280em height=230em>
                <div class="row justify-content-center">
                <h4>Cooking</h4>
                <p class="red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore deleniti nihil cumque sit, quae pariatur quis. Fugiat corporis esse quam excepturi quos qui quae, nam doloremque dolores dolore! Similique, magnam?</p>
                </div>
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