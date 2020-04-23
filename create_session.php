<?php
    session_start();
    if (isset($_SESSION['views'])) {
        $_SESSION['views'] += 1;
    } else {
        $_SESSION['views'] = 0;
    }
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['role'] = "admin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My great Website</title>
</head>
<body>
    <?php
    echo "<p>This site has had {$_SESSION['views']} views!</p>";
    echo "<p>Your current role on this site is {$_SESSION['role']}</p>";
    echo "<p>These are your browser details: <br> {$_SESSION['browser']}</p>";
    ?>
    <br><br>
    <p><a href="read_session.php">Read Session</a></p>
    <p><a href="destroy_session.php">Destroy Session</a></p>
    <p><a href="destroy_all_session.php">Destroy All Sessions</a></p>
</body>
</html>