<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter_var</title>
</head>

<body>
    <?php
    $email = "john.doe@exa////mple.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email;

    // Validate e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }


    echo '<br>';


    $email = "john.doe@ex///ample.com";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }
    echo '<br>';
    print_r(filter_list());
    
    
    ?>

</body>

</html>