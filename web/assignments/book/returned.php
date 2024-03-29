<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="main.css">
        <title>Book Manager</title>
    </head>
    <body>
        <header>
        <div>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="checkout.php">Reading</a></li>
                    <li><a href="returned.php">Books Read</a></li>
                    <li><a href="addbook.php">Add Book</a></li>
                    <li><a href="return.php">Change to Read</a></li>
                </ul>
            </div>
        </div>
        </header>
        <main>
            <h1>Book Manager</h1>
            <h2>Books You Have Read</h2>
            <?php
            try
            {
              $dbUrl = getenv('DATABASE_URL');
            
              $dbOpts = parse_url($dbUrl);
            
              $dbHost = $dbOpts["host"];
              $dbPort = $dbOpts["port"];
              $dbUser = $dbOpts["user"];
              $dbPassword = $dbOpts["pass"];
              $dbName = ltrim($dbOpts["path"],'/');
            
              $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
            
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $ex)
            {
              echo 'Error!: ' . $ex->getMessage();
              die();
            }


            foreach ($db->query("SELECT title, authorname, genre, reading_level, check_out, due_date, reviews_enter FROM Books AS b
            JOIN Reviews AS r ON b.booksID = r.booksID
            JOIN Authors AS a ON b.authorsID = a.authorsID
            WHERE finnish = 'true'") as $row)
            {
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<ul>';
            echo '<li>Author: ' . $row['authorname'] . '</li>';
            echo '<li>Genre: ' . $row['genre'] . '</li>';
            echo '<li>Reading Level: ' . $row['reading_level'] . '</li>';
            echo '<li>Check Out Date: ' . $row['check_out'] . '</li>';
            echo '<li>Due Date: ' . $row['due_date'] . '</li>';
            echo '</ul>';
            echo '<p>What did you think of the book?</p>';
            echo '<p>' . $row['reviews_enter'] . '</p>';
            }
            
            ?>
            <div class="delete">
            <h3>Delete book from list<h3>
            <form action="delete_book.php" method="post">
                <label>Title</label>
                <?php
                 ini_set('display_errors', 1);
                require('dbConnect.php');
                $db = get_db();

                $query = $db->query("SELECT booksid, title FROM Books WHERE finnish = 'true';"); // Run your query

                echo '<select name="titlebook">'; // Open your drop down box

                // Loop through the query results, outputing the options one by one
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    
                echo "<option value='" .$row['booksid'] . "'>".$row['title'].'</option>';
                }

                echo '</select>';

                ?>
                <input type="submit" value="Delete Book">
            </form>
            </div>
        </main>
        <footer>
            <p>CS 313 Kalbert Mata 2019</p>
        </footer>
    </body>
</html>