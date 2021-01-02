<?php
    require 'includes/links.php';
    echo '<script type="text/javascript">';
    echo ' alert("You left some field(s) empty.");';  //not showing an alert box.
    echo 'window.location.href = "../signup.php";';
    echo '</script>';
?>