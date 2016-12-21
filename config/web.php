<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    
    'modules' => [
    'user' => [
        'class' => 'dektrium\user\Module',
        
        'mailer' => [
            
            'sender'                => 'sandybeachresortclass@gmail.com', // or ['no-reply@myhost.com' => 'Sender name']
        'welcomeSubject'        => 'Thank you for Registering with sandy beach resort',
        'confirmationSubject'   => 'Sandy Beah Resort email confirmation',
        'reconfirmationSubject' => 'Sandy Beach',
        'recoverySubject'       => 'Sandy Beach Recoverys'
            
        ],
        'enableUnconfirmedLogin' => true,
        'enableConfirmation'=>true,
        'confirmWithin' => 21600,
        'cost' => 12,
        'enablePasswordRecovery'=>true,
        'enableAccountDelete'=>true,
        'admins' => ['admin'],
        'controllerMap' => [
            
            'class' => 'dektrium\user\controllers\AdminController',
                    'layout' => 'Route/user/admin/index',
        ],
        
        
    ],
],
        'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'LHw_cA80Vh3Q8pkD-gBkdy0PFcZzn7CT',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
       // 'user' => [
         //   'identityClass' => 'app\models\User',
           // 'enableAutoLogin' => true,
        //],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
            'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'sandybeachresortclass@gmail.com',
            'password' => 'Class2016',
            'port' => '587',
            'encryption' => 'tls',
        ],
    ],
       
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
