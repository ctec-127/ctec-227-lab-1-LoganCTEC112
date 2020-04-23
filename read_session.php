<?php
    session_start();
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == "admin") {
            echo "<p>Welcome admin!</p>";
        } else {
            echo "<p>Are you sure you are supposed to be here?</p>";
        } 
    } else {
        echo "<h1>Please visit <a href=\"create_session.php\">Create Session</a> first!</h1>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Site</title>
</head>
<body>
<?php
    if (isset($_SESSION['views'])) {
        echo "<p>This site has had {$_SESSION['views']} views!</p>";
    }
    if (isset($_SESSION['role'])) {
        echo "<p>Your current role on this site is {$_SESSION['role']}</p>";
    }
    if (isset($_SESSION['browser'])) {
        echo "<p>These are your browser details: <br> {$_SESSION['browser']}</p>";
    }
    ?>
    <br><br>
    <p><a href="create_session.php">Create Session</a></p>
    <p><a href="destroy_session.php">Destroy Session</a></p>
    <p><a href="destroy_all_session.php">Destroy All Sessions</a></p>
</body>
</html>