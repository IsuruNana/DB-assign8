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

        $tableVal = $_POST["table"];
        $whereVal = $_POST["where"];

        if ($tableVal == "table[0"){
            $query = "Select customerID from customer join order on customerID=custID";
            $result = mysqli_query($link, $query);
        }
        elseif($tableVal == "table[1]"){

        }
        
        mysqli_close($link);   // disconnecting from MySQL
        
    ?>
</body>
</html>
