<?php

/**
 * Run the Doctrine commands by typing 'php vendor/doctrine/orm/bin/doctrine ...'
 */

require_once 'app/config/bootstrap.php';

$em = $app->getEm();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);