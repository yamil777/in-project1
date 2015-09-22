    <!-- Full Page Image Background Carousel Header -->
    <div id="myCarousel" class="colart-slide carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php foreach($images as $key=>$img) { ?>
                <li data-target="#myCarousel" data-slide-to="<?=$key?>" class="<?php echo $key == 0 ? 'active' : ''?>"></li>
            <?php } ?>
        </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <?php foreach($images as $key=>$img) { ?>
            <div class="item <?php echo $key == 0 ? 'active' : ''?>">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?=$imagePath.$img?>');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
