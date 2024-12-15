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

<?php
define("STATUS_VOID", "void");
const STATUS_PAID = 'paid';
echo STATUS_VOID;
echo STATUS_PAID;

echo PHP_VERSION;

// variable variable

$foo = 'bar';

$$foo = 'baz';
echo $foo, $bar;
// strict mode ensures maintaining data type 
// declare (strict_types=1);

// type casting  gives type
$x = (int) '5';
var_dump($x);

// heredoc
// we can use variable here
$text = <<<TEXT
<div>hello world</div> $x
TEXT;

// nowdoc 
// we can not use variable here
$text = <<<'TEXT'
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
    $x = 10;
    $y = 12;
    echo "{$x} , {$y}"
      ?>
    <br>
    <?php
    define('status', "paid");
    echo status
      ?>
    <br>
    <?php
    $isComplete = true;
    var_dump($isComplete)
      ?>
    <br>
    <?php
    $x = 7778;
    // this is heredoc and it is important
    $text = <<<TEXT
      <div>
      <p>hello world {$x}</p>
      </div>

      TEXT;
    echo $text;
    // this is nowdoc and and it is same as heredoc but we cant use variables here   
    $text2 = <<<'TEXT'
      <div>
      <p>hello world {$x}</p>
      </div>

      TEXT;
    ?>
  </h2>
  <!-- <?php
  $programmingLanguages = ['C++', "java", "javascript"];
  var_dump($programmingLanguages);
  $programmingLanguages[] = "c#";
  var_dump($programmingLanguages);
  array_push($programmingLanguages, "c", "python");
  var_dump($programmingLanguages);
  ?> -->
  <!-- <?php
  $programmingLanguages = [
    "php" => 8.0,
    "python" => 4.0
  ];
  print_r($programmingLanguages);
  $programmingLanguages['go'] = "unknown";
  var_dump($programmingLanguages);
  ?> -->
  <br>
  <!-- <?php
  $x = (float) 10.9;
  $y = 2;
  echo fmod($x, $y);
  $a = 5;
  $b = 3;
  var_dump($a <> $b);
  var_dump($a <=> $b)
    ?> -->
  <br>
  <!-- <?php
  $myScore = 70
    ?>
  <?php if ($myScore >= 90): ?>
    <strong style="color: green">A+</strong>
  <?php elseif ($myScore >= 70): ?>
    <strong style="color: blue">B+</strong>
  <?php elseif ($myScore >= 50): ?>
    <strong style="color: orange">c+</strong>
  <?php else: ?>
    <strong style="color: red">F+</strong>
  <?php endif ?> -->
  <br>
  <!-- loops -->
  <?php
  $i =0;
  while($i<15){
    if($i % 2 === 0 )
     $i++;
    continue;
  }
  echo $i++;
  ?>


  <script>

    e.log(typeof (false))
  </script>
</body>

</html>