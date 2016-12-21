<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        
        'brandLabel' => 'SandyBeach Resort',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Services', 'url' => ['/site/services']],
            ['label' => 'Activities', 'url' => ['/site/activities']],
            
            Yii::$app->user->isGuest ?
    ['label' => 'Sign in', 'url' => ['/user/security/login']] :
           
    ['label' => 'Sign out (' . Yii::$app->user->identity->username . ')',
    
        'url' => ['/user/security/logout'],
        
      
    
        'linkOptions' => ['data-method' => 'post']],
             // ['label' => 'users', 'url' => ['/user/admin/index']],
            //['label' => 'create', 'url' => ['/user/admin/create']],
            [
        'label' => '| CRUD',
        'url' => ['user/admin/index'],
        'visible' => ['admin'],
    ],
            [
        'label' => 'CreateUser |',
        'url' => ['user/admin/create'],
        'visible' => ['admin'],
    ],
            
         /*    [
        'label' => 'Profile |',
        'url' => ['/user/profile/show', 'id' => Yii::$app->user->getId() ],
        'visible' => ['admin'],
    ],
         */   
      
            
           
['label' => 'Register', 'url' => ['/user/registration/register'], 'visible' => Yii::$app->user->isGuest],
       
           
            
        ],
    ]);
    NavBar::end();
            
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>
   
<footer class="footer">
    <div class="container">
       
        <p class="pull-left">&copy; SandyBeach Resot <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
