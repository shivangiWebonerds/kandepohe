<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
               <ul>
                <li class="green">
                    <a href="#" class="icon-home"></a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </li>
               </ul>
             </nav>
           </div>
           <a class="brand" href="index.html"><img src="kandepohe_static/images/logo.png" alt="logo"></a>
           <div class="pull-right">
            <nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header nav_2">
              <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
           </div> 
           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="matches.html">New Matches</a></li>
                        <li><a href="viewed-profile.html">Who Viewed my Profile</a></li>
                        <li><a href="viewed-not_contacted.html">Viewed & not Contacted</a></li>
                        <li><a href="members.html">Premium Members</a></li>
                        <li><a href="shortlisted.html">Shortlisted Profile</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="search.html">Regular Search</a></li>
                        <li><a href="profile.html">Recently Viewed Profiles</a></li>
                        <li><a href="search-id.html">Search By Profile ID</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="inbox.html">Inbox</a></li>
                        <li><a href="inbox.html">New</a></li>
                        <li><a href="inbox.html">Accepted</a></li>
                        <li><a href="sent.html">Sent</a></li>
                        <li><a href="upgrade.html">Upgrade</a></li>
                      </ul>
                    </li>
                    <li class="last"><a href="contact.html">Contacts</a></li>
                </ul>
             </div><!-- /.navbar-collapse -->
            </nav>
           </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
   <div class="footer">
        <div class="container">
            <div class="col-md-4 col_2">
                <h4>About Us</h4>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
            </div>
            <div class="col-md-2 col_2">
                <h4>Help & Support</h4>
                <ul class="footer_links">
                    <li><a href="#">24x7 Live help</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                </ul>
            </div>
            <div class="col-md-2 col_2">
                <h4>Quick Links</h4>
                <ul class="footer_links">
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms and Conditions</a></li>
                    <li><a href="services.html">Services</a></li>
                </ul>
            </div>
            <div class="col-md-2 col_2">
                <h4>Social</h4>
                <ul class="footer_social">
                  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
                  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
                  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="copy">
              <p>Copyright &copy; <?= date('Y');?> Kandepohe. All Rights Reserved  | Design by <a href="http://webonerds.com/" target="_blank">webonerds</a> </p>
            </div>
        </div>
    </div>
<?php $this->endBody() ?>

 <script type="text/javascript">
         $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay:false,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
       </script>
       <script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</body>
</html>
<?php $this->endPage() ?>
