<?php //$this->request->session()->destroy();die; ?>

<script>
	function confirmDelete(url) {
		if (confirm('Bạn có muốn xóa sản phẩm này?')) {
			window.location = url;
		}
	}
</script>

<script>
	$(function(){
		$('.quantity').change(function (){
			window.location.href="<?php echo DOMAIN;?>update/"+$(this).attr('nam')+"/"+$(this).val()+"/"+$(this).attr('size');
		}) ;
	})

	function keypress(e){
 		//Hàm dùng để ngăn người nhập ký khác vào textBox
 		var keypressed = null;
 		if (window.event)
 		{
 			keypressed = window.event.keyCode; //IE
 		}
 		else
 		{ 
 			keypressed = e.which; //NON-IE, Standard
 		}
 		if (keypressed < 48 || keypressed > 57)
 			{ //CharCode của 0 là 48 (Theo bảng mã ASCII)
 			//CharCode của 9 là 57 (Theo bảng mã ASCII)
 			if (keypressed == 8 || keypressed == 127)
 			{//Phím Delete và Phím Back
 				return;
 			}
 			if (keypressed == 45 || keypressed == 32)
 			{//Phím Delete và Phím Back
 				return true;
 			}
 			return false;
 		}
 	}
 </script>

 <?php //pr($cart) ?>

 <?php if ($this->request->session()->check('cart')): ?>
 	<!-- new element -->
 	<div class="panel">
 		<h4 class="panel-heading"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng của bạn
 		</h4>
 		<div class=""> 
 			<!-- cart -->
 			<div class="">
 				<table class="table table-striped">
 					<thead>
 						<tr>
 							<th>STT</th>
 							<th class="col-sm-2 text-center">Hình ảnh</th>
 							<th class="col-sm-3 col-sm-offset-1 text-center">Tên sản phẩm</th>
 							<th style="padding: 6px">Số lượng</th>
 							<th class="col-sm-1">Size</th>
 							<th class="col-sm-2">Đơn giá</th>
 							<th>Xóa</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php $i = 1; ?>
 						<?php foreach ($cart as $item): ?>
 							<tr>
 								<td><?php echo $i++; ?></td>
 								<td class="col-sm-2">
 									<a href="<?php echo DOMAIN ?><?php echo $item['id'] .'/'.$item['alias'] ?>">
 										<img src="<?php echo DOMAIN ?><?php echo $item['images']; ?>" class="img-thumbnail center-block" alt="">
 									</a>
 								</td>
 								<td class="col-sm-4 col-sm-offset-1 text-center"><a href="<?php echo DOMAIN ?><?php echo $item['id'] .'/'.$item['alias'] ?>"><h5><?php echo $item['name']; ?></h5></a></td>
 								<td>
 									<div class="col-sm-3" style="padding-left: 0px;">
 										<input class="form-control text-center quantity" onkeypress="return keypress(event);" type="text" name="quantity" nam="<?php echo $item['id'] ?>" value="<?php echo $item['quantity'] ?>" size="<?php echo $item['size'] ?>">
 									</div>
 								</td>
 								<td>
 									<?php echo $item['size'] ?>
 								</td>
 								<td><?php echo number_format($item['price']) ?> VNĐ</td>
 								<td>
 									<a href="javascript:confirmDelete('<?php echo DOMAIN ?>remove/<?php echo $item['id'] ?>/<?php echo $item['size'] ?>')"><i class="glyphicon glyphicon-remove"></i></a>
 								</td>
 							</tr>
 						<?php endforeach ?>

 						<tr class="success">
 							<td></td>
 							<td colspan="4"><h4><strong>Tổng cộng</strong> </h4></td>

 							<td colspan="2">
 								<h4>
 									<span class="label label-danger"><?php echo number_format($payment['total']) ?> VNĐ</span>
 								</h4>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>

 	</div> <!-- end element -->


 	<!-- customer info -->
 	<div class="col col-lg-5">
 		<a class="btn btn-success" href="<?php echo DOMAIN ?>">Tiếp tục mua hàng</a>

 		<a class="btn btn-default" href="<?php echo DOMAIN ?>empty-cart">Làm rỗng giỏ hàng</a>
 	</div>
 	<div class="panel panel-info col col-lg-7 ">
 		<h4 class="panel-heading"><i class="glyphicon glyphicon-user"></i> Thanh toán đơn hàng</h4>
 		<div class="panel-body">
 			<?php $user = $this->request->session()->read('Auth.User') ?>
 			<?php if ($user): ?>
 				<form action="<?php echo DOMAIN ?>thanh-toan" method="POST" role="form" class="form-horizontal">
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Name:</label>
 						<div class="col-sm-10">
 							<input type="text" name="name" class="form-control" value="<?php echo $user['fullname'] ?>" id="" placeholder="Nhập tên">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Email:</label>
 						<div class="col-sm-10">	
 							<input type="text" name="email" class="form-control" value="<?php echo $user['email'] ?>" id="" placeholder="Nhập email">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Address:</label>
 						<div class="col-sm-10">
 							<input type="text" name="address" class="form-control" value="<?php echo $user['address'] ?>" id="" placeholder="Nhập địa chỉ">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Phone:</label>
 						<div class="col-sm-10">					
 							<input type="text" name="phone" class="form-control" value="<?php echo $user['phone'] ?>" id="" placeholder="Nhập số điện thoại">
 						</div>
 					</div>
 					<button type="submit" style="float: right" class="btn btn-primary">Thực hiện thanh toán</button>
 				</form>
 			<?php else: ?>
 				<form action="<?php echo DOMAIN ?>thanh-toan" method="POST" role="form" class="form-horizontal">
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Name:</label>
 						<div class="col-sm-10">
 							<input type="text" name="name" class="form-control" id="" placeholder="Nhập tên">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Email:</label>
 						<div class="col-sm-10">	
 							<input type="text" name="email" class="form-control" id="" placeholder="Nhập email">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Address:</label>
 						<div class="col-sm-10">
 							<input type="text" name="address" class="form-control" id="" placeholder="Nhập địa chỉ">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="control-label col-sm-2" for="">Phone:</label>
 						<div class="col-sm-10">					
 							<input type="text" name="phone" class="form-control" id="" placeholder="Nhập số điện thoại">
 						</div>
 					</div>
 					<button type="submit" style="float: right" class="btn btn-primary">Thực hiện thanh toán</button>
 				</form>
 			<?php endif ?>
 		</div>
 	</div>
 <?php else: ?>
 	<div class="panel panel-default">
 		<h4 class="panel-heading"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng của bạn</h4>
 		<div class="panel-body">
 			Giỏ hàng đang rỗng.
 			Quay về <a href="<?php echo DOMAIN ?>">trang chủ</a> để thêm sản phẩm vào giỏ hàng.
 		</div>
 	</div>
 <?php endif ?>


