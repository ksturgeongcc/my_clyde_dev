<?php
    $studentNum = $_SESSION['student_num'];
    $student = $conn->prepare("SELECT 
    s.firstname,
    s.surname,
    s.email,
    c.name,
    c.award,
    c.year
    FROM student s
    INNER JOIN course c ON s.fk_course = c.course_id

    where s.student_num = $studentNum
    ");
    $student->execute();
    $student->store_result();
    $student->bind_result($firstname, $surname, $email, $course, $award, $term);
    $student->fetch();
    ?>