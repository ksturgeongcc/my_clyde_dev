

<?php
    // this would be used to return all students, this query would be used to return all students
    // the data will be displayed with a loop
    $students = $conn->prepare('SELECT 
    student_num, 
    firstname,
    surname,
    email
    FROM student
    ');
    // run the query
    $students->execute();
    // store the results
    $students->store_result();
    // create variables for the results (these should be in the same order as the columns in the query)
    $students->bind_result($studentNumbers, $firstnames, $surnames, $emails);


    
    // this example would be used to return the details of a specific student, we fetch() within the query

    // Creating a variable to store the session cookie student_num, this is created when the user logs in
    // We can then use this data to query the database for the specific student
    $studentNum = $_SESSION['student_num'];

    $student = $conn->prepare("SELECT 
    student_num, 
    firstname,
    surname,
    email
    FROM student 
    where student_num = $studentNum
    ");
    $student->execute();
    $student->store_result();
    $student->bind_result($studentNum, $firstname, $surname, $email);
    $student->fetch();
    ?>