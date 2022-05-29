<?php
    session_start();
    $username=$_SESSION['username'];
    $indice=$_GET['indice'];
    $id=$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "shop");
    $query="SELECT * FROM preferiti where username='$username' and id='$id'";
    $res = mysqli_query($conn, $query);
    //if(mysqli_num_rows($res))
    $a = array(
        "preferito" =>  mysqli_num_rows($res) ? true : false,
        "indice" => $indice
    );
    echo json_encode($a);
    mysqli_close($conn);
?>