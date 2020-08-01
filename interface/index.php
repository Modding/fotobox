<?php

include "config.php";

function hashmypw($pw, $salt){
    $hash = hash(sha512, $pw. $salt);
    return $hash;
}


if (isset($_POST['user']))
{

$login = FALSE;
    if ($_POST['user'] === $user['username']){
    $pwhash = hashmypw($_POST['pw'], $user['salt']);

        if ($pwhash === $user['passwd']){

            $login = TRUE;
        }
    }

    if ($login == TRUE){
        session_start();
        $_SESSION["user"] = $_POST['user'];
        die ('<script type="text/javascript">
                setTimeout("self.location.href=\'/interface.php\'", 3);
                </script>');
    }else{
        die ('<script type="text/javascript">
                setTimeout("self.location.href=\'/index.php\'", 3);
                </script>');
    }
}
session_start();
session_destroy();
?>
<html>
<head>
    <title>Fotobox Administration</title>
</head>
<body>
<form action="" method="post">
    <input name="user" type="text"><br>
    <input name="pw" type="password"><br>
<input type="submit" />
</form>
</body>
</html>