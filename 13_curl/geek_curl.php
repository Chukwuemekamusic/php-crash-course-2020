
<?php
    // Create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://www.geeksforgeeks.org/");

    // Return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    echo $output;

    // Close curl resource to free up system resources
    curl_close($ch);     
?>