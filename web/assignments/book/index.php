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
            <!--<nav class="navbar navbar-inverse navbar-static-top" role="navigation"> -->
			  <div class="menu">
              <button id="click" class="dropbtn">Menu</button>
               <div id="dropdown" class="dropdown-content">
               <!--<div class="navbar-header"> -->
                    <a href="index.php">Home</a>
                    <a href="checkout.php">Cheked Out</a>
                    <a href="returned.php">Returned</a>
                    <a href="addbook.php">Add New</a>
                    <a href="return.php">Return</a>
                </div> 
                </div>         
               <!-- </ul>
            </nav> -->
        </header>
        <main>
            <h1>Book Manager</h1>
            <p>Welcome to the Book Manager! Here you can keep track of the books you are currently readin, and of the ones you have already read.</p>
        </main>
        <script src="books_menu.js"></script>
        <footer>
            <p>CS 313 Kalbert Mata 2019</p>
        </footer>
        
    </body>
</html>