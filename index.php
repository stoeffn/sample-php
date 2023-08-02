<?php

$myfile = fopen("ips.txt", "a") or die("Unable to open file!");
fwrite($myfile, $_SERVER['REMOTE_ADDR']);
fwrite($myfile, "\n");
fclose($myfile);
