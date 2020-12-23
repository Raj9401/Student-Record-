<?php
/*
* Armaan Singh
* 000794766
* I, Armaan Singh, student number 000794766, certify that all code submitted is my own work;
* that I have not copied it from any other source.  I also certify that I have not allowed my work to be copied by others.
*
* This file adds the student in the record. It inserts it in the database.
* First, gets the value and inserts it in database
*
*/
include "connect.php";
$student = filter_input(INPUT_POST,"Student", FILTER_SANITIZE_STRING);
$grades = filter_input(INPUT_POST,"grade", FILTER_VALIDATE_INT);
$command = "INSERT INTO student_list(fullName, grade) VALUES (?,?)";
$stmt = $dbh->prepare($command);
$params = [$student,$grades];
$success = $stmt->execute($params); 
$row = $stmt->fetch();
include "getList.php";
?>