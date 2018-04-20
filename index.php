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

        $radioVal = $_POST["selectTable"];

        $query = "Select * from {$radioVal}" ;
        $result = mysqli_query($link, $query);

        //Comment
        if (!$result) {
            die( 'Error in SQL: ' . mysqli_error($link));
        }

        else {
            echo '<div class="container mt-5">';
                echo "<h1>Showing {$radioVal} table</h1>";
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                echo '<table class="table">';
                    echo '<thead class="thead-dark">';
                        echo '<tr>';//table row
                            for($i = 0; $i < sizeof($row); $i++){
                                $finfo = mysqli_fetch_field_direct($result, $i);
                                echo '<th scope="col">' . $finfo->name . '</th>';//table header
                            }
                    echo '</thead>';
                    //Print row
                    //---------------------------------------------------//
                    echo "<tr>";//table row
                    for($i = 0; $i < sizeof($row); $i++){
                        echo "<td>" . $row[$i] . "</td>";//table data
                    }
                    echo "</tr>";//table row
                    //---------------------------------------------------//
                    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                        //Print rows
                        echo "<tr>";//table row
                            for($i = 0; $i < sizeof($row); $i++){
                                echo "<td>" . $row[$i] . "</td>";//table data
                            }
                        echo "</tr>";//table row
                
                    }
                echo '</table>';
            echo '</div>';
        }
        
        mysqli_free_result ($result);
        mysqli_close($link);   // disconnecting from MySQL
        
    ?>
</body>
</html>




