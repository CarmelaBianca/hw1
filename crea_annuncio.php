<?php
    session_start();
    $username=$_SESSION['username'];
    $nome=$_GET["nome"];
    $descrizione = $_GET["descrizione"];
    $prezzo = $_GET["prezzo"];
    $img = $_GET["img"];

    $conn = mysqli_connect("localhost", "root", "", "shop");
    $query_id="SELECT * FROM ads";
    $res = mysqli_query($conn, $query_id);

     
    $num_id=mysqli_num_rows($res);
    $query = "INSERT INTO ads VALUES ('$num_id','$username', '$nome','$descrizione',$prezzo,'$img')";
    $res = mysqli_query($conn, $query);
    echo json_encode(array('ok' => $res ? true : false));
    mysqli_close($conn);
?>