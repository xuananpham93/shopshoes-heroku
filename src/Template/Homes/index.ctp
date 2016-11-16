<?php echo $this->element('slide'); ?>
<?php echo $this->element('slide-product'); ?>
<?php echo $this->element('project'); ?>


<div id="new-products" class="products">

    <h2>Sản phẩm mới</h2>

    <?php foreach ($products_new as $product): ?>
        <div class="col-sm-3 load-more">

            <a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias'] ?>">
                <?php if ($product['highlight'] != null && $product['highlight'] != ''): ?>
                    <span class="sale">
                        <strong><?php echo $product['highlight'] ?>%</strong>
                    </span>
                <?php endif ?>
                <div class="view view view-first">
                    <img src="<?php echo DOMAIN ?><?php echo $product['images'] ?>" class="img-thumbnail" alt="product1" width="304" height="236">
                    <div class="mask">
                        <h4><?php echo $product->name ?></h4>
                        <p><?php echo $product->title_seo ?></p>
                        <a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias']; ?>" class="info">Mua ngay</a>
                        <a href="#" class="info" onclick="sosanh(<?php echo $product->id ?>)">So sánh</a>
                    </div>
                </div>
            </a>
            <p><?php echo $product['view'] ?> views</p>
            <img src="<?php echo DOMAIN ?>images/sao.png" alt="">
            <a href="<?php echo DOMAIN ?><?php echo $product->id ?>/<?php echo $product->alias ?>">
                <p class="product-name"><?php echo $product['name'] ?></p>
            </a>
            <h4><?php echo number_format($product['price']) ?>
                <a href="<?php echo DOMAIN ?><?php echo $product->id ?>/<?php echo $product->alias ?>">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </a>
            </h4>
        </div>
    <?php endforeach ?>
    <div class="clearfix"></div>
    <div style="padding: 20px;">
        <a href="#" id="loadMore">Load More</a>
    </div>
    

</div><!-- #NEW-PRODUCTS -->
<div class="clearfix"></div>


<div id="hot-products" class="products">
    <a href="<?php echo DOMAIN ?>danh-muc/32/men">
        <h2>Men</h2>  
    </a>
    <?php foreach ($products_hot as $product_hot): ?>
        <div class="col-sm-3 load-more1">
            <a href="<?php echo DOMAIN ?><?php echo $product_hot['id'] ?>/<?php echo $product_hot['alias']; ?>">
                <?php if ($product_hot['highlight'] != null && $product_hot['highlight'] != ''): ?>
                    <span class="sale">
                        <strong><?php echo $product_hot['highlight'] ?>%</strong>
                    </span>
                <?php endif ?>
                <div class="view view view-first">
                    <img src="<?php echo DOMAIN ?><?php echo $product_hot['images'] ?>" class="img-thumbnail" alt="product1" width="304" height="236">
                    <div class="mask">
                        <h4><?php echo $product_hot->name ?></h4>
                        <p><?php echo $product_hot->title_seo ?></p>
                        <a href="<?php echo DOMAIN ?><?php echo $product_hot['id'] ?>/<?php echo $product_hot['alias']; ?>" class="info">Mua ngay</a>
                        <a href="javascript:void(0)" class="info" onclick="sosanh(<?php echo $product_hot->id ?>)">So sánh</a>
                    </div>
                </div>
            </a>
            

            <p><?php echo $product_hot['view'] ?> views</p>
            <img src="images/sao.png" alt="">
            <a href="<?php echo DOMAIN ?><?php echo $product_hot->id ?>/<?php echo $product_hot->alias ?>">
                <p class="product-name"><?php echo $product_hot['name'] ?></p>
            </a>
            
            <h4><?php echo number_format($product_hot['price']) ?>
                <a href="<?php echo DOMAIN ?><?php echo $product_hot->id ?>/<?php echo $product_hot->alias ?>">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </a>
            </h4>
        </div>
    <?php endforeach ?>
    <div class="clearfix"></div>
    <div style="padding: 20px;">
        <a href="#" id="loadMore1">Load More</a>
    </div>

</div><!-- #HOT-PRODUCTS-->

<div class="clearfix"></div>

<div id="like-products" class="products">
    <a href="<?php echo DOMAIN ?>danh-muc/33/women">
        <h2>Women</h2>
    </a>
    <?php //pr($products_like) ?>
    <?php foreach ($products_like as $product): ?>
        <div class="col-sm-3 load-more2">
            <a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias'] ?>">
                <?php if ($product['highlight'] != null && $product['highlight'] != ''): ?>
                    <span class="sale">
                        <strong><?php echo $product['highlight'] ?>%</strong>
                    </span>
                <?php endif ?>
                <div class="view view view-first">
                    <img src="<?php echo DOMAIN ?><?php echo $product['images'] ?>" class="img-thumbnail" alt="product1" width="304" height="236">
                    <div class="mask">
                        <h4><?php echo $product->name ?></h4>
                        <p><?php echo $product->title_seo ?></p>
                        <a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias']; ?>" class="info">Mua ngay</a>
                        <a href="#" class="info" onclick="sosanh(<?php echo $product->id ?>)">So sánh</a>
                    </div>
                </div>
            </a>
            <p><?php echo $product['view'] ?> views</p>
            <img src="<?php echo DOMAIN ?>images/sao.png" alt="">
            <a href="<?php echo DOMAIN ?><?php echo $product['id'] ?>/<?php echo $product['alias'] ?>">
                <p class="product-name"><?php echo $product['name'] ?></p>
            </a>
            <h4><?php echo number_format($product['price']) ?> 
             <a href="<?php echo DOMAIN ?><?php echo $product->id ?>/<?php echo $product->alias ?>">
                <i class="glyphicon glyphicon-shopping-cart"></i>
            </a>
        </h4>
    </div>
<?php endforeach ?>
<div class="clearfix"></div>
<div style="padding: 20px;">
    <a href="#" id="loadMore2">Load More</a>
</div>
</div><!-- #LIKE-PRODUCTS -->

<div class="clearfix"></div>



<div class="compare">

</div>



<script type="text/javascript">
    function sosanh(a){
        $.ajax({
            url: "<?php echo DOMAIN ?>select/" + a,
            cache: false,
            type: 'POST',
            dataType: 'html',
            success: function(data)
            {
                $('.compare').html(data);
            },
            error: function() 
            {
                alert('err2');
            },
        });
        $('.compare').show();
    }
</script>



<style>
    .products .col-sm-3{
        padding: 10px;
        border-width: 0 1px 1px 0;
        border-style: solid;
        border-color: #fff;
        box-shadow: 0 1px 1px #ccc;
        margin-bottom: 5px;
        background-color: #f1f1f1;
    }
    .load-more {
        display:none;
    }
    #loadMore {
        padding: 10px;
        text-align: center;
        background-color: #33739E;
        color: #fff;
        border-width: 0 1px 1px 0;
        border-style: solid;
        border-color: #fff;
        box-shadow: 0 1px 1px #ccc;
        transition: all 600ms ease-in-out;
        -webkit-transition: all 600ms ease-in-out;
        -moz-transition: all 600ms ease-in-out;
        -o-transition: all 600ms ease-in-out;
    }
    #loadMore:hover {
        background-color: #fff;
        color: #33739E;
    }


    /* MEN load-more*/
    .load-more1 {
        display:none;
    }
    #loadMore1 {
        padding: 10px;
        text-align: center;
        background-color: #33739E;
        color: #fff;
        border-width: 0 1px 1px 0;
        border-style: solid;
        border-color: #fff;
        box-shadow: 0 1px 1px #ccc;
        transition: all 600ms ease-in-out;
        -webkit-transition: all 600ms ease-in-out;
        -moz-transition: all 600ms ease-in-out;
        -o-transition: all 600ms ease-in-out;
    }
    #loadMore1:hover {
        background-color: #fff;
        color: #33739E;
    }

    /* Women load-more */
    .load-more2 {
        display:none;
    }
    #loadMore2 {
        padding: 10px;
        text-align: center;
        background-color: #33739E;
        color: #fff;
        border-width: 0 1px 1px 0;
        border-style: solid;
        border-color: #fff;
        box-shadow: 0 1px 1px #ccc;
        transition: all 600ms ease-in-out;
        -webkit-transition: all 600ms ease-in-out;
        -moz-transition: all 600ms ease-in-out;
        -o-transition: all 600ms ease-in-out;
    }
    #loadMore2:hover {
        background-color: #fff;
        color: #33739E;
    }
</style>

<script> 
    $(function () {
        $(".load-more").slice(0, 4).show();
        $("#loadMore").on('click', function (e) {
            e.preventDefault();
            $(".load-more:hidden").slice(0, 4).slideDown();
            if ($(".load-more:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>

<!-- Men -->
<script> 
    $(function () {
        $(".load-more1").slice(0, 4).show();
        $("#loadMore1").on('click', function (e) {
            e.preventDefault();
            $(".load-more1:hidden").slice(0, 4).slideDown();
            if ($(".load-more1:hidden").length == 0) {
                $("#load1").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>

<!-- Women -->
<script> 
    $(function () {
        $(".load-more2").slice(0, 4).show();
        $("#loadMore2").on('click', function (e) {
            e.preventDefault();
            $(".load-more2:hidden").slice(0, 4).slideDown();
            if ($(".load-more2:hidden").length == 0) {
                $("#load2").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>