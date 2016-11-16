<div class="panel">
	<h4 class="panel-heading"><i class="glyphicon glyphicon-bookmark"></i><small> Chi tiết: </small> <?php echo h($new->name); ?></h4>
	<div class="panel-body">
		<img src="<?php echo DOMAIN ?><?php echo $new->images ?>" class="img-responsive center-block" alt="">
		<?php echo $new->shortdes ?>
		<?php echo $new->content ?>
	</div>
	<br>
	<hr>
	<br>
	<div id="related-products">
		<div class="related_title">
			<label class="label label-info">Tin tức liên quan</label>
		</div>
		<ul class="list-group">
			<?php foreach ($related_news as $relate): ?>
				<li class="list-group-item">
					<a href="<?php echo DOMAIN ?>chi-tiet/<?php echo $relate->id ?>/<?php echo $relate->alias ?>">
						<?php echo $relate->name ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>