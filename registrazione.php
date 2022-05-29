<?php
    if (isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"]) && isset($_POST["data_di_nascita"])
        && isset($_POST["username"]) && isset($_POST["password"])){
        
        $invalid_fields = false;
        
        $conn = mysqli_connect("localhost", "root", "", "shop");
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $query = "SELECT email FROM users WHERE email = '$email'";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
            $invalid_fields = true;
        }
        $data_di_nascita = mysqli_real_escape_string($conn, $_POST['data_di_nascita']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $query = "SELECT username FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
            $invalid_fields = true;
        }
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{8,50}$/', $password)) {
            $invalid_fields = true;
        }
        if (strlen($password)<8 || strlen($password)>50){
            $invalid_fields = true;
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $invalid_fields = true;
        } else {
            $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
            $res = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
            if (mysqli_num_rows($res) > 0) {
                $invalid_fields = true;
            }
        }
        
        if(!$invalid_fields){
            $query = "INSERT INTO users VALUES('$nome', '$cognome', '$email', '$data_di_nascita', '$username', '$password')";
            $res=mysqli_query($conn, $query);
            if ($res) {
                $_SESSION["username"] = $_POST["username"];
                mysqli_close($conn);
                header("Location: login.php");
                exit;
            }   
        }
        
    }
?>

<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="hw1.css?v=<?php echo time();?>"/>
        <script src="registrazione.js?v=<?php echo time();?>" defer></script>
    </head>  
    <div class="cont">
        <form method='post'>
            <h2>Welcome</h2>
            <input type="text" id='nome' name="nome" class="dati" placeholder="nome">
            <p id='errore_nome' class='hidden'> campo vuoto </p>
            <input type="text" id='cognome' name="cognome" class="dati" placeholder="cognome">
            <p id='errore_cognome' class='hidden'> campo vuoto </p>
            <input type="email" id='email' name="email" class="dati" placeholder="email">
            <p id='errore_email' class='hidden'> campo vuoto </p>
            <p id='errore_email_nonvalida' class='hidden'> e-mail non valida </p>
            <p id='errore_email_inuso' class='hidden'> e-mail già in uso </p>
            <input type="text" id='data_di_nascita' name="data_di_nascita" class="dati" placeholder="data di nascita (età min: 14 anni)" onfocus="(this.type='date')">
            <p id='errore_data' class='hidden'> età non valida </p>
            <input type="text" id='username' name="username" class="dati" placeholder="username">
            <p id='errore_user' class='hidden'> campo vuoto </p>
            <p id='errore_user_inuso' class='hidden'> username già in uso </p>
            <input type="password" id='password' name="password" class="dati" placeholder="password">
            <p id='errore_password' class='hidden'> la password deve contere: almeno un numero e una lettera, minimo 8 caratteri e massimo 50</p>
            <input type="submit" class="submit" value="signup" disabled>
        </form>    
    </div>
</html>