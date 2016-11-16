
<div id="nav">
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>    

		</div>
		<div class="navbar-collapse collapse">
			<?php

			// $items = $rows;
			// $id = '';
			// echo "<ul class = 'nav navbar-nav'>";
			// foreach($items as $item){
			// 	if($item['parent_id'] == 0){
			// 		echo "<li ><a href='#'>".$item['name']."</a>";
			// 		$id = $item['id'];
			// 		sub($items, $id);
			// 		echo "</li>";
			// 	}
			// }
			// echo "<li><a href=''>Sản phẩm mới</a></li>";
			// echo "<li><a href=''>Tin tức</a></li>";
			// echo "<li><a href=''>Liên hệ</a></li>";
			// echo "</ul>";

			// function sub($items, $id){
			// 	echo "<ul>";
			// 	foreach($items as $item){
			// 		if($item['parent_id'] == $id){
			// 			echo "<li><a href='#'>".$item['name']."</a>";
			// 			sub($items, $item['id']);
			// 			echo "</li>";
			// 		}
			// 	}
			// 	echo "</ul>";
			// }
			?>

			<ul class="nav navbar-nav">
				<?php foreach ($catproducts as $row): ?>
					<?php if ($row['parent_id'] == 0): ?>
						<li class="dropdown mega-dropdown list-menu">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $row['name'] ?><span class="caret"></span></a>
							<?php if (count($row) > 0): ?>
								<ul class="dropdown-menu mega-dropdown-menu row">
									<?php foreach ($catproducts1 as $row1): ?>
										<?php if ($row1['parent_id'] == $row['id']): ?>
											<li class="col-sm-3"><a href="<?php echo DOMAIN ?>danh-muc/<?php echo $row1['id'] ?>/<?php echo $row1['alias'] ?>"><?php echo $row1['name'] ?></a>
												<?php if (count($row1) > 0):?>
													<ul>
														<?php foreach ($catproducts2 as $row2): ?>
															<?php if ($row2['parent_id'] == $row1['id']): ?>
																<li>
																	<a href="<?php echo DOMAIN ?>danh-muc/<?php echo $row2['id'] ?>/<?php echo $row2['alias'] ?>"><?php echo $row2['name'] ?></a>
																</li>
															<?php endif ?>														
														<?php endforeach ?>
													</ul>
												<?php endif ?>
											<?php endif ?>
										</li>
									<?php endforeach ?>
								</ul>
							<?php endif ?>
						</li>
					<?php endif ?>
				<?php endforeach ?>
				<li class="list-menu"><a href="<?php echo DOMAIN ?>gioi-thieu">Giới thiệu</a></li>
				<?php foreach ($catalogues as $catalogue): ?>
					<?php if ($catalogue['parent_id'] == null): ?>
						<li class="dropdown mega-dropdown list-menu">
							<a href="<?php echo DOMAIN ?>thong-tin/<?php echo $catalogue->id ?>/<?php echo $catalogue->alias ?>"><?php echo $catalogue['name'] ?></a>
						</li>
					<?php endif ?>
				<?php endforeach ?>
				<li class="list-menu"><a href="<?php echo DOMAIN ?>lien-he">Liên hệ</a></li>
			</ul>

		</div>



	</nav>



</div><!-- #NAV