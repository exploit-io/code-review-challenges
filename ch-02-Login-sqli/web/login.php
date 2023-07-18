
<?php
    require_once(__DIR__  . "/config.php");

    if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $dbQuery = 'SELECT password FROM users WHERE username="' . $username . '";';
        $dbResult = mysqli_query($db, $dbQuery, MYSQLI_USE_RESULT);
        $dbPassword = mysqli_fetch_array($dbResult,MYSQLI_BOTH)['password'];
        if ($dbPassword === md5($password)) {
            echo '<br><strong>Well Done! Flag: ' . $FLAG . '</strong>';
        } else {
            echo 'Go <a href="/">Back</a>, Try Again ...<br>';
        }
    }
?>
