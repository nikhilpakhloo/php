<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>

<body>
    <?php
    $my_array = array("dog", "cat", "horse");
    list($a, $b, $c) = $my_array;
    echo "i have a $a , a $b and an $c";
    echo "<br>";
    $fruits = array("Apple", "Banana", "Orange");

    // Accessing elements of the list
    echo "First fruit: " . $fruits[0] . "<br>";
    echo "Second fruit: " . $fruits[1] . "<br>";
    echo "Third fruit: " . $fruits[2] . "<br>";


    $fruits[] = "Strawberry";
    $fruits[2] = "Mango";
    print_r($fruits);
    echo "<br>";

    echo "Iterating over the list: \n";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
    echo "<br>";
    // Checking if an element exists in the list
    if (in_array("Apple", $fruits)) {
        echo "Apple is in the list.\n";
    } else {
        echo "Apple is not in the list.\n";
    }
    echo "<br>";
    // Finding the index of an element in the list
    $index = array_search("Mango", $fruits);
    if ($index !== false) {
        echo "Mango is at index: " . $index . "\n";
    } else {
        echo "Mango is not in the list.\n";
    }
    $removedFruit = array_pop($fruits);
    echo "Removed fruit: " . $removedFruit . "\n";
    // Print final list

    print_r($fruits);

    ?>

</body>

</html>