<?php

$arr = array();
$numb_of_0 = 0;
$arr = file_get_contents("text.txt");

$j = 0;

echo count($arr);

for ($i = 0; $i < 14; $i++) {
    if ($arr[$i] == "0")
        $j++;
    else {
        if ($numb_of_0 < $j) {
            $numb_of_0 = $j;
        }
        $j = 0;
    }
}

echo "Number of 0: ", $numb_of_0;

?>