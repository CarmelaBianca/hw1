<?php
    session_start();
    $username=$_SESSION['username'];
    $conn = mysqli_connect("localhost", "root", "", "shop");
    $query="SELECT * FROM addtobag ad, ads a where ad.id=a.id and ad.username='$username'";
    $res = mysqli_query($conn, $query);
    $preferiti = array();
    while($row=mysqli_fetch_assoc($res)){
        $preferiti[]=$row;
    }
    echo json_encode($preferiti);
    mysqli_close($conn);
?>