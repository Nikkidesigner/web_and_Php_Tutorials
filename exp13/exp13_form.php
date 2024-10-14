<?php
include 'db_config.php'; // Include database connection

// Check if the form is submitted for insert
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Insert query
    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Check if the form is submitted for update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Update query
    $sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch user data if id is set for updating
$user = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $user = $result->fetch_assoc();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert/Update User Data</title>
</head>
<body>

<h2>User Form</h2>
<form action="exp13_form.php" method="post">
    <?php if ($user): ?>
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <?php endif; ?>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $user ? $user['name'] : ''; ?>" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo $user ? $user['email'] : ''; ?>" required><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age" id="age" value="<?php echo $user ? $user['age'] : ''; ?>" required><br><br>

    <?php if ($user): ?>
        <button type="submit" name="update">Update</button>
    <?php else: ?>
        <button type="submit" name="submit">Submit</button>
    <?php endif; ?>
</form>

<h2>User List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    <?php
    include 'db_config.php'; // Include database connection to fetch users

    $result = $conn->query("SELECT * FROM users");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td><a href='form.php?id={$row['id']}'>Edit</a></td>
              </tr>";
    }

    $conn->close();
    ?>
</table>

</body>
</html>
