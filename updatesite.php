<?php
echo('This Code compiled Correctly and should have worked');
echo shell_exec("sudo /var/www/html/update 2>&1");
?>
