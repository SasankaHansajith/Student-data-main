<?php

$studentRecordsJson = '[



]';

$students = array(
    array("name" => "Sasanka Hansajith", "age" => 25, "adress" => "390/6, Hambantota", "cgpa" => 3.5),

    array("name" => "Harith Induwara", "age" => 22, "adress" => "Kururnagala", "cgpa" => 3.8),

    array("name" => "Bob Marley", "age" => 21, "adress" => "789 Pine Road, Villageton", "cgpa" => 3.2),

    array("name" => "Williams Alice", "age" => 23, "adress" => "110 Elm Lane, Hamletville", "cgpa" => 3.9),

    array("name" => "Chris Davis", "age" => 19, "adress" => "202 Cedar Court, Boroughburg", "cgpa" => 3.6),

    array("name" => "Akila Herath", "age" => 26, "adress" => "Matara", "cgpa" => 3.0),

    array("name" => "Williams Kevin", "age" => 23, "adress" => "Kurunagala", "cgpa" => 2.9),

    array("name" => "Tom Devid", "age" => 20, "adress" => " Hamletville", "cgpa" => 3.1),

    array("name" => "Alice Herth", "age" => 29, "adress" => "110 Elm Lane", "cgpa" => 3.5),

    array("name" => "Vishwa kodi", "age" => 23, "adress" => "Tissamaharama", "cgpa" => 1.5),



    
);

// Convert the array to JSON and output it
echo json_encode($students);
?>