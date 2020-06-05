<?php


function checkloggedin($user){
    if(!isset($user)) {
        return FALSE;
    }

}



session_start();
$mylogin = checkloggedin($_SESSION["user"]);
if ($mylogin === FALSE){
    die ('<script type="text/javascript">
setTimeout("self.location.href=\'/index.php\'", 3);
</script>');
}
