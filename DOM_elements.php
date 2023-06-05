<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM Elements</title>
</head>

<body>
    <?php

    $doc = new DOMDocument;
    $doc->load('OOPs/file1.xml');
    $books = $doc->getElementsByTagName('book');
    foreach ($books as $book) {
        $title = $book->getElementsByTagName('name')->item(0)->nodeValue;
        $price = $book->getElementsByTagName('price')->item(0)->nodeValue;
        $id = $book->getElementsByTagName('id')->item(0)->nodeValue;
        print_r("The title of the book $id is $title and it costs $price." . "<br>");
    }

    echo "<br>";

    

    // Create a new DOMDocument object
    $dom = new DOMDocument();
    
    // Load the XML document
    $dom->load('file.xml');
    
    // Retrieve elements by tag name
    $customers = $dom->getElementsByTagName('Customers');
    $orders = $dom->getElementsByTagName('Orders');
    
    // Process and print the retrieved elements
    foreach ($customers as $customer) {
       
        $companyName = $customer->getElementsByTagName('CompanyName')->item(0)->nodeValue;
        $contactName = $customer->getElementsByTagName('ContactName')->item(0)->nodeValue;
        $contactTitle = $customer->getElementsByTagName('ContactTitle')->item(0)->nodeValue;
        $phone = $customer->getElementsByTagName('Phone')->item(0)->nodeValue;
    
      
        echo "Company Name: $companyName\n";
        echo "Contact Name: $contactName\n";
        echo "Contact Title: $contactTitle\n";
        echo "Phone: $phone\n\n";
    }
    echo "<br>";
    
    foreach ($orders as $order) {
        $customerID = $order->getElementsByTagName('CustomerID')->item(0)->nodeValue;
        $employeeID = $order->getElementsByTagName('EmployeeID')->item(0)->nodeValue;
        $orderDate = $order->getElementsByTagName('OrderDate')->item(0)->nodeValue;
        $requiredDate = $order->getElementsByTagName('RequiredDate')->item(0)->nodeValue;
    
        echo "Customer ID: $customerID\n";
        echo "Employee ID: $employeeID\n";
        echo "Order Date: $orderDate\n";
        echo "Required Date: $requiredDate\n\n";
    }
    
    ?>
    

   


</body>

</html>