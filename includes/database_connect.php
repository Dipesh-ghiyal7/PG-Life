<?php
$conn = mysqli_connect("localhost", "dipesh", "123", "PGLife");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
