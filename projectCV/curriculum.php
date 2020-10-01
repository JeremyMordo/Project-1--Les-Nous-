<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./CVstyle.css">
    <title>Curriculum</title>
</head>
<body>
    
    <div class="container container-fluid">

        <!----------------------------header--------------------------->
        <?php $nav_en_cours ='curriculum';?>
        <?php include "./header.php";?> 

        <!---------------------------main--------------------------->
        <main>
            <!-- first section -->
            <section class="background" id="toRemove" onclick="remove(this)">
                <div class="titleSection"> 
                    <h2>Cursus</h2>
                    <button type="button"><img class="crossButton" src="images/crossButton.png"></button>
                </div>
                    <p class="text">Dumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes, Herculanus advenit protector domesticus, Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti. quo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.</p>
            </section>

            <!-- second section -->
            <section class="background" id="toRemove" onclick="remove(this)">
            <div class="titleSection"> 
                    <h2>Skills</h2>
                    <button type="button"><img class="crossButton" src="images/crossButton.png"></button>
                </div>
                <div class="containerSkill">
                    <div class="skills">
                            <p class="text">Networking</p>
                            <progress max="100" value="95"></progress>
                    </div>
                    <div class="skills">
                            <p class="text">Programming</p>
                            <progress max="100" value="80"></progress>
                    </div>
                    <div class="skills">
                            <p class="text">Database</p>
                            <progress max="100" value="50"></progress>
                    </div>
                    <div class="skills">
                            <p class="text">Scripting</p>
                            <progress max="100" value="70"></progress>
                    </div>
                    <div class="skills">
                            <p class="text">Cryptography</p>
                            <progress max="100" value="80"></progress>
                    </div>
                    <div class="skills">
                            <p class="text">Gipher</p>
                            <progress max="100" value="95"></progress>
                    </div>
                </div>
            </section>

        </main>

        <!---------------------------footer--------------------------->
        <?php include "./footer.php";?>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
    
    let crossButton = document.querySelectorAll('button');

    function remove() {
        const element = document.getElementById("toRemove");
        element.remove();
    }
</script>
</body>
</html>