<?php
// Deret a: 4 6 9 13 18 ? ?
$a = [4, 6, 9, 13, 18];
for ($i = 5; $i < 7; $i++) {
    $a[$i] = $a[$i - 1] + ($i + 1);
}
echo "Deret a: " . implode(" ", $a) . "<br>";

// Deret b: 2 2 3 3 4 ? ?
$b = [2, 2, 3, 3, 4];
for ($i = 5; $i < 7; $i++) {
    $b[$i] = $b[$i - 2] + 1;
}
echo "Deret b: " . implode(" ", $b) . "<br>";

// Deret c: 1 9 2 10 3 ? ?
$c = [1, 9, 2, 10, 3];
for ($i = 5; $i < 7; $i++) {
    $c[$i] = $c[$i - 4] + 8;
}
echo "Deret c: " . implode(" ", $c);
?>