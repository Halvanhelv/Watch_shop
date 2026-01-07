<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>

<h1>An error occurred</h1>
<p><b>Error code:</b> <?= $errno ?></p>
<p><b>Error message:</b> <?= $errstr ?></p>
<p><b>File where error occurred:</b> <?= $errfile ?></p>
<p><b>Line where error occurred:</b> <?= $errline ?></p>

</body>
</html>
