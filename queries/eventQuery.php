<?php
    $events = $conn->prepare("SELECT
    date,
    description
    
    from event 
    ");
    $events->execute();
    $events->store_result();
    $events->bind_result($date, $description);
    ?>

