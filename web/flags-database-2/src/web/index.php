<html>

<body>
    This is a FLAGS database<br>
    
    <form action="/" method="get">
        Country: <input type="text" name="country"><br>
        <input type="submit" value="Try">
    </form>

    <?php
    if (isset($_GET['country'])) {
        echo('Result:<br>');
        $country = $_GET['country'];

        $mysqli = new mysqli('flags-database-2-db', 'challengeuser', 'geasbrebea', 'flags_database');
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }

        $query = "SELECT colors FROM flags WHERE country = '$country'";

        if ($result = $mysqli->query($query)) {
            while ($obj = $result->fetch_object()) {
                echo($obj->colors . "<br>");
            }
            $result->close();
        }
        elseif ($mysqli->error) {
            echo($mysqli->error);
        }
    }
    ?>

</body>

</html>