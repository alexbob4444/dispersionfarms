<?php
echo('0The code ran and maybe worked... ');
echo shell_exec("/var/www/html/dispersionfarms/ git pull 2>&1");
echo shell_exec('/var/www/html/dispersionfarms/ chmod +x shellupdate');
echo shell_exec('/var/www/html/dispersionfarms/ ./shellupdate');
?>

