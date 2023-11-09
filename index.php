<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="title">
            <span>My organaizer</span>
        </div>
        <div class="insert_data">
            
            
            <form action="update.php">
            <span>
                type task
            </span>
            <input type="text">
                <input type="submit" value="Save">
            </form>
        </div>
    </header>

<main>

    <?php
    // Assuming you have a database connection established
    $host = "localhost";
    $dbname = "calendar";
    $username = "root";
    $password = "root";

    $month;
    $year;

    // Create a connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Assuming your table is named 'your_table'
    $query = "SELECT * FROM tasks";

    // Execute the query
    $result = $conn->query($query);

    // Check for errors
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    // Fetch all rows as an associative array
    while ($row = $result->fetch_assoc()) {
        
        echo "<article>$row[data], $row[month], $row[task]</article>";

        $year=$row['year'];
        $month=$row['month'];
    }

    // Close the connection

    ?>

</main>


    <footer>
        <?="Year: ".$year?>
        <?="Month: ".$month?>
    </footer>

</body>

</html>