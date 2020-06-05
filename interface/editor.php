<?php


$file = $_GET['file'];

    switch ($file){
        case 1:
            $edit = "../config.py";
            break;
        case 2:
            $edit = "../design/template.html";
            break;
        case 3:
            $edit = "../fotobox.py";
            break;
        default:
            die('No file given');
    }
// configuration
$url = '/editor.php?file=' . $file;
//$edit = '/path/to/txt/file';

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($edit, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($edit);

?>
<!-- HTML form -->
<form action="" method="post">
    <textarea name="text"><?php echo htmlspecialchars($text) ?></textarea>
    <input type="submit" />
    <input type="reset" />
</form>


