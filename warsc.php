<?php
//echo shell_exec('sh /data/configs/automatizacion/scripts/test.sh');
//echo "Inicia el proceso ..."
$old_path = getcwd();
chdir('/tmp/');
$output = shell_exec('ssh -i /data/bin-web/s4ds-3.pem -v -tt -o StrictHostKeyChecking=no ec2-user@54.208.196.176 :"sudo /bin/bash /tmp/script.sh test3"');
chdir($old_path);
echo "generando war"
 ?>
