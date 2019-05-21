<?php
    $home_premium_plans_image = $this->db->get_where('frontend_settings', array('type' => 'home_premium_plans_image'))->row()->value;

    $premium_plans_image = json_decode($home_premium_plans_image, true);
?>
<section class="slice--offset parallax-section parallax-section-lg" style="background-image: url(<?=base_url()?>uploads/home_page/premium_plans_image/<?=$premium_plans_image[0]['image']?>)">
    <div class="container">
        <span class="clearfix"></span>
        <div class="row" style="margin-top: -10px">
            <?php foreach ($all_plans as $value): ?>
                <?php if ($value->plan_id > 1): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top: 10px">
                        <div class="feature feature--boxed-border feature--bg-2 active package_bg">
                            <div class="icon-block--style-1-v5 text-center">
                                <div class="block-icon c-gray-dark">
                                    <li style="list-style-type: none;">
                                    <?php
                                        $image = $value->image;
                                        $images = json_decode($image, true);
                                        if (file_exists('uploads/plan_image/'.$images[0]['thumb'])) {
                                        ?>
                                            <img src="<?=base_url()?>uploads/plan_image/<?=$images[0]['thumb']?>" class="img-sm" height="80">
                                        <?php
                                        }
                                        else {
                                        ?>
                                            <img src="<?=base_url()?>uploads/plan_image/default_image.png" class="img-sm" height="80">
                                        <?php
                                        }
                                    ?>
                                    </li>
                                </div>
                                <div class="block-content">
                                    <h3 class="heading heading-5 strong-500"><?=$value->name?></h3>
                                    <h3 class="price-tag"><sup style="font-size: 15px;"></sup><?=currency($value->amount)?></h3>
                                    <ul class="pl-0 pr-0">
                                        <li class="package_items"><?=translate('express_interests:')?> <?=$value->express_interest?> <?=translate('times')?></li>
                                        <li class="package_items"><?=translate('direct_messages')?> <?=$value->direct_messages?> <?=translate('times')?></li>
                                        <li class="package_items"><?=translate('photo_gallery')?> <?=$value->photo_gallery?> <?=translate('images')?></li>
                                    </ul>
                                    <div class="py-2 text-center mb-2">
                                        <?php 
                                        if ($value->plan_id != 1) {
                                            $purchase_link = base_url()."home/plans/subscribe/".$value->plan_id;
                                        }
                                        else {
                                            $purchase_link = "#";
                                        }
                                        ?>
                                        <a href="<?=$purchase_link?>" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle z-depth-2-bottom">
                                            <span class=""><?php echo translate('get_this_package')?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</section>