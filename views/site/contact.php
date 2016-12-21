<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <h1 align="center"><b>Contact Us</b></h1>
    <?php echo Html::img('@web/images/contactusmap.jpg',['width'=>'100%','height'=>'350']) ?>
   
   <hr class="featurette-divider">
    <br>



    <Section>

    <p>Let our professional staff help you find your perfect family vacation, weekend getaway, spring break vacation or that special honeymoon.
<p>
We look forward to hearing from you, whether you have a question, a suggestion or a comment about your visit to one of our  Resorts properties. Use our main reservation line to reserve your accommodations at any of our Resorts property, or contact the resort directly for questions about that resort’s accommodations or amenities.We thank you for your interest Please feel free to contact us directly by using any the following.
Satisfying our Guests is our principal aim. Therefore we would like to facilitate the reservations process with our telephone reservations service or If you need help, contact us by phone or email.
        </p>


    </Section>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    

    <?php endif; ?>
    <b>Telephone :</b><br>
Toll free-1(1876) 774-0040 or at (876) 774-0040
 <br><br>   
<b>Email:</b><br>
Emailinfo@snadybeach.com

        <br><br>        
<b>Mailing Address:</b><br>
Sandy Beach Resort<br>
Westpoint<br>
Negril<br>

Jamaica W.I.
    
</div>
