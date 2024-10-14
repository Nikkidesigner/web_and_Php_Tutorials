<?php
$cookie_name = "user";
$cookie_value = "Alex Porter"; // Updating cookie value
// Update the cookie with the new value for another 30 days
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is updated!<br>";
    echo "New Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
