<header>
    <div class="myInfo row justify-content-space-between">
        <img class="img-fluid col" alt="A photo of HackerMan" src="./images/hackerman.png">
        <ul class="headerUl col">
            <li class="text-danger"><h1>Jacky HackerMan</h1></li>
            <br>
            <li>I'm a professional</li>
            <li>Call me : 666-666-6666</li>
            <li>Mail me : livingGod@me.com</li>
        </ul>
    </div>
    <nav class="navbar navbar-expand-* navbar-dark bg-dark">
        <a href="./index.php" class="btn btn-outline-light" <?php if ($nav_en_cours == 'Hackerman') {echo ' id="en-cours"';} ?>>HackerMan</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item" >
                    <a href="./curriculum.php" class="btn btn-outline-light" <?php if ($nav_en_cours == 'Curriculum') {echo ' id="en-cours"';} ?>>Curriculum</a>
                </li>
                <li class="nav-item">
                    <a href="./projects.php" class="btn btn-outline-light" <?php if ($nav_en_cours == 'Projects') {echo ' id="en-cours"';} ?>>Projects</a>
                </li>
                <li class="nav-item">
                    <a href="./hobbies.php" class="btn btn-outline-light" <?php if ($nav_en_cours == 'Hobbies') {echo ' id="en-cours"';} ?>>Hobbies</a>
                </li>
                <li class="nav-item">
                    <a href="./contact.php" class="btn btn-outline-light" <?php if ($nav_en_cours == 'Contact') {echo ' id="en-cours"';} ?>>Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
