<?php

function studentDetails($studentName, $enrollmentNumber, $semester) {
    echo "<h2>Student Details</h2>";
    echo "<strong>Student Name:</strong> " . $studentName . "<br>";
    echo "<strong>Enrollment Number:</strong> " . $enrollmentNumber . "<br>";
    echo "<strong>Semester:</strong> " . $semester . "<br>";
}

    studentDetails("Krishna ramanuj", "92400527125", "5th Semester");
?>