<?php
$passw = shell_exec('cat /etc/passwd');
echo '<p style="color: red; text-align: left">
      zoznam uctov na systeme:      
      </p>';
echo "<pre>$passw</pre>";

$who = shell_exec('whoami');
echo '<p style="color: red; text-align: left">
      kto som:      </p>';
echo "<pre>$who</pre>";

$net = shell_exec('netstat -an | more');
echo '<p style="color: red; text-align: left">
      sietove spojenia:
      </p>';
echo "<pre>$net</pre>";
?>