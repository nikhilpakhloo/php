<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .body {
            margin: 0px;
            padding: auto;

        }

        .container {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: auto;
            width: 50%;
            border: 2px solid #000;
            position: relative;
            background-color: darkgrey;
            text-align: left;
            font-size: 25px;
        }
    </style>
    <title>PHP Tutorial</title>
</head>

<body>
    <div class="container">


        <?php

        echo "<script>
 declare(strict_types=1);
//  </script>";
        //         function addNumbers(int $num1, int $num2): int
//         {
//             return $num1 + $num2;
//         }
        
        //         echo "The Sum of the num1 &num2 is <br>" . '=>' . addNumbers(2, 3);
        
        //         //Pre & Post increement
        


        //         //post increment
        echo "<h4>Pre/post Incre&decre</h4>";
        echo '<br>';
        echo "Post- increment<br>";
        echo "=>";
        for ($i = 1; $i <= 10; $i++) {

            echo $i . '  ' . ',';
        }

        //pre increment
        echo '<br>';
        echo "Pre- increment <br> ";
        echo "=>";
        for ($j = 1; $j <= 10; ++$j) {

            if ($j == 1) {
                continue;
            }
            echo $j . '  ' . ',';
        }





        //Pre & Post decreement
        //post decrement
        
        echo '<br>';
        echo "Post-Decrement <br> ";
        echo '=>';

        for ($b = 10; $b > 0; $b--) {
            echo $b . ' ' . ',';
        }
        //pre-decrement
        
        echo '<br>';
        echo "Pre-decrement <br>";
        echo '=>';

        for ($k = 10; $k >= 1; --$k) {

            if ($k == 10) {
                continue;
            }
            echo $k . '  ' . ',';

        }
        echo "<br>";

        //Operators
        
        $val1 = 100;
        $val2 = '100';
        echo "This will return true because values are equal and == will not check for type<br>";
        var_dump($val1 == $val2);
        //returns true because value are equal
        

        echo "<br>";

        $val3 = 100;
        $val4 = '100';
        echo " This will return false because === will check the variable types also<br>";
        var_dump($val3 === $val4);
        // returns false because types are not equal i.e string and number
        

        echo "<br>";

        $color = true;
        if (!$color) {
            echo ("The color is true");
        } else {
            echo "The color is false";
        }
        echo "<br>";

        $num = 10;
        $str = '10';
        if ($num !== $str) {
            echo "The number and strings are not identical";
        } else {
            echo " The number and strings are identical";
        }
        echo "<h4>Spaceship Operators </h4>";
        echo "<br>";

        echo "<h5>For Integers \n</h5>";
        echo "<br>";
        echo " If values on either sides are equal it will give";
        echo ' :', 1 <=> 1;
        echo "<br>";
        echo " If value on right side is greater it will give";
        echo ' :', 1 <=> 2;
        echo "<br>";
        echo " If value on left side is greater it will give";
        echo ' :', 2 <=> 1;

        echo "<br>";

        //logical operators
        echo "<h4>Logical operators </h4>";
        // in OR operator it expects only one condition to be true
        

        $city = "Kangra";
        $age = 25;
        if ($age >= 18 || $city === "Dharmshala") {
            echo "You can vote";
        } else {
            echo "You can't vote";
        }
        //  in And operator it expects both the condition to be true
        
        echo "<br>";
        $age = 20;
        $gender = 'Male';
        if ($age >= 18 && $gender === "Male") {
            echo "You can drive without helmet";
        } else {
            echo "You cant drive at all";
        }
        //ternary operator
        echo "<br>";
        echo "<h4>Ternary Operator</h4>";
        echo "<br>";
        $age1 = 50;
        $result = $age1 > 18 ? "You are an adult" : "You are not an adult";
        echo ($result);

        echo "<br>";
        echo "<h4>Switch statement </h4>";
        $favcolor = 'yellow';
        switch ($favcolor) {
            case "red";
                echo "Your fav color is red";
                break;

            case "white";
                echo "Your fav color is white";
                break;

            case "blue";
                echo "Your fav color is blue";
                break;

            default;
                echo "Your fav color is not red,white or blue";
        }
        echo "<br>";
        echo "<h4>Function with default argument value</h4>";
        function sayHello($name = 'Nikhil')
        {
            echo "Hello " . $name;
        }
        sayHello('Shahrukh khan <br>');
        sayHello('Ajay Devgan<br>');
        sayHello();
        echo "<br>";
        echo "<h4>Include / Require</h4>";



        echo "<h5>Welcome to the Website</h5>";
        echo "<p> Content of the included file is below</p>";
        include("include,require.php");

        echo "<br>";

        include 'header.php';
        echo "<br>";
        echo "<p>Here i included the links from another php file</p>";


        echo "<br>";

        // include_once
        
        echo "<p>This will executes only once </p>";
        include_once 'oncefile.php';
        echo '<br>';
        include_once 'oncefile.php';
        echo '<br>';

        //require_once
        echo "<p>This will executes only once </p>";
        require_once 'index.php';
        echo '<br>';
        require_once 'index.php';

        echo "<br>";
        echo "<h4>Try , Catch & Finally</h4>";
        echo "<br>";

        function checkNum($digit)
        {
            if ($digit > 1) {
                throw new Exception("Value must be lesser than 1");
            }
            return true;
        }
        try {
            checkNum(2);
            echo "If you see this, the number is 1 or below";
        } catch (Exception $e) {
            echo "Message:" . $e->getMessage();
        }



        echo "<br>";
        echo "<h4>Array with numeric and string keys</h4>";

        echo "<br>";

        $person = [
            'name' => "Nikhil Pakhloo",
            2 => 25,
            'contacts' => [
                'email' => "Nikhilpakhloo@gmail.com",
                1 => "8894784521"
            ]


        ];
        echo $person['name'];
        echo "<br>";
        echo $person[2];
        echo "<br>";
        echo $person['contacts']['email'];
        echo "<br>";
        echo $person['contacts']['1'];
        echo "<br>";

        echo "<h4>Multidimensionl array</h4>";
        $students = array(
            array(
                'name' => "Nikhil Pakhloo",
                'age' => 25,
                'grade' => 'B++'
            ),
            array(
                'name' => "Harry",
                'age' => 24,
                'grade' => 'A++'
            ),
            array(
                'name' => "CodeHero",
                'age' => 24,
                'grade' => 'A++'
            )
        );
        echo $students[0]['name'];
        echo "<br>";
        echo $students[1]['grade'];
        echo "<br>";
        echo $students[2]['age'];

        echo "<h4>Loops</h4>";
        echo "<br>";
        //for loop
        
        for ($i = 1; $i <= 10; $i++) {
            $result = 5 * $i;
            echo "5 x $i =$result<br>";
        }
        //while loop
        echo "Multiplication table of 19 using while loop<br>";
        $i = 1;
        while ($i <= 10) {
            $result = $i * 19;
            echo "19 x $i =$result<br>";
            $i++;
        }
        echo "Foreach Loop Example:<br>";
        $colors = array("Red", "Green", "Blue");
        foreach ($colors as $color) {
            echo "Color: $color<br>";
        }

        echo "<h4>Class $ Objects</h4>";
        echo "<br>";

        class Dog
        {
            public $name;
            public $color;
            public $size;
            public $breed;

            // Constructor
            public function __construct($name, $color, $size, $breed)
            {
                $this->name = $name;
                $this->color = $color;
                $this->size = $size;
                $this->breed = $breed;
            }

            // Method to display information about the dog
            public function displayInfo()
            {
                echo "Name: " . $this->name . "\n";
                echo "Color: " . $this->color . "\n";
                echo "Size: " . $this->size . "\n";
                echo "Breed: " . $this->breed . "\n";
            }
            public function printProperties()
            {
                echo "Name: " . $this->name . "\n";
                echo "Color: " . $this->color . "\n";
                echo "Size: " . $this->size . "\n";
                echo "Breed: " . $this->breed . "\n";
            }
            public function getName()
            {
                return $this->name;
            }

            // Getter method for retrieving the color
            public function getColor()
            {
                return $this->color;
            }

            // Getter method for retrieving the size
            public function getSize()
            {
                return $this->size;
            }

            // Getter method for retrieving the breed
            public function getBreed()
            {
                return $this->breed;
            }
        }

        // Create an instance of the Dog class
        $dog1 = new Dog("Buddy<br>", "Brown<br>", "Medium<br>", "Labrador Retriever<br>");


        // Display information about the dog
        $dog1->displayInfo();
        echo "Created another method to call  the properties of same class: <br>";
        $dog2 = new Dog("Shampoo<br>", "White<br>", "Medium<br>", "Vodafone wala kutta<br>");
        $dog2->printProperties();
        echo "Name:" . $dog2->getName() . "<br>";
        echo "Color:" . $dog2->getColor() . "<br>";
        echo "Size:" . $dog2->getSize() . "<br>";
        echo "Breed" . $dog2->getBreed() . "<br>";


        echo '<br>';


        ?>
































    </div>
</body>

</html>