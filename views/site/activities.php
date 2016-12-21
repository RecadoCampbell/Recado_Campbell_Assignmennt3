<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Activites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="divbg">

        <h1 align="center"><b>Hotel Activities</b></h1>
        <?php echo Html::img('@web/images/activities.jpg',['width'=>'100%','height'=>'350']) ?>
        
        <hr class="featurette-divider">

        <p>

Experience the ultimate vacation packages at Sandy Beach Resort, Spa and Casino. Surrounded by stunning Beaches and wide variety of outdoor recreational activities. You’ll find the incredible convenience and world-class amenities you need for the perfect vacation. Enjoy swimming in the year-round outdoor heated pool with on-site food and beverage service, soaking in our oversized hot tub, or workout in our Gym or relax with a healing massage or luxurious treatment at Stillwater Spa & Salon.

When its time to explore, you’ll find exciting adventures – snorkling, hiking and biking to shopping and golf just to name a few. Whether you're an adventurer, a jet ski fanatic, or a relaxation addict, there are always exciting things to do here.Come and enjoy a wide range of things to do on the grounds of our resort hotel. Choose from an array of activities geared towards adults and children alike - from our award-winning Spa Django, to trap shooting at Renegade Trailhead, to visits with our friendly resort mascots - there’s truly something for everyone here. 


        </p>
        <hr class="featurette-divider">
        <br>
        <br>
        <!--Sections-->
        <sections>
    

           <!-- <h1 class="featurette" > Sporting Activites</h1>-->

            <!--featuerette contaings images and brief info on sport activty -->
            <div class="featurette" id="services">
                <?php echo Html::img('@web/images/sportact.png',['class'=>'featurette-image img-circle img-responsive pull-left','width'=>'250','height'=>'250']) ?>
                
                <h2 class="featurette-heading">Try our wide range of Water sports
                    <span class="text-muted"> For the Sport and None Sport fans </span>
                </h2>
                <p class="lead">This is the ideal package for sports enthusiasts, with our hosting of many events we sure you'll be coming back to be apaart of our spectator crowd   </p>
            </div>

        </sections>
        <hr class="featurette-divider">
        <br>
        <br>
        <sections>
<br><br>
           <!-- featurette snorkling-->
    
            <div class="featurette" id="services">
                <?php echo Html::img('@web/images/snorkling.jpg',['class'=>'featurette-image img-circle img-responsive pull-right','width'=>'250','height'=>'250']) ?>
                
                <h2 class="featurette-heading">Travel from home
                    <span class="text-muted">It's Pretty Cool Too.</span>
                </h2>
                <p class="lead">Snorkling is of the many favourites amongst our packages, come delve in this beautiful experience as you'll explore our beautiful waters. </p>
            </div>

        </sections>
        <hr class="featurette-divider">
        <br>
        <br>
        <sections>
            <div class="featurette" id="services">
                <?php echo Html::img('@web/images/entertainment.JPG',['class'=>'featurette-image img-circle img-responsive pull-left','width'=>'250','height'=>'250']) ?>
               
                <h2 class="featurette-heading">Be apart of the Excitement
                    <span class="text-muted">Come and Be Entertained</span>
                </h2>
                <p class="lead">Our Entertainment package always have our guests asking for more </p>
            </div>

        </sections>
        <hr class="featurette-divider">

    </div>

    <code><?= __FILE__ ?></code>
</div>
