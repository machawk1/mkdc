<html>
<body>
<?php
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && strpos($entry,'.bib') !== false) {
            echo "<pre>".file_get_contents($entry)."</pre>";
        }
    }
    closedir($handle);
}

?>
</body>
</html>