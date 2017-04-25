<?php

//if, if else, elseif

$a = true;
$b = false;
$c = 6;
$d = 9;
$e = -1;
$f = "-1";

if ($a == $b) {
	echo "$a is equal to $b" . PHP_EOL;
} else {
	echo "$a is not equal to $b" . PHP_EOL;
}

if ($d != $e || $c == $a) {
	echo "$d doesn't equal $e and/or $c equals $a" . PHP_EOL;
} else {
	echo "Neither of the conditions evaluate to true" . PHP_EOL;
}

if (!is_bool($a)) {
	echo "\$a is not a boolean\n";
} else {
	echo "\$a is a boolean\n";
}

if ($e === $f) {
	echo "$e is identical to $f\n";
} elseif ($e > $f) {
	echo "$e is greater than $f\n";
} elseif ($e < $f) {
	echo "$e is less than $f\n";
} elseif ($e == $f) {
	echo "$e is equal to $f\n";
}


//ternary operator

$height = 48; //in inches 

$canRideTheRide = $height >= 50 ? "Can ride the ride" : "Can't ride the ride";

echo $canRideTheRide . PHP_EOL; 


//while loops

// count by twos until it gets to a stopping point $b

$a = 2;
$b = 30;

while ($a <= $b) {
	echo "\$a = $a\n";
	$a += 2;
}

//now reverse

$j = 2;
$k = 30;


while ($k >= $j) {
	echo "\$k = $k\n";
	$k -= 2;
}

//do-while

$x = 4;
$y = -6;

do {
	echo "Even though condition isn't met, this line will run\n";
	$x--;
} while ($x < $y);


//for loops

for ($i = 0; $i <= 100; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz\n";
	} elseif ($i % 3 == 0) {
		echo "Fizz\n";
	} elseif ($i % 5 == 0) {
		echo "Buzz\n";
	} else {
		echo "$i\n";
	}
}

//foreach loops

$someArray = array('things', 'people', 5, (3 * 4), 'giraffes', 'pretzels', true);

foreach ($someArray as $value) {
	if (is_int($value)) {
		echo "$value is an integer\n";
	} elseif(is_string($value)) {
		echo "$value is a string\n";
	} elseif(is_bool($value)) {
		echo "$value is a boolean\n";
	}
}

//foreach with keys

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $info) {
	echo "$title was published in {$info['published']} by {$info['author']} and has {$info['pages']} pages\n";
}
