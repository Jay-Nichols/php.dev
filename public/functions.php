<?php


function compare($a, $b, $strict) 
{
	if ($strict === true) {
		return $a === $b ? "True" : "False";
  	} else {
  		return $a == $b ? "True" : "False";
  	}
}

echo compare("false", false, true) . PHP_EOL;
echo compare(false, false, true) . PHP_EOL;
echo compare("1", 1, false) . PHP_EOL;
echo compare("1", 1, true) . PHP_EOL;


$names = ['Matt Foley', 'Happy Gilmore', 'Billy Madison', 'Pat', 'Turd Ferguson'];

asort($names);
print_r($names);

ksort($names);
print_r($names);

krsort($names);
print_r($names);

arsort($names);
print_r($names);

$searchedName1 = array_search('The Copy Guy', $names);
$searchedName2 = array_search('Billy Madison', $names);


var_dump($searchedName1) . PHP_EOL;
var_dump($searchedName2) . PHP_EOL;


$animals = ['iguana', 'lynx', 'emu'];
array_push($animals, 'velociraptor', 'alligator gar');
print_r($animals);
array_pop($animals);
print_r($animals);
$iguana = array_shift($animals);
print_r($animals);
array_unshift($animals, $iguana);
print_r($animals);

$animalsString = implode(", ", $animals);
echo $animalsString . PHP_EOL;

$animalsArray = explode(", ", $animalsString);
print_r($animalsArray);


