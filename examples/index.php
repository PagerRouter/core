<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Pimple\Container();

$app->register(Shrikeh\PagerRouter\Provider\PagerDuty::fromEnv());

$foo = $app['pagerduty']['repository.oncalls'];
