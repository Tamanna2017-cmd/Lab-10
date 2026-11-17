<?php
session_start();

if (!isset($_SESSION["visitor_name"], $_SESSION["login_time"])) {
    header("Location: index.php");
    exit();
}

$visitorName = $_SESSION["visitor_name"];
$elapsed = max(0, time() - $_SESSION["login_time"]);

$hours = intdiv($elapsed, 3600);
$minutes = intdiv($elapsed % 3600, 60);
$seconds = $elapsed % 60;

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Ended</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f1effb; text-align: center; padding-top: 95px; }
        .card { background: white; width: 430px; margin: auto; padding: 34px; border-radius: 14px; box-shadow: 0 4px 14px #d8d2ee; }
        a { color: #6653a6; }
    </style>
</head>
<body>
<div class="card">
    <h2>Thank You, <?php echo htmlspecialchars($visitorName, ENT_QUOTES, "UTF-8"); ?>!</h2>
    <p>Your session has ended successfully.</p>
    <h3>Time Spent on the Website</h3>
    <p><?php echo $hours . " hour(s), " . $minutes . " minute(s), " . $seconds . " second(s)"; ?></p>
    <a href="index.php">Return to Login</a>
</div>
</body>
</html>
