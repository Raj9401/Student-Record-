<?php

/*
* Armaan Singh
* 000794766
* I, Armaan Singh, student number 000794766, certify that all code submitted is my own work;
* that I have not copied it from any other source.  I also certify that I have not allowed my work to be copied by others.
*
* This file coonect.php conects it to database.
*/
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000794766",
        "000794766",
        "19991105"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
