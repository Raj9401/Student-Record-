<?php
/*
* Armaan Singh
* 000794766
* I, Armaan Singh, student number 000794766, certify that all code submitted is my own work;
* that I have not copied it from any other source.  I also certify that I have not allowed my work to be copied by others.
*
* This file stores all the students in the student_list array when they are being pushed. 
*/
include "connect.php";
include "studentRecord.php";
$select = "SELECT * FROM student_list ORDER BY fullName ASC";
$sstmt = $dbh->prepare($select);
$sstmt->execute();


$student_list = []; 


while ($row = $sstmt->fetch()) 
    {
        $student = new studentRecord ($row["id"],$row["fullName"],$row["grade"]);
        array_push($student_list, $student);
    }
echo json_encode($student_list);
