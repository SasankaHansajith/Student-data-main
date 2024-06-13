<?php

$studentRecordsJson = '[
  {
    "sid": 1,
    "name": "Sasanka Hansajith",
    "age": 25,
    "address": "390/6, Hambantota",
    "cgpa": 3.5
  },
  {
    "sid": 2,
    "name": "Harith Induwara",
    "age": 22,
    "address": "Kururnagala",
    "cgpa": 3.8
  },
  {
    "sid": 3,
    "name": "Bob Marley",
    "age": 21,
    "address": "789 Pine Road, Villageton",
    "cgpa": 3.2
  },
  {
    "sid": 4,
    "name": "Williams Alice ",
    "age": 23,
    "address": "110 Elm Lane, Hamletville",
    "cgpa": 3.9
  },
  {
    "sid": 5,
    "name": "Chris Davis",
    "age": 19,
    "address": "202 Cedar Court, Boroughburg",
    "cgpa": 3.6
  },
  {
    "sid": 6,
    "name": "Akila Herath ",
    "age": 26,
    "address": "Matara",
    "cgpa": 3.0
  },
  {
    "sid": 7,
    "name": "Williams Kevin ",
    "age": 23,
    "address": "Kurunagala",
    "cgpa": 2.9
  },
  {
    "sid": 8,
    "name": "Tom Devid  ",
    "age": 20,
    "address": " Hamletville",
    "cgpa": 3.1
  },
  {
    "sid": 9,
    "name": "Alice Herth ",
    "age": 29,
    "address": "110 Elm Lane",
    "cgpa": 3.5
  },
  {
    "sid": 10,
    "name": "Vishwa kodi ",
    "age": 23,
    "address": "Tissamaharama",
    "cgpa": 1.5
  }





]';


$studentRecords = json_decode($studentRecordsJson, true);

if (isset($_GET['sid'])) {
    $studentId = intval($_GET['sid']);

    // Find the student with the specified ID
    $foundStudent = null;
    foreach ($studentRecords as $student) {
        if ($student['sid'] === $studentId) {
            $foundStudent = $student;
            break;
        }
    }

    if ($foundStudent !== null) {
        echo json_encode($foundStudent, JSON_PRETTY_PRINT);
    } else {
        echo "Student not found.";
    }
} else {
    // Echo an error message if the 'sid' parameter is not set in the GET request
    echo "Please provide a valid student ID.";
}

?>
