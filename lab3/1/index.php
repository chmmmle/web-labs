<?php
// ЗАДАЧА 1.1

$input_str = 'amoba athea abba ayma artya' ;
$pattern = '/a[a-z][a-z]a/ui';
preg_match_all($pattern, $input_str, $matches);
foreach($matches[0] as $match)
{
    echo $match, "\n";
}


// ЗАДАЧА 1.2
function cube($matches) {
    return pow($matches[0], 3);
}

$input_str = 'a1b2c3';
$result = preg_replace_callback('/[0-9]/u', 'cube', $input_str);

echo $result;
?>
