<?php
    session_start();
    $username=$_SESSION['username'];
    $articolo_cercato=$_GET['articolo'];
    $conn = mysqli_connect("localhost", "root", "", "shop");
    $query="SELECT * FROM ads where nome='$articolo_cercato'";
    $res = mysqli_query($conn, $query);
    $annunci = array();
    while($row=mysqli_fetch_assoc($res)){
        $annunci[]=$row;
    }
    echo json_encode($annunci);

    mysqli_close($conn);
?>