<!DOCTYPE html>
<html>
<head>
    <title>LAB 2 - PHP</title>
</head>
<body>

<h2>1. Area & Perimeter of Rectangle</h2>
<?php
$length = 10;
$width = 5;
echo "Area = " . ($length * $width) . "<br>";
echo "Perimeter = " . (2 * ($length + $width));
?>

<hr>

<h2>2. VAT Calculation</h2>
<?php
$amount = 1000;
echo "VAT (15%) = " . ($amount * 0.15);
?>

<hr>

<h2>3. Odd or Even</h2>
<?php
$number = 7;
if ($number % 2 == 0)
    echo "$number is Even";
else
    echo "$number is Odd";
?>

<hr>

<h2>4. Largest of Three Numbers</h2>
<?php
$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c)
    echo "$a is Largest";
elseif ($b >= $a && $b >= $c)
    echo "$b is Largest";
else
    echo "$c is Largest";
?>

<hr>

<h2>5. Odd Numbers Between 10 and 100</h2>
<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0)
        echo $i . " ";
}
?>

<hr>

<h2>6. Search Element in Array</h2>
<?php
$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;

foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}

echo $found ? "Element Found" : "Element Not Found";
?>

<hr>

<h2>7. Star Pattern</h2>
<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++)
        echo "* ";
    echo "<br>";
}
?>

<h2>Number Pattern</h2>
<?php
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++)
        echo $j . " ";
    echo "<br>";
}
?>

<h2>Alphabet Pattern</h2>
<?php
$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
?>

<hr>

<h2>8. 2D Array Shape</h2>
<?php
$array = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j <= $i; $j++)
        echo $array[$i][$j] . " ";
    echo "<br>";
}
?>

</body>
</html>
