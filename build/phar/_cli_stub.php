#!/usr/bin/env php
<?php

Phar::mapPhar('itjonction-img-opt.phar');

$application = require 'phar://itjonction-img-opt.phar/src/bootstrap.php';
//$application->setPharMode(true);
//$application->run();

__HALT_COMPILER();
