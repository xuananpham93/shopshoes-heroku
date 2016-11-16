<table class="table table-hover">
  <thead>
    <tr>
      <th>Name Product</th>
      <th>Product Image</th>
      <th>Company Name</th>
      <th>Size</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product): ?>
      <tr>
        <td><?php echo $product->name ?></td>
        <td><img src="<?php echo DOMAIN ?><?php echo $product->images ?>" width="200px" alt=""></td>
        <td><?php echo $product->hang_id ?></td>
        <td><?php echo $product->size ?></td>
        <td><?php echo $product->price ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>