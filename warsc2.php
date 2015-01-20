<?php
//echo shell_exec('sh /data/configs/automatizacion/scripts/test.sh');
//echo "Inicia el proceso ..."
$old_path = getcwd();
chdir('/data/tmp/');
$output = shell_exec('ssh -i /data/bin-web/s4ds-4.pem -v -tt -o StrictHostKeyChecking=no ec2-user@fs.s4ds.com "sudo /bin/sh /data/tmp/warTmp.sh > /data/tmp/error.log"');
chdir($old_path);
echo "generando war prueba"
 ?>
