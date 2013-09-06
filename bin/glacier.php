<?php

chdir(__DIR__ . '/..');

require_once 'vendor/autoload.php';

use Aws\Glacier\GlacierClient;

$service = GlacierClient::factory(include 'config/application.config.php');