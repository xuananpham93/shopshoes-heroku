<div class="panel">
	<?php if ($products): ?>
		
		<h4 class="panel-heading"><i class="glyphicon glyphicon-th"></i><small> Tìm kiếm: </small> <?php echo $keyword ?></h4>
		<div class="row">
			<?php foreach ($products as $product): ?>
				<div class="col-sm-3 text-center products">
					<a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias'] ?>">
						<?php if ($product['highlight'] != null && $product['highlight'] != ''): ?>
							<span class="sale">
								<strong><?php echo $product['highlight'] ?>%</strong>
							</span>
						<?php endif ?>
						<img src="<?php echo DOMAIN ?><?php echo $product['images'] ?>" class="img-thumbnail" alt="product1" width="304" height="236">
					</a>
					<p><?php echo $product['view'] ?> views</p>
					<img src="<?php echo DOMAIN ?>images/sao.png" alt="">
					<a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias'] ?>">
						<p><?php echo $product['name'] ?></p>
					</a>
					<h4><?php echo number_format($product['price']) ?> VNĐ <i class="glyphicon glyphicon-shopping-cart"></i></h4>
				</div>
			<?php endforeach ?>
		</div>
		
	<?php else: ?>
		
		<h4 class="panel-heading"><i class="glyphicon glyphicon-th"></i> Không tìm thấy kết quả</h4>

	<?php endif ?>
</div>
