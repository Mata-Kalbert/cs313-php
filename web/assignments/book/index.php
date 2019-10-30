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
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			  <div class="container">
              <button id="click" class="dropbtn">Menu</button>
               <div id="dropdown" class="dropdown-content">
               <div class="navbar-header">
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
            <p>Welcome to the Book Manager! Here you can keep track of the books you are currently readin, and of the ones you have already read.</p>
        </main>
        <script scr="book/books_menu.js"></script>
        <footer>
            <p>CS 313 Kalbert Mata 2019</p>
        </footer>
    </body>
</html>