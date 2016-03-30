<?php
echo('0The code ran and maybe worked... ');
echo shell_exec("/var/www/html/ git pull 2>&1");
echo shell_exec('chmod +x shellupdate');
echo shell_exec('./shellupdate');
?>

