<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuke the Session</title>
</head>
<body>
<h1>Your session has been sucessfully destroyed.</h1>
    <p><a href="create_session.php">Create Session</a></p>
    <p><a href="read_session.php">Read Session</a></p>
    <p><a href="destroy_session.php">Destroy Session</a></p>
</body>
</html>