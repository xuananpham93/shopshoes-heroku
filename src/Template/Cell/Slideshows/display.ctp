<div id="slide">
    <div id="carousel-example-generic" class="carousel slide"  data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php $active = true; ?>
            <?php foreach ($slideshows as $slideshow): ?>
                <div class="item <?php if($active == true){
                        echo "active";
                    } ?>">
                    <a href="<?php echo $slideshow['link'] ?>">
                        <img src="<?php echo DOMAIN ?><?php echo $slideshow['images'] ?>" alt="">
                    </a>
                </div>
            <?php $active = false ?>
            <?php endforeach ?>
            <!-- <div class="item active">
                <img src="images/slide1.png" alt="slide1">
            </div>
            <div class="item">
                <img src="images/slide1.png" alt="slide2">
            </div> -->
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><!-- #SLIDE -->