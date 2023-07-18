<?php
    $FLAG = 'CTF{__YOU__ARE__A__PHP__KILLER__}';

    if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if ( (md5($username) == '00e0') && (md5($password) == '00e0') )  {
            echo '<br><strong>Admin Dashboard! Flag: ' . $FLAG . '</strong>';
        } else {
            echo 'Go <a href="/">Back</a>, Try Again ...<br>';
        }
    }
?>


