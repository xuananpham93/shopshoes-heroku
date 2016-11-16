<a href="" class="btn btn-danger" style="float:right;" id="exit">Ẩn</a>
<form action="<?php echo DOMAIN ?>so-sanh" method="POST" class="form-inline container" role="form">
	<?php foreach ($products as $product): ?>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a href="#" class="thumbnail">
			<img src="<?php echo DOMAIN ?><?php echo $product->images ?>" alt="">
			<h5 class="text-center"><?php echo $product->name ?></h5>
			</a>
		</div>
	<?php endforeach ?>
	<button type="submit" style="float: right; margin-top: 6%;" class="btn btn-primary">So sánh</button>
</form> 

<script>
    $(document).ready(function(){
        $('#exit').click(function(){
            $('.compare').hide('slow');
        });
    });
</script>