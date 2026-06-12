<?php

function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5) {

    $maxMarksPerSubject = 100;
    $totalMaxMarks = $maxMarksPerSubject * 5;
    
    $totalObtained = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    
    $percentage = ($totalObtained / $totalMaxMarks) * 100;

    return $percentage;
}

$s1 = 80;
$s2 = 90;
$s3 = 88;
$s4 = 82;
$s5 = 88;

$finalPercentage = calculatePercentage($s1, $s2, $s3, $s4, $s5);

echo "<h2>Academic Performance</h2>";
echo "Marks: $s1, $s2, $s3, $s4, $s5 <br> <br>";
echo "<strong>Total Marks Obtained:</strong> " . ($s1 + $s2 + $s3 + $s4 + $s5) . " / 500<br> <br>";
echo "<strong>Calculated Percentage:</strong> " . $finalPercentage . "%";
?>