<?php
function alpha() {
    beta();
}

function beta() {
    gamma();
}

function gamma() {
    echo "<pre>";
    print_r(debug_backtrace());
    echo "</pre>";
}

alpha();
?>
