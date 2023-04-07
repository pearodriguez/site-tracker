<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tracker</title>
</head>

<body>
    <?php

    if (!isset($_COOKIE['count'])) 
        echo "Welcome to my site!";
      
    echo "Number of times viewed this site: " . $_COOKIE["count"];
    echo "<br>";

    switch ($_COOKIE['count']) {
        case 5: 
            echo "\nthis is your 5th time here!!!";
            break;
        case 10: 
            echo "\n10th time now!!!"; 
            break;
        case 15:
            echo "\nYou've been here 15 times!! keep it up!!";
            break;
        case 20: 
            echo "\nYOU HAVE BEEN HERE 20 TIMES!!!"; 
            unset($_COOKIE['count']);
            setcookie("count", 0); 
            break;
    }
    $cookie = $_COOKIE["count"] + 1;
    setcookie("count", $cookie); 
    
    ?>
</body>

</html>