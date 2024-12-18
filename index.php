<?php
  // $i =0;
  // while($i<=15){
  //   if($i % 2 !== 0 ){
  //       $i++;
  //   continue;
  //   }
  //   echo $i++;
  // };
  // declare(strict_types=1);
 $programmingLang =['C++',"C",'C#'] ;
for ($i=0,$length =count($programmingLang); $i <$length ; $i++) { 
  echo $programmingLang[$i];
};

$programmingLanguages =['C++',"C",'C#',"python","C+","java"] ;
foreach ($programmingLanguages as $key=> $language){
  echo $key . ":" . $language . '<br/>';
};
// the  variable stays and you have to end it.
unset($language);
// print_r ($language);

$status =4;

switch($status) {
  case 1:
  echo "paid";
  break;
  case 2: 
  case 3: 
  echo "rejected";
  break;
  case 4: 
  echo "pending";
  break;
  default:
  echo "nothig found";

}
echo  "<br/>";

$result =match($status){
  1 =>  "paid",
  2,3 => "rejected",
  4 => "pending",
  default=>"nothig found"
};
echo $result;

echo  "<br/>";


$x =10 ;
$y =112;
function sum (int $x , int $y){
  return ($x + $y);
};


$name = "Alice";

// Define a closure
$greet = function() use ($name) {
    echo "Hello, $name!";
};

// Call the closure
$greet();  // Output: Hello, Alice!

$array=[1,2,3,4];

function foo ($e) {
  return $e *2;
};
$array2 = Array_map('foo',$array);

echo '<pre>';
print_r($array);
print_r($array2);
echo '<pre/>';
date_default_timezone_set('Asia/Dhaka'); // Set the timezone to Bangladesh
$current_timestamp = date('Y-m-d H:i:s'); // Get current date and time in standard format
echo "Current Bangladesh Timestamp: " . $current_timestamp;
echo "<br/>";
$numbers =[1,2,3,4,5,6,7,8,9,10];
// Use strict typing for the callback
$even = array_filter($numbers, fn(int $number): bool => $number % 2 === 0);
$even =array_values($even);
echo '<pre>';
print_r($even);
echo '</pre>';
echo "<br/>";

$double =array_map(fn(int $number):float|int=>$number *2,$array);

echo '<pre>';
print_r($double);
echo '</pre>';

echo "<br/>";
$products = [
  [
      "name" => "Laptop",
      "price" => 1200.50,
      "quantity" => 2
  ],
  [
      "name" => "Smartphone",
      "price" => 800.75,
      "quantity" => 5
  ],
  [
      "name" => "Headphones",
      "price" => 150.25,
      "quantity" => 10
  ],
  [
      "name" => "Monitor",
      "price" => 300.00,
      "quantity" => 3
  ],
  [
      "name" => "Keyboard",
      "price" => 50.99,
      "quantity" => 7
  ]
];
$productsOne = [
  [
      "name" => "Laptop",
      "price" => 1200.50,
      "quantity" => 2
  ],
  [
      "name" => "Smartphone",
      "price" => 800.75,
      "quantity" => 5
  ],
  [
      "name" => "Headphones",
      "price" => 150.25,
      "quantity" => 10
  ],
  [
      "name" => "Monitor",
      "price" => 300.00,
      "quantity" => 3
  ],
  [
      "name" => "Keyboard",
      "price" => 50.99,
      "quantity" => 7
  ]
];

$totalPrice = array_reduce($products,fn($sum,$item)=> $sum + $item["price"]* $item["quantity"],0);
echo '<pre>';
print_r($totalPrice);
echo '</pre>';