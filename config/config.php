<?php

$hn = "localhost";
$un = "student_admin";
$pw = "jeSx@!W1euHa4Kvg";
$db = "myclyde";

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error){
    die("connection failed: " . $db->connect_error );
}


