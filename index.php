<?php
  // $i =0;
  // while($i<=15){
  //   if($i % 2 !== 0 ){
  //       $i++;
  //   continue;
  //   }
  //   echo $i++;
  // };

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