<?php
// Set the expiration date to one hour ago, so it effectively deletes the cookie
setcookie("user", "", time() - 3600, "/");
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>
