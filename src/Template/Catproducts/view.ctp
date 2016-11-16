<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

<div class="panel">
	<h4 class="panel-heading"><i class="glyphicon glyphicon-th"></i><small> Chuyên mục: </small> 
		<?php if ($check == null): ?>
			Tìm kiếm nâng cao
		<?php else: ?>
			<?php echo h($catproduct->name); ?>
		<?php endif ?>
	</h4>

	<?php if ($check == null): ?>
		<!-- Show all sản phẩm -->
		<div class="panel-body">
			<?php $count=0; ?>
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
				<?php $count++ ?>
				<?php if ($count % 4 == 0): ?>
					<div class="clearfix"></div>				
				<?php endif ?>
			<?php endforeach ?>
		</div>

	<?php else: ?>
		<!-- Lọc sản phẩm theo id -->
		<div class="panel-body">
			<?php $count=0; ?>
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
				<?php $count++ ?>
				<?php if ($count % 4 == 0): ?>
					<div class="clearfix"></div>				
				<?php endif ?>
			<?php endforeach ?>
		</div>
		<?php echo $this->element('pagination'); ?>
	<?php endif ?>
</div>