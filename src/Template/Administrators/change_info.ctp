<?php //pr($user) ?>
<div class="panel">
	<h4 class="panel-heading"><i class="glyphicon glyphicon-user"></i> Thông tin tài khoản: </h4>
	<div class="panel-body ">
		<?php echo $this->Form->create('Administrator', array('class' => 'col-sm-6 col-sm-offset-3')) ?>
		<div class="form-group">
			<label for="">Last Name:</label>
			<input type="text" class="form-control" name="lastname" value="<?php echo $user['lastname'] ?>" id="">
		</div>
		<div class="form-group">
			<label for="">First Name</label>
			<input type="text" class="form-control" name="firstname" value="<?php echo $user['firstname'] ?>" id="">
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>" id="">
		</div>
		<div class="form-group">
			<label for="">Address</label>
			<input type="text" class="form-control" name="address" value="<?php echo $user['address'] ?>" id="">
		</div>
		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" class="form-control" name="phone" value="<?php echo $user['phone'] ?>" id="">
		</div>
		<button type="submit" class="btn btn-info">Cập nhật</button>
		<?php echo $this->Form->end() ?>
	</div>
</div>