<?php 
$cookie_name = "user"; 
$cookie_value = "John Doe"; 

// Set the cookie
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
?> 

<!DOCTYPE html>
<html> 
<head>
    <title>Cookie Test</title>
</head>
<body> 
    <?php 
    // Check if the cookie is set
    if(!isset($_COOKIE[$cookie_name])) { 
        echo "Cookie named '" . $cookie_name . "' is not set!"; 
    } else { 
        echo "Cookie '$cookie_name' is set!<br>"; 
        echo "Value is: " . $_COOKIE[$cookie_name]; 
    } 
    ?> 
</body> 
</html>
