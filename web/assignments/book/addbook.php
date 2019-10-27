<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link type="text/css" rel="stylesheet" href="main.css">
        <title>Book Manager</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="checkout.php">Cheked Out</a></li>
                    <li><a href="returned.php">Returned</a></li>
                    <li><a href="addbook.php">Add New</a></li>
                    <li><a href="return.php">Return</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Book Manager</h1>
            <h2>Add A New Book</h2>
            <form method="post" action="addconfirmation.php">
                <label>Title</label><input name="title" type="text">
                <label>Author</label><input name="author" type="text">
                <label>Genre</label><input name="Genre" type="text">
                <label>Grade level</label><input name="grade_level" type="text">
                <label>Check out date</label><input name="check_out" type="text">
                <label>Due date:</label><input name="due_date" type="text">
                <input type="click" value="add book">
            </form>
        </main>
        <footer>
            <p>CS 313 Kalbert Mata 2019</p>
        </footer>
    </body>
</html>