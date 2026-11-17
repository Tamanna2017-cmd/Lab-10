<!DOCTYPE html>
<html>
<head>
    <title>Member Login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f1effb; text-align: center; padding-top: 95px; }
        .card { background: #fff; width: 360px; margin: auto; padding: 32px; border-radius: 14px; box-shadow: 0 4px 14px #d8d2ee; }
        input { padding: 11px; width: 80%; margin: 14px 0; border: 1px solid #c9c2e4; border-radius: 6px; }
        button { padding: 11px 24px; background: #6653a6; color: white; border: 0; border-radius: 6px; cursor: pointer; }
        button:hover { background: #514087; }
    </style>
</head>
<body>
<div class="card">
    <h2>Member Login</h2>
    <p>Please enter your name to continue.</p>
    <form action="welcome.php" method="post">
        <input type="text" name="username" placeholder="Your name" required>
        <br>
        <button type="submit">Continue</button>
    </form>
</div>
</body>
</html>
