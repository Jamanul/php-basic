<?php
define ("STATUS_VOID","void");
const STATUS_PAID = 'paid';
echo STATUS_VOID;
echo STATUS_PAID;

echo PHP_VERSION;

// variable variable

$foo = 'bar';

$$foo = 'baz';
echo $foo , $bar;
// strict mode ensures maintaining data type 
// declare (strict_types=1);

// type casting  gives type
$x = (int)'5';
var_dump($x);

// heredoc
// we can use variable here
$text =<<<TEXT
<div>hello world</div> $x
TEXT;

// nowdoc 
// we can not use variable here
$text =<<<'TEXT'
<div>hello world</div>
TEXT;


echo nl2br($text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
      <?php 
        echo "hello world";
      ?>
      <br>
       <?php 
          $x =10;
          $y =12;
          echo "{$x} , {$y}"
       ?>
        <br>
       <?php 
       define('status',"paid");
       echo status
       ?>
    </h2>
</body>
</html>