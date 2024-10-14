<?php
// Indexing Array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// Get The Length of an Array - The count() Function
$cars = array("Volvo", "BMW", "Toyota");
echo "<br>";
echo "Size of Array = " . count($cars);
echo "<br><br>";

// Loop Through an Indexed Array
echo "Indexed Array Elements:<br>";
for($x = 0; $x < count($cars); $x++) {
    echo $cars[$x] . "<br>";
}

// Associative Arrays
echo "<br>Associative Arrays:<br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.<br><br>";

// Loop Through an Associative Array
echo "Associative Array Elements:<br>";
foreach($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value . "<br>";
}

// Multidimensional Arrays
echo "<br><b>Multidimensional Arrays:</b><br>";
$cars1 = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// Print Multidimensional Array Elements
echo "<br>";
for ($i = 0; $i < count($cars1); $i++) {
    echo $cars1[$i][0] . ": In stock: " . $cars1[$i][1] . ", Sold: " . $cars1[$i][2] . ".<br>";
}
?>
