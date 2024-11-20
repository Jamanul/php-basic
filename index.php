<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
            font-family: "sans-serif";
        }
    </style>
</head>
<body>
 <h1>recommended books</h1>
 <?php
  $books = [
    [
        "name"=> "bangla",
        "class"=> "nine",
        "url"=> "https://www.google.com",
    ],
    [
        "name"=> "english",
        "class"=> "nine",
        "url"=> "https://www.youtube.com",
    ],
  ]
 ?>
 <ul>
    <?php foreach($books as $book) : ?>
        <li><a href="<?php echo $book['url'] ?>"><?php echo $book["name"]?></a></li>
    <?php endforeach; ?>
 </ul>
</body>
</html>