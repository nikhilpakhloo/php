<?php
function format_name(string $first, string $middle, string $last): string
{
    return $middle ?
        "$first $middle $last" :
        "$first $last";
}


$names = [
    'first' => 'John',
    'middle' => 'V.',
    'last' => 'Doe'
];

echo format_name(...$names); // John V. Doe

?>