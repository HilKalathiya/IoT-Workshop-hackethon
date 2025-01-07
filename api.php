<?php
require("config.php");
if (!empty($_GET)) {
    $body_temp = $_GET['body_temp'];
    $room_temp = $_GET['room_temp'];
    $humidity = $_GET['humidity'];
    $pulse_rate = $_GET['pulse_rate'];
    $oxy_lvl = $_GET['oxy_lvl'];
    $hashid = md5(microtime());
    $time = date('h:i a');
    $date = date('d-m-Y');
    $sms_sent = 0;
    $sql = mysqli_query($con, "INSERT INTO data(hashid,body_temp, room_temp, humidity, pulse_rate, oxy_lvl, date, time, sms_sent) VALUES('$hashid','$body_temp', '$room_temp', '$humidity','$pulse_rate','$oxy_lvl','$date','$time', '$sms_sent')");
    if ($sql) {
        echo "Saved!";
    } else {
        echo "Error";
    }
}
?>