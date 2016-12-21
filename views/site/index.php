<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Carousel;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    

   <div id="divbg">
        <h1 align="center" style="margin:0px;"><b>Home</b></h1>
        
        <!--container for carousel-->
        
            
          
           
<div>
     <?php echo Html::img('@web/images/pic1.jpg',['width'=>'100%','height'=>'354']) ?>
       </div>

    <hr class="featurette-divider">
    <h1 align="center"> Welcome Sandy Beach Resort</h1>        
    <section>
        
        <p style="font-style:normal; padding:20px;">    

Welocme to Sandy Beach Resort we are a leader in the global hospitality industry, with a vast collection and a reputatable service of excellence at home and abroad. Our  wide range of diverse portfolio includes elegant resorts and modern city center properties. From the beaches of jamaica, St. lucia, and Barbados it has been proven numerous times that our hotels offer a superior guest experience that is unique.

our Hotel has  offered guests an extraordinary place that is created by combining architecture and structure, decor and of course artistry, and magnificent features all in this great location. Just add great service to this and the result is an extraordinary experience that would make your memory here a long and lasting one.Only a few hotels can boast its longevity in this industry and today, we have added city center properties to our collection, with core locations that allow you to join the hustle and bustle of the city, take part in the action of the business district, and enjoy the culture, the lights and sounds of street life. 

We have teamed with other local businesses in the area to give you our visitors more flexibility, more freedom  and more security to enjoy your experience  with us. Our fine collection of top rated resorts include Sandy Beach in Barbados, and the Sandy Beach hide away in St. Lucia Located in the city and is considered one of the country's land mark. Our resorts are situated in some of the most breathtaking and pristine areas in the caribbean, and is a popular choice among travelers from across the globe.it is said that our beautiful resort is associated with the most iinviting beaches, fun activities and entertainment

We guarantee a consistent and fullfilling time here, throughout our small collection of resorts by adhering strict company-wide standards. High-quality amenities are available to all guests when-ever they visit. Features such as our Special Awardee's Club is a recognition program that is geared towards recognizing outstanddinf individuals or groups and our Sandy Beach Gold which is package specifically deals to our frequent vistors or customers. Our business centers cater to the needs of disadvantaged travelers. With these contributing factors and more, make every Stay at Sandy Beach Resort a memorable one.
        </p>
    </section>
    
    <hr class="featurette-divider">
    <br>
        <br>
        <br>
    <!--Link to registration page-->    
    <a href="register.php">
        <!-- First Featurette -->
        <div class="featurette" id="about">
             <?php echo Html::img('@web/images/pic1.jpg',['class' => 'featurette-image img-circle img-responsive pull-right','width'=>'200','height'=>'200']) ?>
            
            <h2 class="featurette-heading">Visit us Today
                <span class="text-muted">Register to to recieve information on our specials</span>
            </h2>
            <p class="lead">The Most Beautiful Scenery and Extraordinary Experience Awaits You Today!</p>
        </div>
    </a>
        
        
    <hr class="featurette-divider">
    
    <!--link services page-->
    <br>
        <br>
        <br>    
    <a href="services.php">
        <!-- Second Featurette -->
        <div class="featurette" id="services" >
            
            <?php echo Html::img('@web/images/pic2.jpg',['class' => 'featurette-image img-circle img-responsive pull-left','width'=>'200','height'=>'200']) ?>
            <h2 class="featurette-heading">Travel from home or Abroad
                <span class="text-muted">It will be Sn Awesome experience</span>
            </h2>
            <p class="lead">We offer services of the highest quality to ensure that your experience will be memorable! </p>
        </div>
    </a>
    <hr class="featurette-divider">
<br>
        <br>
        <br>
    <!--link to contact us page-->
    <a href="contactus.php">
        
        <!-- Third Featurette -->
        <div class="featurette" id="contact">
             <?php echo Html::img('@web/images/pic2.jpg',['class' => 'featurette-image img-circle img-responsive pull-right','width'=>'200','height'=>'200']) ?>
           
            <h2 class="featurette-heading">Contact Us Today
                <span class="text-muted">As all your queries will be dealt promptly</span>
            </h2>
            <p class="lead">Feel free to register and get to view all that we have in store. Leave your email address and we will surely get back to you promptly. </p>
        </div>
    </a>

    <hr class="featurette-divider">
           
    
</div>
     
</div>
