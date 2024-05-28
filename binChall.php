<?php

//Read line of input
$input = trim(fgets(STDIN));

// Convert binary string to decimal
$byte = bindec($input);

// Define function to count the number of '1's
function count_ones($byte_val) {
    // Convert number to its binary representation and count '1'.
    return substr_count(decbin($byte_val), '1');
}

// Call the function with decimal value and multiply the result by 2.
$multiply = count_ones($byte) * 2;

// Output the result
echo $multiply . "\n";

?>
