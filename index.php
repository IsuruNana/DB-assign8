<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <?php
        //---------------Setup----------------//
        error_reporting(E_ALL); ini_set("display_errors", "1");
        //  This is example3.php used in previous .htm code
        $link = mysqli_connect("cs-sql2014.ua-net.ua.edu", "smmitchell2", "11192284");
        if (!$link) {
            die('Not connected: '. mysqli_error()); 
        }
        mysqli_select_db($link, 'smmitchell2') or die ('Could not select database');
        //---------------End Setup----------------//

        $radioVal = $_POST["selectTable"];

        // if($radioVal == "customer") {
        //     echo("You chose the first button. Good choice. :D");
        // }
        // else if ($radioVal == "items") {
        //     echo("Second, eh?");
        // }

        $query = "Select * from " . $radioval;
        $result = mysqli_query($link, $query);

        //Comment
        if (!$result) {
            die( 'Error in SQL: ' . mysqli_error($link));
        }

        else {
            // process results using cursor
            while ($row = mysqli_fetch_array($result)) {
                echo "<hr>";  //horizontal line
                echo "id: ". $row["customerID"] . "<br />";
                echo "name: " . $row["Name"] .  "<br />";
            }
        }
        
        mysqli_free_result ($result);
        mysqli_close($link);   // disconnecting from MySQL
        
    ?>
</body>
</html>




