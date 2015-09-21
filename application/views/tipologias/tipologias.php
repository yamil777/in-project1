<?php
    $this->load->view('_partials/layout/_header');
    $this->load->view('_partials/_menu');
    /*
    echo "<pre>";
    var_dump($availableApartments);
    die;
    */
    ?>
    <div class="content">
        <div class="container-tipologias">
            <?php 
            //var_dump($imagesTipologias);
            //var_dump($availableApartments);
            //die;
            foreach($availableApartments as $key=>$val) : ?>
                <div 
                    class="tipologia-min <?=$key > 1 ? 'down' : 'top';?>" 
                    id="<?=$val->id_tp;?>" 
                    position="<?=$key;?>">
                    <div class="img-tipologia" 
                    style="background-image:url('<?=$val->folder_tp.$imagesTipologias[$val->id_tp][0];?>');">
                        <div class="text-type-tp"><?php echo $val->type_tp; ?></div>
                    </div>

                </div>
            <?php
            endforeach;
            ?>
        </div>

        <div class="container-slider-tp">
            <div class="close">X</div>
            <?php
            $this->load->view('_partials/_reservation-bar');
            ?>
        </div>
    </div>
    <?php
    $this->load->view('_partials/layout/_footer');
