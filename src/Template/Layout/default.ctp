<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// $cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <?php 
    use Cake\ORM\TableRegistry;
    $this->Settings = TableRegistry::get('Settings');
    $settings = $this->Settings->find()
    ->where(['id' => 1])
    ;
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?>
    </title>
    <link rel="icon" href="<?php echo DOMAIN ?>images/logo.png">
    <meta>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?php echo DOMAIN ?>js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="<?php echo DOMAIN ?>css/jquery.bxslider.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?php echo DOMAIN ?>font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="<?php echo DOMAIN ?>css/bootstrap.min.css" rel="stylesheet">
    <?php echo $this->Html->css('rating'); ?>
    <script src="<?php echo DOMAIN ?>js/rating.js"></script>
    <?= $this->Html->css('style_common.css') ?>
    <?= $this->Html->css('style1.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script src="<?php echo DOMAIN ?>js/bootstrap.min.js"></script>
</head>
<body>
    <?= $this->Flash->render() ?>


    <div id="container" class="">
        <div id="header">
            <?php echo $this->element('top-page'); ?>
            <div class="clearfix"></div>
            <?php echo $this->element('menu'); ?>
        </div><!-- #HEADER -->
    </div>

    <div id="content">
        <?= $this->fetch('content') ?>
    </div>
    <!-- #CONTENT -->
    <div class="clearfix"></div>
    
    <?php echo $advertisment = $this->cell('Advertisments'); ?>

    <div class="clearfix"></div>

    <?php echo $this->element('register'); ?>

    <div class="clearfix"></div>

    <?php echo $this->element('footer'); ?>

    

    

</div><!-- #CONTAINER -->


<script>
    $(document).ready(function(){
        $('.slider4').bxSlider({
            slideWidth: 300,
            minSlides: 2,
            maxSlides: 3,
            moveSlides: 1,
            slideMargin: 10,
            auto: true,
        });
    });

</script>

<script>
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });
</script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="<?php echo DOMAIN ?>js/index.js"></script>

<!-- Nhúng subiz -->

<?php foreach ($settings as $row): ?>
    <?php echo $row->analytics; ?>
<?php endforeach ?>
</body>
</html>
