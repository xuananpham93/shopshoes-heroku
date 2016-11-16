<?php 
use Cake\ORM\TableRegistry;
$this->Settings = TableRegistry::get('Settings');
$settings = $this->Settings->find()
->where(['id' => 1])
;
?>

<div id="register">
    <div class="col-sm-4">
        <h5>Đăng ký nhận tin khuyến mãi từ chúng tôi</h5>
    </div>
    <div class="col-sm-4">
        <form action="<?php echo DOMAIN ?>dang-ky-email" type="post">
            <div class="input-group">
                <input type="text" class="form-control" name="email" placeholder="Email">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Đăng ký</button>
                </span>
            </div>  
        </form>
    </div>
    <div class="col-sm-4 text-center">
        <h4>
            <?php foreach ($settings as $row): ?>
                <a target="_blank" href="<?php echo $row->facebook ?>"><i class="fa fa-facebook fa-lg" ></i></a>
                <a target="_blank" href="<?php echo $row->twitter ?>"><i class="fa fa-twitter fa-lg" ></i></a>
                <a target="_blank" href="<?php echo $row->linkedin ?>"><i class="fa fa-linkedin fa-lg" ></i></a>
                <a target="_blank" href="<?php echo $row->yahoo ?>"><i class="fa fa-google-plus fa-lg" ></i></a>
            <?php endforeach ?>
        </h4>

    </div>
</div><!-- #REGISTER -->