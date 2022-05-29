<?php
    session_start();
    $username=$_SESSION['username'];
    $conn = mysqli_connect("localhost", "root", "", "shop");
    $query="SELECT * FROM ads where username!='$username'";
    $res = mysqli_query($conn, $query);
    $annunci = array();
    while($row=mysqli_fetch_assoc($res)){
        $annunci[]=$row;
    }
    echo json_encode($annunci);

    mysqli_close($conn);
?>