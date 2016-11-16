<link rel="stylesheet" href="<?php echo DOMAIN ?>css/jquery.wm-zoom-1.0.min.css">



<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
		$('.nav-tabs a').on('shown.bs.tab', function(event){
				var x = $(event.target).text();         // active tab
				var y = $(event.relatedTarget).text();  // previous tab
				$(".act span").text(x);
				$(".prev span").text(y);
			});
	});	
</script>

<div id="detail-content">
	<div id="tranformer">
		<a href="">
			<div class="col-sm-3">
				<i class="fa fa-car fa-lg"></i> Giao hàng miễn phí
			</div>
		</a>
		<a href="">
			<div class="col-sm-3">
				<i class="fa fa-credit-card-alt"></i> Thanh toán khi nhận hàng
			</div>
		</a>
		<a href="">
			<div class="col-sm-3">
				<i class="fa fa-anchor"></i> Bảo hành chính hãng
			</div>
		</a>
		<a href="">
			<div class="col-sm-3">
				<i class="fa fa-reply"></i> Hotline: 0962187516
			</div>
		</a>
	</div>
	<!-- tranformer -->

	<div id="router">
		<a href="">Sản phẩm > <?php echo $product->name ?></a>
	</div>
	
	<div id="detail-product">
		<div class="col-sm-5">
			<article class="body">
				<div class="wm-zoom-container my-zoom-1">
					<div class="wm-zoom-box">
						<?php if ($product['highlight'] != null && $product['highlight'] != ''): ?>
							<span class="sale">
								<strong><?php echo $product['highlight'] ?>%</strong>
							</span>
						<?php endif ?>	
						<img src="<?php echo DOMAIN ?><?php echo $product->images ?>"  class="wm-zoom-default-img img-responsive" alt="alternative text" data-hight-src="<?php echo DOMAIN ?><?php echo $product->images ?>">
						<input type="hidden" name="image" value="<?php echo DOMAIN ?><?php echo $product->images ?>">
					</div>
				</div>
				<div class="color">
					<?php if ($product->images1 != null): ?>
						<?php $images1 = json_decode($product->images1) ?>
						<ul class="list-inline" name='image'>
							<li id="image"><img src="<?php echo DOMAIN ?><?php echo $product->images ?>" width="60px" alt=""></li>
							<?php foreach ($images1 as $key => $value): ?>
								<li id="image"><img src="<?php echo DOMAIN ?><?php echo $value ?>" width="60px" alt=""></li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
				</div>
			</article>

		</div>

		<div class="col-sm-6 col-sm-offset-1 info-product">
			<form action="<?php echo DOMAIN ?>gio-hang/<?php echo $product->id ?>" type="post">
				<h2><?php echo $product->name ?></h2>
				<h3>Giá: <?php echo number_format($product->price) ?> VNĐ</h3>
				<h5 >Giá thị trường: <span style="text-decoration: line-through;"><?php echo number_format($product->orginal_price) ?> VNĐ </span></h5>
				<?php foreach ($brand as $brand): ?>
					<h5>Thương hiệu: <strong><?php echo $brand['name'] ?></strong></h5>
				<?php endforeach ?>
				<?php echo $this->element('rating') ?>
				<?php if ($product->slug != null || $product->slug != ''): ?>
					<h5>Quà tặng khuyến mãi: </h5>
					<div class="bg-popover">
						<p><i class="fa fa-check-circle-o"></i> <?php echo $product->slug ?></p>
					</div>
				<?php endif ?>


				<!-- <div class="color">
					<?php if ($product->images1 != null): ?>
						<?php $images1 = json_decode($product->images1) ?>
						<ul class="list-inline" name='image'>
							<li id="image"><img src="<?php echo DOMAIN ?><?php echo $product->images ?>" width="60px" alt=""></li>
							<?php foreach ($images1 as $key => $value): ?>
								<li id="image"><img src="<?php echo DOMAIN ?><?php echo $value ?>" width="60px" alt=""></li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
				</div> -->

				<div class="clearfix"></div>
				<div id="buy-product">

					<div class="input-group col-sm-3" id="size">
						<!-- <?php $sizes = explode(',', $product->size) ?>
						<?php pr($sizes) ?> -->
						<p>Chọn size:</p>
						<select name="size" class="form-control" required>
							<option value="">-- Hãy Chọn --</option>
							<?php foreach ($sizes as $key => $value): ?>
								<option value="<?php echo $value ?>"><?php echo $value ?></option>
							<?php endforeach ?>

						</select>

					</div>
					<div class="input-group col-sm-3" id="quantity">
						<span class="input-group-btn">
							<button class="btn btn-default disabled">Số lượng</button>
						</span>
						<input type="text" name='soluong' class="form-control" style="width: 45px; height:33px;">
					</div>
					<div class="col-sm-4 buy">
						<button class="btn btn-success btn-lg" type="submit">Mua hàng ngay</button>
					</div>

					<div class="col-sm-8">
						<ul>
							<?php if ($product->code != ''): ?>
								<li>
									<i class="fa fa-check-circle-o"> <?php echo $product->code ?></i> 
								</li>
							<?php endif ?>
						</ul>
					</div>
				</div>

				<div class="clearfix"></div>
				<hr>
				<div id="buy-product">
					<div class="col-sm-5 buy-img">
						<div
						class="fb-like"
						data-share="true"
						data-width="450"
						data-show-faces="true"></div>
					</div>
				<!-- <div class="col-sm-7">
					<span>Thêm vào: </span>
					<button class="btn btn-default btn-xs">Sản phẩm ưa thích</button> 
					<a href="" class="btn btn-info btn-xs">Giỏ hàng</a></div> -->
				</div>
			</form>
		</div>
	</div>

	<!-- detail-product -->
	<div class="clearfix"></div>
	<div id="param-product">
		<div class="">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#home">Đặc điểm nổi bật</a></li>
				<li><a href="#menu1">Thông tin sản phẩm</a></li>
				<li><a href="#menu2">Bình luận</a></li>

			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">

					<?php echo $product->shortdes ?>

				</div>
				<div id="menu1" class="tab-pane fade">

					<?php echo $product->content ?>

				</div>

				<div id="menu2" class="tab-pane fade">

					<div>
						<script>
							window.fbAsyncInit = function() {
								FB.init({
									appId      : '1288254141193317',
									xfbml      : true,
									version    : 'v2.8'
								});
							};

							(function(d, s, id){
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) {return;}
								js = d.createElement(s); js.id = id;
								js.src = "//connect.facebook.net/en_US/sdk.js";
								fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1288254141193317";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-comments" data-href="http://develop08.vtmgroup.com.vn/" data-numposts="5"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<div id="related-products">
		<div class="related_title">
			<label class="label label-info">Sản phẩm liên quan</label>
		</div>
		<?php foreach ($related as $relate): ?>
			<div class="col-sm-3">
				<a href="<?php echo DOMAIN ?><?php echo $relate['id'] ?>/<?php echo $relate['alias'] ?>">
					<?php if ($relate['highlight'] != null && $relate['highlight'] != ''): ?>
						<span class="sale">
							<strong><?php echo $relate['highlight'] ?>%</strong>
						</span>
					<?php endif ?>
					<img src="<?php echo DOMAIN ?><?php echo $relate['images'] ?>" class="img-thumbnail" alt="product1" width="304" height="236">
				</a>
			</div>
		<?php endforeach ?>
	</div>
</div>
<!-- #CONTENT -->

<script type="text/javascript" src="<?php echo DOMAIN ?>js/jquery.wm-zoom-1.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.my-zoom-1').WMZoom({

			config : {
				inner  : false,
				position : 'right', 

				margin : 100

			}


		});
		$('.my-zoom-2').WMZoom({
			config : {
				inner : true
			}
		});
	});
</script>

<script>
	$(document).ready(function(){
		$('#image img').click(function(){
			var imgpath = $(this).attr('src')
			$('.wm-zoom-box img').attr("src",imgpath);
			$('.wm-zoom-box img').attr("data-hight-src",imgpath);
			$('.wm-zoom-box input').attr("value",imgpath);
		});
	})
</script>

