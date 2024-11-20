<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ep 9 -->
<h1>recommended books</h1>
 <?php
 $books = [
    [
        "name" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "url" => "https://example.com/to-kill-a-mockingbird",
        "release_year" => 1960
    ],
    [
        "name" => "1984",
        "author" => "George Orwell",
        "url" => "https://example.com/1984",
        "release_year" => 1949
    ],
    [
        "name" => "Pride and Prejudice",
        "author" => "Jane Austen",
        "url" => "https://example.com/pride-and-prejudice",
        "release_year" => 1813
    ],
    [
        "name" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "url" => "https://example.com/the-great-gatsby",
        "release_year" => 1925
    ]
];

$filterbooks =array_filter($books, function($book){
    return $book['release_year']>=1900;
});
 ?>
 <ul>
    <?php foreach($filterbooks as $book) : ?>
        <li><a href="<?php echo $book['url'] ?>"><?php echo $book["name"]?></a></li>
    <?php endforeach; ?>
 </ul>
</body>
</html>