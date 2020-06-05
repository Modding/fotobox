<?php
include "session.php";
?>

<html>
    <head>

    </head>
    <body>
        <h1>Hässliches Admin Interface</h1><br>
        <h2>File Editor:</h2><br>
            <a href="editor.php?file=1" target="_blank">Edit config.py</a><br>
            <a href="editor.php?file=2" target="_blank">Edit template.html</a><br>
            <a href="editor.php?file=3" target="_blank">Edit fotobox.py</a><br>
        <h2>Dateimanager:</h2><br>
            <a href="tinyfilemanager.php" target="_blank">Template Files</a><br>
        <h2>Admin Tasks:</h2><br>
            <a href="update.php" target="_blank">Git update</a><br>
            <a href="reboot.php" target="_blank">Reboot Fotobox</a><br>
    </body>
</html>
