<?php
echo "foo\n";
echo 'bar\n';

$name = 'Phil';

echo "My name is {$name}\n";
echo "My name is ".$name."\n";

class Animal{
  public $type = 'Pig';
}

$wilbur = new Animal();
echo $wilbur -> type;

if(true){
  //this
}else{
//that
}

for($i =0; $i<10; $i++){
  //stuff
}

$id = isset($_GET['id'] ? $_GET['id'] : 0);
$id = $GET['id'] ?? 0;

$arr1 = [
  'first' => 'Tom';
  'last' => 'Gregory'
];

echo '[0]:'.$arr1[0];// Wont Work
echo '[first]:'.$arr1['first'];//Will Work


$arr2 = ['one','two','three'];

foreach($arr2 as $key => $val){
  echo $key.':'.$val;
}
