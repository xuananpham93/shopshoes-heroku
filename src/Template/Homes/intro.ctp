<?php $intros = $gioithieu->first(); ?>



<div class="panel">
	<h4 class="panel-heading"><i class="glyphicon glyphicon-th"></i> <?php echo h($intros->name); ?></h4>
	<div class="panel-body">
		<?php echo $intros->content ?>
	</div>
</div>