<?php

use Strukt\Process;

require 'vendor/autoload.php';

Process::switchChannels();
$ps = Process::run(["php -S 0.0.0.0:8080 index.php",
					"php -S 0.0.0.0:8081 index.php",
					"php -S 0.0.0.0:8082 index.php"], function($output){

	echo $output;
});

// $ps->next();
// echo $ps->current()->error();