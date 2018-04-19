<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", "1");
    $link=mysqli_connect("cs-sql2014.ua-net.ua.edu", "mybamaID", "CWID");
    if (!$link) {die("Not connected: ". mysqli_error()); }  // see if connected
    mysqli_select_db($link, 'login');
//$query = 'CREATE TABLE testit( '.'id INT NOT NULL, '.'age int)';
// $result = mysqli_query($link, $query);
// if(!$result) {die( 'Error in SQL: ' . mysqli_error($link));}
// echo "table created";
// mysqli_close($link);
?>


