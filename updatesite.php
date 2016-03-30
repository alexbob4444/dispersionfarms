<?php
echo('0The code ran and maybe worked... ');
echo shell_exec("/var/www/html/dispersionfarms/ git pull 2>&1");
echo shell_exec('/ cp /var/www/html/dispersionfarms/* /var/www/html/');
echo shell_exec('/ cp /var/www/html/dispersionfarms/images/* /var/www/html/images/');
echo shell_exec('/ cp /var/www/html/dispersionfarms/textinfo/* /var/www/html/textinfo');
?>
