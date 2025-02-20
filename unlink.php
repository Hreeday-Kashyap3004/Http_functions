<?php
$file = "sample.txt";

if (file_exists($file)) {
    if (unlink($file)) {
        echo "File '$file' deleted successfully.";
    } else {
        echo "Error deleting the file.";
    }
} else {
    echo "File does not exist.";
}
?>
