<?php
$studentCount = rand(1, 1000000);
if(($studentCount % 10 >= 5 && $studentCount % 10 <= 9) || $studentCount % 10 == 0 || ($studentCount % 100 >= 11 && $studentCount % 100 <= 14)) {
    echo "На учебе $studentCount студентов";
} elseif($studentCount % 10 == 1) {
    echo "На учебе $studentCount cтудент";
} else {
    echo "На учебе $studentCount cтудента";
}
