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
   <h1>recomended books</h1>
   <?php
     $books =["bangla","english","physics"];
   ?>
   <ul>
        <?php
        foreach ($books as $book) {
            echo "<li> {$book} class 9</li>";
        }
        ?>
   </ul>
</body>
</html>