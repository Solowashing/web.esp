<?php
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $time = time() * 1000; // timestamp in ms
    file_put_contents("status.txt", "$time,$status");
    echo "OK";
} else {
    echo "Missing status";
}
?>
