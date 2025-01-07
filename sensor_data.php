<?php
require("config.php");

if (!empty($_GET)) {
    // Retrieve sensor values from the GET request
    $body_temp = isset($_GET['body_temp']) ? $_GET['body_temp'] : null;
    $room_temp = isset($_GET['room_temp']) ? $_GET['room_temp'] : null;
    $humidity = isset($_GET['humidity']) ? $_GET['humidity'] : null;
    $pulse_rate = isset($_GET['pulse_rate']) ? $_GET['pulse_rate'] : null;
    $oxy_lvl = isset($_GET['oxy_lvl']) ? $_GET['oxy_lvl'] : null;

    // Generate hash ID and timestamps
    $hashid = md5(microtime());
    $time = date('h:i a');
    $date = date('d-m-Y');

    // Validate required parameters
    if ($body_temp && $room_temp && $humidity && $pulse_rate && $oxy_lvl) {
        // Prepare and execute SQL query
        $sql = "INSERT INTO data (hashid, body_temp, room_temp, humidity, pulse_rate, oxy_lvl, date, time) 
                VALUES ('$hashid', '$body_temp', '$room_temp', '$humidity', '$pulse_rate', '$oxy_lvl', '$date', '$time')";

        if (mysqli_query($con, $sql)) {
            echo "Data saved successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Missing required sensor parameters.";
    }
} else {
    echo "Invalid request. No data received.";
}
?>