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
            <div class="delet">
            <h2>Return a Book</h2>
            <form action="returnconfirmation.php" method="post">
                <label>Title</label>
                <?php
                 ini_set('display_errors', 1);
                require('dbConnect.php');
                $db = get_db();

                $query = $db->query("SELECT booksid, title FROM Books WHERE finnish = 'false';"); // Run your query

                echo '<select name="titlebook">'; // Open your drop down box

                // Loop through the query results, outputing the options one by one
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    
                echo "<option value='" .$row['booksid'] . "'>".$row['title'].'</option>';
                }

                echo '</select>';

                ?>
                <label>What did you think of the book?</label><input type="textbox" name="review">
                <input type="submit" value="Return book">
            </form>
            </div>
        </main>
        <footer>
            <p>CS 313 Kalbertss Mata 2019</p>
        </footer>
    </body>
</html>