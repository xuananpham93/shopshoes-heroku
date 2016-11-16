<div class="panel">
	<h4 class="panel-heading"><i class="glyphicon glyphicon-th"></i> <?php echo h($catalogues->name); ?></h4>
	<div class="panel-body">
		<?php foreach ($news as $new): ?>
			<div class="new-shortdes">
				<div class="col-sm-4">
					<?php if ($new->images): ?>
						<a href="<?php echo DOMAIN ?>chi-tiet/<?php echo $new->id ?>/<?php echo $new->alias ?>">
							<img src="<?php echo DOMAIN ?><?php echo $new->images ?>" class="img-responsive" alt="">
						</a>
					<?php endif ?>
				</div>
				<div class="col-sm-8">
					<a href="<?php echo DOMAIN ?>chi-tiet/<?php echo $new->id ?>/<?php echo $new->alias ?>">
						<h4><?php echo $new->name ?></h4>
					</a>
					<p><?php echo $new->shortdes ?></p>
				</div>
			</div>
			<hr>
			<div class="clearfix"></div>	
		<?php endforeach ?>
	</div>
</div>