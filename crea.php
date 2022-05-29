<?php
    session_start();
?>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="crea.css?v=<?php echo time();?>"/>
        <script src="crea.js?v=<?php echo time();?>" defer></script>
    </head>
    <body>
        <nav>
            <div class="menu"><a href="home.php">home</a></div>
            <div class="menu"><a href="miei_annunci.php">I miei annunci</a></div>
            <div class="menu"><a href="preferiti.php">preferiti</a></div>
            <div class="menu"><a href="carrello.php">Carrello</a></div>
            <div class="menu"><a href="logout.php">Logout</a></div>
        </nav>
        <div class="cont">
            <form method='POST'>
                <h1>Inserisci annuncio</h1>
                <input type="text" id="nome" name='nome' class="dati" placeholder="nome"/>
                <input type="text" id='descrizione' name='descrizione' class="dati" placeholder="descrizione"/>
                <input type="text" id='prezzo' name='prezzo' class="dati" placeholder="prezzo"/>
                <img src="default.jpg" name="immagine" id="immagine"  class="dati"/>
            
                <select name="scelta" id="select">
                    <option name="carica" value="carica"> carica da file</option>
                    <option name="cerca" value="cerca"> cerca </option>
                </select>
                <div class="input_hidden">
                    <input type="file" class="hidden" id="file" name='foto' accept="image/*"/>
                    <input type="text" class="hidden" id="articolo" name='campo' placeholder="cerca un articolo"/>
                    <input type="submit" class="hidden" id='cerca' value='cerca'/>
                <div>
                <div id="result">
                </div>
                <input type="submit" id='pubblica' value='pubblica'/>
            </form>
        </div>
    </body>
</html>