<?php
    session_start();
    $username=$_SESSION['username'];
    $id=$_GET['id'];
    $action=$_GET['action'];
    $conn = mysqli_connect("localhost", "root", "", "shop");
    if($action=='add') $query="INSERT INTO preferiti VALUES ('$username', '$id')";
    else $query="DELETE FROM preferiti WHERE username='$username' AND id='$id'";
    $res = mysqli_query($conn, $query);
    echo json_encode(array('ok' => $res ? true : false));
    mysqli_close($conn);
?>