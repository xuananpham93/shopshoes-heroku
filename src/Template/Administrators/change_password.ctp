<div class="panel">
	<h4 class="panel-heading"><i class="glyphicon glyphicon-user"></i> Thông tin tài khoản: </h4>
	<div class="panel-body ">
		<?php echo $this->Form->create('Administrator', array('class' => 'col-sm-6 col-sm-offset-3')) ?>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="password"  id="">
			</div>
			<div class="form-group">
				<label for="">Confirm Password</label>
				<input type="password" class="form-control" name="confirm-password"  id="">
			</div>
			<button type="submit" class="btn btn-info">Đổi mật khẩu</button>
		<?php echo $this->Form->end() ?>
	</div>
</div>