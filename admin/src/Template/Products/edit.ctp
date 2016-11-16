<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $product->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
        )
        ?>
    </li>
    <li><?= $this->Html->link(__('Quay lại'), ['action' => 'index']) ?></li>
</ul>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
        echo $this->Form->input('name', array('onchange' => 'get_alias()','id' => 'idtitle'));
        echo $this->Form->input('alias', array('id' => 'idalias'));
        echo $this->Form->input('cat_id');
        echo $this->Form->input('brand_id');
        echo $this->Form->input('size');
        echo $this->Form->input('price', ['type' => 'text', 'data-type'=> 'number']);
        echo $this->Form->input('orginal_price', ['label' => 'Giá thị trường', 'type' => 'text', 'data-type'=> 'number']);
        echo $this->Form->input('pos');
        // echo $this->Form->input('new');
        echo $this->Form->input('hot', ['type' => 'checkbox']);
        echo $this->Form->input('like1', ['label' => 'Ưa thích']);
        echo $this->Form->input('status', ['type' => 'checkbox']);
        echo $this->Form->input('highlight', ['label' => 'Giảm giá']);
        echo $this->Form->input('code', ['label' => 'Bảo hành']);
        echo $this->Form->input('slug', ['label' => 'Quà tặng']);
        
        // echo $this->Form->input('type');
        ?>
        <div id="showimage">
            <img id="imgLocation" src="<?php echo DOMAIN ?><?php echo $product->images ?>">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        //echo $this->Form->input('images');
        echo $this->Form->input('images', array('class'=>'text-input image-input datepicker', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'], 'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> ''));

        ?>
        <?php if ($product->images1 != null): ?>
            <?php $images1 = json_decode($product->images1) ?>
            <?php foreach ($images1 as $key => $value): ?>
                <div id="addInputAuto">                                                            
                    <input type="hidden" value="1" id="count" />
                    <input type="hidden" value="<?php echo DOMAIN ?>" id="domain" />
                    <div class="mainaddimages">
                        <div class="addimages">
                            <input type="text" maxlength="255" id="xFilePath1" value="<?php echo $value ?>" class="text-input image-input datepicker" name="images1[1]">
                            <input type="button" class="button" onclick="BrowseServerMulti(1);" value="Chọn ảnh">
                        </div>
                        <div class="controll">
                            <img class="imageControll" alt="Delete" src="<?php echo DOMAIN ?>admin/images/icons/cross.png">        
                        </div>
                        <div class="clear"></div>
                    </div>
                </div> 
                <input type="button" value="Add Images" id="addbutton" />
            <?php endforeach ?>
        <?php else: ?>

            <div id="addInputAuto">                                                            
                <input type="hidden" value="1" id="count" />
                <input type="hidden" value="<?php echo DOMAIN ?>" id="domain" />
                <div class="mainaddimages">
                    <div class="addimages">
                        <input type="text" maxlength="255" id="xFilePath1" class="text-input image-input datepicker" name="images1[1]">
                        <input type="button" class="button" onclick="BrowseServerMulti(1);" value="Chọn ảnh">
                    </div>
                    <div class="controll">
                        <img class="imageControll" alt="Delete" src="<?php echo DOMAIN ?>admin/images/icons/cross.png">        
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
            <input type="button" value="Add Images" id="addbutton" />

        <?php endif ?>
        
        
        
        <script>
            $(function(){ 
                $("#addbutton").click(function(){
                    var count = $("#count").val();
                    count = parseInt(count)  + 1;
                    $("#count").val(count);                                    
                    var text = '<div class="mainaddimages"><div class="addimages"><input type="text" maxlength="255" id="xFilePath'+count+'" class="text-input image-input datepicker" name="images1['+count+']"><input type="button" class="button" onclick="BrowseServerMulti('+count+');" value="Chọn ảnh"></div><div class="controll"><img  class="imageControll" onclick="xoaimg()" alt="Delete" src="'+$("#domain").val()+'admin/images/icons/cross.png"></div><div class="clear"></div></div>';                                
                    $("#addInputAuto").append(text);                                
                });                            
            });
            function xoaimg(){
                $(".imageControll").click(function(){                                                                
                    $(this).parent().parent().remove();
                });
            }

        </script>

        <?php
        echo $this->Form->input('title_seo');
        echo $this->Form->input('shortdes');
        //echo $this->CKEditor->replace('shortdes');
        echo $this->Form->input('content', array('id'=> 'content_input'));
        echo $this->CKEditor->replace('content_input');
        // echo $this->Form->input('saleoff');    
        // echo $this->Form->input('meta_key');
        // echo $this->Form->input('meta_des');
        
        
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>

<script>
    CKFinder.setupCKEditor( CKEDITOR.replace('shortdes'), '<?php echo DOMAINAD ?>js/ckfinder');
    CKFinder.setupCKEditor( CKEDITOR.replace('content_input'), '<?php echo DOMAINAD ?>js/ckfinder');
</script>
