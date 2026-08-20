<?php

$studentName = readline("Enter Student Name:");
$mathsMarks = readline("Enter Maths Marks:");
$scienceMarks = readline("Enter Science Marks:");
$englishMarks = readline("Enter English Marks:");


echo "================================================================" .PHP_EOL;
echo "Student Name: $studentName" .PHP_EOL;
echo "Maths Marks: $mathsMarks" . PHP_EOL;
echo "Science Marks: $scienceMarks" . PHP_EOL;
echo "English Marks: $englishMarks" . PHP_EOL;
echo "================================================================" .PHP_EOL;       
echo "Total Marks:" . ($mathsMarks + $scienceMarks + $englishMarks) . PHP_EOL;
echo "Average Marks:" . (($mathsMarks + $scienceMarks + $englishMarks) / 3) . PHP_EOL;
echo "================================================================" .PHP_EOL;

