<?php

/*
* Armaan Singh
* 000794766
* I, Armaan Singh, student number 000794766, certify that all code submitted is my own work;
* that I have not copied it from any other source.  I also certify that I have not allowed my work to be copied by others.
*
* This file is the class for the student record which includes the constructor and a method of the jsonSerialize
*
*/
class studentRecord implements JsonSerializable{

    private $id;
    private $fullName;
    private $grade;
    /// Constructor for list class
    function __construct($id,$fullName,$grade)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->grade = $grade;
    }

    
    public function jsonSerialize(){
        return  get_object_vars($this);
    }
}
