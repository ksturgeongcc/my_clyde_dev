<?php
    $studentNum = $_SESSION['student_num'];
    $course = $conn->prepare("SELECT
    u.name,
    u.description,
    se.date
    
    from student_enrolment se 
    INNER JOIN unit u ON se.fk_unit = u.unit_id
    WHERE se.fk_student = $studentNum
    
    
    ");
    $course->execute();
    $course->store_result();
    $course->bind_result($unitName, $unitDesc, $enrolDate);
    ?>

