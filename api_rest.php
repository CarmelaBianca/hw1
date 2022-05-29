<?php
    $articolo= urlencode($_GET["campo"]);
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, 'https://pixabay.com/api/?key=26910272-59b46b3f2d3942d3027df90e0&q='.$articolo.'&per_page=3&image_type=photo&safesearch=true');
    curl_setopt($ch, CURLOPT_POST,0); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch); 
    $json = json_decode($result, true);
    echo json_encode($json);
    curl_close($ch); 
?>