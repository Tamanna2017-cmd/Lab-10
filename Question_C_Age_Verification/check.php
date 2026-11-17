<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit();
}

$visitorName = trim($_POST["username"] ?? "");
$ageValue = $_POST["age"] ?? "";

if ($visitorName === "" || filter_var($ageValue, FILTER_VALIDATE_INT) === false || (int)$ageValue < 0) {
    header("Location: index.html");
    exit();
}

$safeName = htmlspecialchars($visitorName, ENT_QUOTES, "UTF-8");
$visitorAge = (int)$ageValue;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Age Check Result</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f1effb; text-align: center; padding-top: 95px; }
        .card { background: white; width: 460px; max-width: 85%; margin: auto; padding: 32px; border-radius: 14px; box-shadow: 0 4px 14px #d8d2ee; }
        h2 { color: #514087; }
        a { color: #6653a6; }
    </style>
</head>
<body>
<div class="card">
    <?php if ($visitorAge < 18): ?>
        <h2>Hello, <?php echo $safeName; ?>, you are not authorized to visit the site.</h2>
    <?php else: ?>
        <h2>Welcome to this site, <?php echo $safeName; ?>!</h2>
    <?php endif; ?>
    <br>
    <a href="index.html">Try Again</a>
</div>
</body>
</html>
