<?php

require '../bootstrap.php';
require '../MiniblogApplication.php';

$app = new MiniblogApplication(true);
$app->run();