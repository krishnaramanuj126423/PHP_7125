<?php


function welcomeStudent() {
    echo "Welcome to the Academic Portal! We wish you a great semester ahead.<br>";
}

$functionName = 'welcomeStudent';

echo "<h2>Function Existence Check</h2>";

if (function_exists($functionName)) {
    echo "<em>Success: The function '$functionName' exists. Calling it now:</em><br><br>";
    
    $functionName(); 
} else {

    echo "<strong>Error:</strong> The function '$functionName' does not exist in this script.";
}

?>