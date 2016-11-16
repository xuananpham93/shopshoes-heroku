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

$cakeDescription = '';
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?= $cakeDescription ?>
		<?= $this->fetch('title') ?>
	</title>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>


	<?= $this->Html->meta('icon') ?>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
	<?= $this->Html->css('base.css') ?>
	<?= $this->Html->css('cake.css') ?>
	
	<?php echo $this->Html->css('style'); ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
	
	<!-- CKEditor -->
	<?php echo $this->CKEditor->loadJs(); ?>
	<script type="text/javascript" src="<?php echo DOMAINAD ?>js/ckfinder/ckfinder.js"></script>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo DOMAINAD ?>/js/jquery.bxslider.min.js"></script>

	<link href="<?php echo DOMAINAD ?>/css/jquery.bxslider.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="<?php echo DOMAINAD ?>/font-awesome/css/font-awesome.min.css">
	<!-- Bootstrap -->
	
	
	<?php echo $this->Html->script(array('ddaccordion', 'function')); ?>
	

</head>
<body>
	<?= $this->Flash->render() ?>
	<?= $this->fetch('content') ?>
</body>
</html>
