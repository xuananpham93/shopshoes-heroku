<?php 
use Cake\ORM\TableRegistry;
$this->Logos = TableRegistry::get('Logos');
$logos = $this->Logos->find()
->where(['status' => 1])
;
$this->Products = TableRegistry::get('Products');
$products = $this->Products->find()
->select(['Products.name'])
;
foreach ($products as $product) {
    $mang[] = $product['name'];
}
$json =  json_encode($mang);
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<div id="top-page">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <?php foreach ($logos as $logo): ?>
                <a href="<?php echo DOMAIN ?>"><img src="<?php echo DOMAIN ?><?php echo $logo->images ?>" alt="logo"></a>
            <?php endforeach ?>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h1 class="<?php echo DOMAIN ?>"><a href="<?php echo DOMAIN ?>">Shoes World</a></h1>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-sm-offset-2">
        <div class="login">
            <ul class="list-inline">
                <?php 
                $user = $this->request->session()->read('Auth.User');
                ?>
                <?php if ($user): ?>

                    <li class="dropdown">
                        Xin chào,
                        <a style="color: #337ab7; font-size: 16px; padding: 0 15px 0 0; text-transform:capitalize;border-right: 1px solid #000" id="dLabel" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $user['name'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="<?php echo DOMAIN ?>change-info">Thông tin tài khoản</a></li>
                            <li><a href="<?php echo DOMAIN ?>lich-su-mua-hang">Lịch sử mua hàng</a></li>
                            <li><a href="<?php echo DOMAIN ?>change-password">Đổi mật khẩu</a></li>
                            <li><a href="<?php echo DOMAIN ?>log-out">Thoát</a></li>
                        </ul>
                    </li>

                    <!-- <li style="border-right: 1px solid #000"><a href="<?php echo DOMAIN ?>log-out">Thoát</a></li> -->
                <?php else: ?>
                    <li><a href="<?php echo DOMAIN ?>log-in">Đăng nhập</a></li>
                    <li class="login" style="border-right: 1px solid #000"><a href="<?php echo DOMAIN ?>register">Đăng ký</a></li>
                <?php endif ?>

                <!-- <li><a href="<?php echo DOMAIN ?>danh-muc"><i class="glyphicon glyphicon-thumbs-up"></i> Tìm kiếm nâng cao</a></li> -->

                <li><a href="<?php echo DOMAIN ?>detail-cart"><img src="<?php echo DOMAIN ?>images/count-cart.png" alt=""> (
                    <?php $cart= null; ?>
                    <?php if ($this->request->session()->check('cart')): ?>
                        <?php $cart = $this->request->session()->read('cart') ?>
                    <?php endif ?>
                    <?php $count = 0; ?>
                    <?php if ($cart): ?>
                        <?php foreach ($cart as $item): ?>
                            <?php $count++; ?>
                        <?php endforeach ?>
                    <?php endif ?>
                    <?php echo $count ?>
                    )</a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <form action="<?php echo DOMAIN ?>tim-kiem" type="get" >
                <div class="input-group">
                    <input type="text" class="form-control" name="search" id="skills" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Tìm kiếm</button>
                    </span>
                </div>
            </form>
        </div>
    </div><!-- #TOP-PAGE -->
    
    
    <script type="text/javascript"> 
        var json = <?php echo $json ?>;
        $(function() {
            $( "#skills" ).autocomplete({
                source: json
            });
        });   
    </script>

