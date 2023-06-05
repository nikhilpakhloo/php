<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple_Xml_load</title>
</head>
<body>
    <?php
    $xml = simplexml_load_file('file.xml');
    $customers = $xml->Customers->Customer;
    foreach ($customers as $customer) {
        $customerID =  $customer['CustomerID'];
        $companyName =  $customer->CompanyName;
        $contactName =  $customer->ContactName;
        $contactTitle =  $customer->ContactTitle;
        $phone =  $customer->Phone;
    
        // Access full address
        $fullAddress = $customer->FullAddress;
        $address =  $fullAddress->Address;
        $city =  $fullAddress->City;
        $region =  $fullAddress->Region;
        $postalCode =  $fullAddress->PostalCode;
        $country =  $fullAddress->Country;

        echo "Customer ID: $customerID<br>";
        echo "Company Name: $companyName<br>";
        echo "Contact Name: $contactName<br>";
        echo "Contact Title: $contactTitle<br>";
        echo "Phone: $phone<br>";
        echo "Address: $address<br>";
        echo "City: $city<br>";
        echo "Region: $region<br>";
        echo "Postal Code: $postalCode<br>";
        echo "Country: $country<br>";

        echo "<br>";
    }

  
    ?>
    
</body>
</html>