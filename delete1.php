<?php
require("config.php");

if (isset($_GET['key'])) {
    $key = $_GET['key'];
    $sql = "DELETE FROM data WHERE hashid = '$key'"; // Assuming `hashid` is the unique identifier
    mysqli_query($con, $sql);
}

header("Location: index.php"); // Redirect back to the main page
exit;
?>