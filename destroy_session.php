<?php
    session_start();
    unset($_SESSION['views']);
    unset($_SESSION['browser']);
    unset($_SESSION['role']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Session</title>
</head>
<body>
    <h1>Your session has been sucessfully destroyed.</h1>
    <p><a href="create_session.php">Create Session</a></p>
    <p><a href="read_session.php">Read Session</a></p>
    <p><a href="destroy_all_session.php">Destroy All Sessions</a></p>
</body>
</html>