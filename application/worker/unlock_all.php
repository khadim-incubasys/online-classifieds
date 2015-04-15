<?php

//require_once '/var/www/mpvi/application/config/constants.php';

$servername = "localhost";
$username = "root";
$password = "incubasys";

$sleep_time=5;
$time_difference=1;
$conn = mysqli_connect($servername, $username, $password);

if (!$link = mysql_connect($servername, $username, $password)) {
    echo 'Could not connect to mysql';
    exit;
}
if (!mysql_select_db('mpvi', $link)) {
    echo 'Could not select database';
    exit;
}

$delete_query = "DELETE FROM locks WHERE TIMESTAMPDIFF(MINUTE,`created_at`,NOW()) > ".$time_difference;
while (TRUE) {
    sleep($sleep_time);
    echo 'checking locks.....';
    $result = mysql_query($delete_query, $link);
}

$conn->close();
?>
