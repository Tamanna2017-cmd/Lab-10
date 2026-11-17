<!DOCTYPE html>
<html>
<head>
    <title>Date and Time Details</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f1effb; text-align: center; padding-top: 100px; }
        .card { background: white; width: 420px; margin: auto; padding: 32px; border-radius: 14px; box-shadow: 0 4px 14px #d8d2ee; }
        h2 { color: #514087; }
        p { font-size: 17px; }
    </style>
</head>
<body>
<div class="card">
    <h2>Today's Date and Time</h2>
    <?php
    date_default_timezone_set("Asia/Kolkata");

    echo "<p><strong>Date:</strong> " . date("d-m-Y") . "</p>";
    echo "<p><strong>Time:</strong> " . date("h:i:s A") . "</p>";
    echo "<p><strong>Day:</strong> " . date("l") . "</p>";
    ?>
</div>
</body>
</html>
