<?php
    session_start();
    if(isset($_SESSION["username"]))
    {
        header("Location: home.php");
        exit;
    }
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $conn = mysqli_connect("localhost", "root", "", "shop");
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $res = mysqli_query($conn, $query);
        if(mysqli_num_rows($res) > 0)
        {
            $_SESSION["username"] = $_POST["username"];
            header("Location: home.php");
            exit;
        }
        else
        {
            $errore = true;
        }
    }

?>

<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="hw1.css?v=<?php echo time();?>"/>
        <script src="hw1.js" defer></script>
    </head>
    <body>
        <?php
            if(isset($errore))
                echo "<p class='errore'> Credenziali non valide. </p>";
        ?>
        <div class="cont">
            <form method="POST">
                <h2>Welcome</h2>
                <input type="text" name="username" class="dati" placeholder="username"/>
                <input type="password" name="password" class="dati" placeholder="password"/>
                <input type="submit" class="submit" value="signin">
            </form>
            <p id='registrati'> se non hai un account, <a href="registrazione.php"> registrati</a> </p>
        </div>
    </body>
</html>