<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('macrohock', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'dsn' => 'mysql:host=localhost;dbname=macrohock',
  'user' => 'root',
  'password' => 'root123',
));
$manager->setName('macrohock');
$serviceContainer->setConnectionManager('macrohock', $manager);
$serviceContainer->setDefaultDatasource('macrohock');
$serviceContainer->setLoggerConfiguration('defaultLogger', array (
  'type' => 'stream',
  'path' => '/var/log/propel.log',
  'level' => '300',
));
