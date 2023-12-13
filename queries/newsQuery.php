<?php
    $news = $conn->prepare("SELECT
    title,
    description
    
    from news 
    ");
    $news->execute();
    $news->store_result();
    $news->bind_result($title, $description);
    ?>

