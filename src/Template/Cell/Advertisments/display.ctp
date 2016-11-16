<div id="content-footer">
	<div id="advert">
		<?php foreach ($advertisments as $advertisment): ?>
			<a href="<?php echo $advertisment['link'] ?>">
				<img src="<?php echo DOMAIN ?><?php echo $advertisment['images'] ?>" class="img-responsive" alt="">
			</a>
		<?php endforeach ?>
		<?php foreach ($videos as $video): ?>
			<?php echo $video['youtube'] ?>
		<?php endforeach ?>
	</div>
	<!-- #ADVERT -->
</div>
<!-- #CONTENT-FOOTER-->