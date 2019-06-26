<?php
    $branch = $_POST["branch"];
    $os = $_POST["os"];
    $output = shell_exec('./jenk-stag '.$branch. ' '.$os);
    echo $output;
?>
