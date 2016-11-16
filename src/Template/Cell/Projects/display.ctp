<div class="container">
	<ul class="list-inline text-center">
		<?php foreach ($projects as $project): ?>
			<li>
				<a href="<?php echo $project['link'] ?>">
					<img src="<?php echo DOMAIN ?><?php echo $project['images'] ?>"  alt="">
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</div>