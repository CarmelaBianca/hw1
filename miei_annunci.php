<?php
    session_start();
?>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="home.css?v=<?php echo time();?>"/>
        <script src="miei_annunci.js?v=<?php echo time();?>" defer></script>
    </head>
    <body>
        <nav>
            <div class="menu"><a href="home.php">Home</a></div>
            <div class="menu"><a href="crea.php">Crea annuncio</a></div>
            <div class="menu"><a href="preferiti.php">preferiti</a></div>
            <div class="menu"><a href="carrello.php">Carrello</a></div>
            <div class="menu"><a href="logout.php">Logout</a></div>
        </nav>
    <div id="annunci">
        
    </div>
    </body>
</html>