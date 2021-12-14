<?php

require __DIR__ . '/./vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$output = $bessie->say('hmm');
echo $output;

$gauja = new Cow('Hello, Farm!');
$gauja->setEyes('**');
$gauja->setTongue('U');
 echo $gauja;


