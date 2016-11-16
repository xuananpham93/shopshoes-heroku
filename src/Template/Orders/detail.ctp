<div class="panel panel-info">
	<h4 class="panel-heading" style="margin:0;"><i class="glyphicon glyphicon-th"></i> Chi tiết đơn hàng</h4>
	<?php if (isset($order)): ?> 
		<div class="panel-body">
			<?php 
			$payment_info = json_decode($order->payment);
			$order_info = json_decode($order->cart);
			?>
			<div class="row"> 
				<div class="col col-lg-6">
					<p><strong>Họ tên người mua hàng: </strong><span><?php echo $order->name; ?></span></p>
					<p><strong>Email: </strong><span><?php echo $order->email; ?></span></p>
					<p><strong>SĐT: </strong><span><?php echo $order->phone; ?></span></p>
					<p><strong>Địa chỉ: </strong><span><?php echo $order->address; ?></span></p>

				</div>
				<div class="col col-lg-6">
					<p><strong>Mã đơn hàng: </strong><span><?php echo $order['id']; ?></span></p>
					<p><strong>Tổng cộng: </strong><span class="label label-danger" style="font-size: 14px;"><?php echo number_format($payment_info->total) ?> VND</span></p>
				</div>
			</div>
			<hr>
			Tình trạng đơn hàng: 
			<?php if ($order['status']==0): ?>
				<span class="label label-info">Đang xử lý</span>
			<?php elseif($order['status']==1): ?>  
				<span class="label label-success">Đã xử lý</span>
			<?php elseif($order['status']==2): ?>  
				<span class="label label-warning">Tạm ngưng</span>
			<?php else: ?>
				<span class="label label-default">Hủy</span>
			<?php endif ?>
			<hr>
			<h4>Sản phẩm đã mua</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Đơn giá</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;  ?>
					<?php foreach ($order_info as $order): ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $order->name; ?></td>
							<td><?php echo $order->quantity; ?></td>
							<td><?php echo number_format($order->price); ?></td>
							<td><?php echo number_format($order->quantity*$order->price) ?> VND</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	<?php else: ?>
		Đơn hàng này không tồn tại.
	<?php endif; ?>
</div> 