<?php
$cookie_name = "user";
$cookie_value = "John Doe";
// Set a cookie for 30 days (86400 seconds/day * 30 days)
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // "/" means available throughout the entire domain
?>
<html>
<body>

<?php
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
