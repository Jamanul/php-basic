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
 <ul>
    <?php foreach($filterbooks as $book) : ?>
        <li><a href="<?php echo $book['url'] ?>"><?php echo $book["name"]?></a></li>
    <?php endforeach; ?>
 </ul>
</body>
</html>

<?php

$x = 1;
$y = &$x;
$x= 4;
echo $y;
?>