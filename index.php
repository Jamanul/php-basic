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
    <style>
.gradient-border {
  display: inline-block;
  padding: 10px; /* Space between content and border */
  border-radius: 16px; /* Add rounded corners */
  background: linear-gradient(45deg, #f33cc0, #4349ff); /* Gradient for border */
  position: relative;
}

.gradient-border .content {
  background: black; /* Background color of the inner content */
  border-radius: 12px; /* Match slightly smaller radius for content */
  padding: 20px; /* Inner padding */
}
    </style>
</head>
<body>
    <button class="gradient-border">Hello</button>
</body>
</html>