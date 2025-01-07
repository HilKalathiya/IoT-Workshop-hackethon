<?php
require("config.php");
require("sms.php");

$sr = 1;
$sql = mysqli_query($con, "SELECT * FROM data ORDER BY id DESC");

while ($pr = mysqli_fetch_array($sql)) {
    $is_sent = isSMSSent($con, $pr['hashid']); // Check if SMS has been sent for this record

    // Sending SMS logic
    if (!$is_sent) {
        if ($pr['body_temp'] > 39 || $pr['body_temp'] < 35) {
            $message = "Alert! High body temperature detected: " . $pr['body_temp'] . "°C on " . $pr['date'] . " at " . $pr['time'] . ".";
            sendSMS($sid, $token, '+919574456782', '+12187576648', $message);
            markSMSSent($con, $pr['hashid']);
        }
    }

    // Display the row with a special class if SMS is sent
    $row_class = $is_sent ? "table-danger" : ""; // Highlight with 'table-success' if SMS sent
    echo "<tr class='{$row_class}'>
            <th scope='row'><?php echo $sr++; ?></th>
            <td>{$pr['body_temp']}</td>
            <td>{$pr['room_temp']}</td>
            <td>{$pr['humidity']}</td>
            <td>{$pr['pulse_rate']}</td>
            <td>{$pr['oxy_lvl']}</td>
            <td>{$pr['time']}</td>
            <td>{$pr['date']}</td>
            <td><a href='delete.php?key={$pr['hashid']}' class='btn btn-sm btn-danger'>Delete</a></td>
          </tr>";
}
?>