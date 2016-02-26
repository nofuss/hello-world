<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use NoFuss\HelloBubba\SayHello;

echo SayHello::bubba() . "\n";
