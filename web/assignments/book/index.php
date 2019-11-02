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
            <p class="intro">Welcome to the Book Manager! Here you can keep track of the books you are currently reading, and of the ones you have already read.</p>
        </main>
        <footer>
            <p>CS 313 Kalbert Mata 2019</p>
        </footer>
    </body>
</html>