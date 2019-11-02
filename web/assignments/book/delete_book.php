<?php

ini_set('display_errors', 1);

$book_id = htmlspecialchars($_POST['titlebook']);


require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('DELETE FROM Reviews WHERE booksid = :book_id;');
$stmt->bindValue(':book_id', $book_id, PDO::PARAM_INT);
$stmt->execute();

$stmt = $db->prepare('DELETE FROM Books WHERE booksid = :book_id;');
$stmt->bindValue(':book_id', $book_id, PDO::PARAM_INT);
$stmt->execute();



$new_page = "retuned.php";
header("Location: $new_page");
die();