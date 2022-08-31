<?php

require "../connection/dbConnect.php";

$query = "SELECT COUNT(*) FROM attributes";
$result = mysqli_query($con, $query);

if ($result) {

    while ($rows = mysqli_fetch_array($result)) {
        date_default_timezone_set("Asia/Manila");
        echo "Total Attendees: " . $rows['COUNT(*)'] . "   | Date: " . date("Y/M/d");
    }
}
