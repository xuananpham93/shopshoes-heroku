<div id="slide-product">
    <div class="slider4">
        <?php foreach ($products as $product): ?>
            <a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias'] ?>">
                <div class="slide">
                    <img src="<?php echo DOMAIN ?><?php echo $product['images'] ?>" class="img-thumbnail">
                </div>
            </a>
        <?php endforeach ?>
        
       <!--  <div class="slide"><img src="images/slide-2.png"></div>
        <div class="slide"><img src="images/slide-3.png"></div>
        <div class="slide"><img src="images/slide-2.png"></div>
        <div class="slide"><img src="images/slide-3.png"></div>
        <div class="slide"><img src="images/slide-1.png"></div>
        <div class="slide"><img src="images/slide-3.png"></div>
        <div class="slide"><img src="images/slide-2.png"></div>
        <div class="slide"><img src="images/slide-1.png"></div>
        <div class="slide"><img src="images/slide-3.png"></div> -->
    </div>
</div>
<!-- #SLIDE-PRODUCT -->