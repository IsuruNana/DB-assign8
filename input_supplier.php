<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

        $name = $_POST["supplierName"];
        $address = $_POST["supplierAddress"];

        $index = rand(0, 5000);
        
        $insert = "insert into supplier values ('$index', '$name', '$address')" ;

        $result = mysqli_query($link, $insert);
        //$result = mysqli_query($link, $query);

        if (!$result) {
            die('SQL error: ' . mysqli_error($link));
        }
        mysqli_close($link);


        echo '<div class="container">';
            echo '<div class="d-flex justify-content-center">';
                echo "<p>You have just entered this record<p>";
                echo "ID:  $name <br>";
                echo "Age: $address <br>";
            echo '</div';
        echo '</div>';

    ?>
</body>
</html>




