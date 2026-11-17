<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enteredName = trim($_POST["username"] ?? "");

    if ($enteredName === "") {
        header("Location: index.php");
        exit();
    }

    $_SESSION["visitor_name"] = $enteredName;
    $_SESSION["login_time"] = time();
}

if (!isset($_SESSION["visitor_name"], $_SESSION["login_time"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f1effb; text-align: center; padding-top: 90px; }
        .clock { position: absolute; top: 22px; right: 25px; color: #514087; font-weight: bold; }
        .card { background: white; width: 420px; margin: auto; padding: 35px; border-radius: 14px; box-shadow: 0 4px 14px #d8d2ee; }
        button { padding: 11px 26px; background: #6653a6; color: white; border: 0; border-radius: 6px; cursor: pointer; }
    </style>
</head>
<body>
<div class="clock">
    Start Time: <?php echo date("h:i:s A", $_SESSION["login_time"]); ?>
</div>
<div class="card">
    <h1>Hello, <?php echo htmlspecialchars($_SESSION["visitor_name"], ENT_QUOTES, "UTF-8"); ?>!</h1>
    <p>We are happy to have you here.</p>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</div>
</body>
</html>
