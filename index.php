<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?php
        error_reporting(E_ALL); ini_set("display_errors", "1");
        //  This is example3.php used in previous .htm code
        $link = mysqli_connect("cs-sql2014.ua-net.ua.edu", "smmitchell2", "11192284");
        if (!$link) {
            die('Not connected: '. mysqli_error()); 
        }
        mysqli_select_db($link, 'smmitchell2') or die ('Could not select database');

        $query = "Select * from customer";
        $result = mysqli_query($link, $query);

        if (!$result) {
            die( 'Error in SQL: ' . mysqli_error($link));
        }
        // process results using cursor
        while ($row = mysqli_fetch_array($result)) {
                echo "<hr>";  //horizontal line
                echo "id: ". $row["customerID"] . "<br />";
                echo "name: " . $row["Name"] .  "<br />";
        }
        mysqli_free_result ($result);
        mysqli_close($link);   // disconnecting from MySQL

        
        //have 2 host variables
        // $id= $_POST['id'];
        // $age = $_POST['age'];
        // //the query
        // $query = "insert into  testit values ('$id', '$age')";
        // $result = mysqli_query($link, $query);
        // if (!$result) {die('SQL error: ' . mysqli_error($link));}
        // mysqli_close($link);
        // print "<html><body><center>";
        // print "<p>You have just entered this record<p>";
        // print "ID:  $id<br>";
        // print "Age: $age";
        // print "</body></html>";
        
    ?>
</body>
</html>




