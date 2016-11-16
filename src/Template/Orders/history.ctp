<div class="history-product">
	<div class="panel panel-info">
		<h4 class="panel-heading"><i class="glyphicon glyphicon-th"></i> Lịch sử mua hàng</h4>
		<h4>Dưới đây là toàn bộ thông tin mua hàng của bạn</h4>
		
		<div class="panel panel-body">
			<hr>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>STT</th>
						<th>Thời gian</th>
						<th>Email</th>
						<th>Tiền thanh toán</th>
						<th>Tình trạng</th>
						<th>Chi tiết</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($orders as $order): ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td>
								<?php echo date_format($order->created, "d/m/Y H:i:s"); ?>
							</td>
							<td><?php echo $order->email; ?></td>
							<td><?php echo number_format(json_decode($order->payment)->total) ?> VND</td>

							<td>
								<?php if ($order['status']==0): ?>
									<span class="label label-info">Đang xử lý</span>
								<?php elseif($order['status']==1): ?>  
									<span class="label label-success">Đã xử lý</span>
								<?php elseif($order['status']==2): ?>  
									<span class="label label-warning">Tạm ngưng</span>
								<?php else: ?>
									<span class="label label-default">Hủy</span>
								<?php endif ?>
							</td>
							<td><?php echo $this->Html->link('Xem','/don-hang/'.$order['id']); ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<hr>
			<strong>Ghi chú tình trạng đơn hàng:</strong>
			<ul>
				<li>Đã xử lý: đơn hàng đã được chấp nhận</li>
				<li>Đang xử lý: đơn hàng đang đợi xứ lý, bạn vui lòng thanh toán cho đơn hàng này</li>
				<li>Hủy: đơn hàng đã bị hủy, vui lòng liên hệ tại <a href="<?php echo DOMAIN ?>lien-he">đây</a> để biết thêm chi tiết</li>
			</ul>
		</div>
	</div>


</div>
