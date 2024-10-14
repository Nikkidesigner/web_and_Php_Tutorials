<?php
// Defining a global variable
$txt = "India";

// Displaying string concatenation
echo "I love " . $txt . "!"; // Outputs: I love India!
echo "<br>";

// Performing a mathematical expression
$x = 5;
$y = 4;
echo "Sum of x and y: " . ($x + $y); // Outputs: Sum of x and y: 9
echo "<br>";

// Global variable
$a = 5; // Global scope

// Function demonstrating variable scope
function myTest() {
    global $a; // Accessing the global variable $a
    // Variable $x is not accessible here (local scope)
    // Uncommenting the next line would cause an error
    // echo "<p>Variable x inside function is: $x</p>";
    echo "<p>Variable a inside function is: $a</p>"; // Outputs: 5
}

// Call the function
myTest();

// Displaying the global variable $a outside the function
echo "<p>Variable a outside function is: $a</p>"; // Outputs: 5

// Another function to demonstrate local scope
function myTest1() {
    $b = 5; // Local scope
    echo "<p>Variable b inside function is: $b</p>"; // Outputs: 5
}

// Call the function
myTest1();

// Trying to access local variable $b outside the function will generate an error
// Uncommenting the next line would cause an error
// echo "<p>Variable b outside function is: $b</p>";

// Using an array
$fruits = array("Apple", "Banana", "Cherry");

// Displaying array values
echo "<p>Fruits in the array:</p>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>"; // Outputs: each fruit on a new line
}

// Using a control structure (if statement)
if ($x > $y) {
    echo "<p>x is greater than y</p>"; // Outputs: x is greater than y
} else {
    echo "<p>x is not greater than y</p>";
}
?>
