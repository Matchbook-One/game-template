<?php

$gii = require __DIR__ . '/gii.php';

$config = [
  'id'                  => 'game-generator-console',
  'basePath'            => dirname(__DIR__),
  'bootstrap'           => ['log', 'gii'],
  'controllerNamespace' => 'app\commands',
  'aliases'             => [
    '@bower' => '@vendor/bower-asset',
    '@npm'   => '@vendor/npm-asset',
    '@tests' => '@app/tests'
  ],
  'components'          => [
    'log' => [
      'targets' => [
        [
          'class'  => 'yii\log\FileTarget',
          'levels' => ['error', 'warning'],
        ]
      ]
    ]
  ],
  'modules'             => ['gii' => $gii]
  /*
  'controllerMap' => [
      'fixture' => [ // Fixture generation command line.
          'class' => 'yii\faker\FixtureController',
      ],
  ],
  */
];

if (YII_ENV_DEV) {
  // configuration adjustments for 'dev' environment
  // requires version `2.1.21` of yii2-debug module
  $config['bootstrap'][] = 'debug';
  $config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    // uncomment the following to add your IP if you are not connecting from localhost.
    //'allowedIPs' => ['127.0.0.1', '::1'],
  ];
}

return $config;
