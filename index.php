<?php
  // $i =0;
  // while($i<=15){
  //   if($i % 2 !== 0 ){
  //       $i++;
  //   continue;
  //   }
  //   echo $i++;
  // };
  declare(strict_types=1);
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