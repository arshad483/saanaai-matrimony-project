<script src="https://checkout.stripe.com/checkout.js"></script>
<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0"><?php echo translate('confirm_your_purchase')?></h2>
            </div>
        </div>
    </div>
</section>
<?php 
    $background_image = $this->db->get_where('frontend_settings', array('type' => 'premium_plans_image'))->row()->value;
    $background_image_data = json_decode($background_image, true);

?>
<section class="slice sct-color-1 pricing-plans pricing-plans--style-1 has-bg-cover bg-size-cover" style="background-image: url(<?=base_url()?>uploads/premium_plans_image/<?=$background_image_data[0]['image']?>); background-position: bottom bottom;">
    <div class="container">
        <span class="clearfix"></span>
        <div class="row">
            <?php foreach ($selected_plan as $value): ?>
                <div class="col-sm-8 col-md-4 ml-auto mr-auto">
                    <?php if ($value->plan_id == 1) { $package_class = "text-line-through"; } else { $package_class = "active"; } ?>
                    <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                        <div class="icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-dark">
                                <li style="list-style-type: none;">
                                <?php
                                    $image = $value->image;
                                    $images = json_decode($image, true);
                                    if (file_exists('uploads/plan_image/'.$images[0]['thumb'])) {
                                    ?>
                                        <img src="<?=base_url()?>uploads/plan_image/<?=$images[0]['thumb']?>" class="img-sm" height="100">
                                    <?php
                                    }
                                    else {
                                    ?>
                                        <img src="<?=base_url()?>uploads/plan_image/default_image.png" class="img-sm" height="100">
                                    <?php
                                    }
                                ?>
                                </li>
                            </div>
                            <div class="block-content">
                                <h3 class="heading heading-5 strong-500"><?=$value->name?></h3>
                                <h3 class="price-tag"><sup style="font-size: 36px;"></sup><?=currency($value->amount)?></h3>
                                <ul class="pl-0 pr-0 mt-0">
                                    <!-- <li class="package_items"><?php if($value->plan_id == 1){echo "Limited Profile Searching";}else{echo "Advanced Profile Searching";}?></li> -->
                                    <li class="<?=$package_class?> package_items"><?php echo translate('express_interest:')?> <?=$value->express_interest?> <?php echo translate('times')?></li>
                                    <li class="<?=$package_class?> package_items"><?php echo translate('direct_messages:')?> <?=$value->direct_messages?> <?php echo translate('times')?></li>
                                    <li class="<?=$package_class?> package_items"><?php echo translate('photo_gallery:')?> <?=$value->photo_gallery?> <?php echo translate('images')?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 package_bg_light mt-4">
                    <?php if($this->db->get_where("member", array("member_id" => $this->session->userdata('member_id')))->row()->is_closed == 'yes'){?>
                        <div class="text-center py-5">
                        <h5 class="pt-5 pb-4 font_base"><?php echo translate('your_account_is_closed!_please_re-open_the_account_from_your_profile!')?></h5>
                        <div class="text-center pt-2 pb-4">
                            <a  href="<?=base_url()?>home/profile" class="btn btn-styled btn-sm btn-base-1 z-depth-2-bottom"><?php echo translate('go-to_your_profile')?></a>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="text-center">
                        <h4 class="pt-5 pb-4 font_base"><?php echo translate('select_a_payment_method')?></h4>
                    </div>
                    
                    <div class="row pb-4">
                        <div class="col-sm-12 ml-auto mr-auto">

                            <div class='text-center pt-5 pb-5' id="payment_loader" style="display: none;">
                                <i class='fa fa-refresh fa-5x fa-spin'></i>
                                <p class=""><?php echo translate('please_wait')?>...</p>
                            </div>

                            <div class="row" id="payment_section">
                                <style>
                                    .span-text {
                                        font-weight: 500;
                                        font-family: "Roboto Condensed", sans-serif;
                                        letter-spacing: 0.1rem;
                                        text-transform: uppercase;
                                        font-style: normal;
                                        text-align: center;
                                        font-size: 11px;
                                    }
                                </style>
                                <?php
                                $paypal_set = $this->db->get_where('business_settings', array('type' => 'paypal_set'))->row()->value;
                                if ($paypal_set=="ok"): ?>
                                    <div class="col">
                                        <div class="card card-paypal" style="background: transparent;">
                                            <a id="select_paypal">
                                                <div class="card-image">
                                                    <img src="<?=base_url()?>template/front/images/paypal.jpg" style="height: 110px">
                                                    <div class="text-center bg-base-1" style="height: 26px;border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;">
                                                        <span class="span-text" id="select_paypal_text" style="">Select</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php
                                $stripe_set = $this->db->get_where('business_settings', array('type' => 'stripe_set'))->row()->value;
                                if ($stripe_set=="ok"): ?>
                                    <div class="col">
                                        <div class="card card-stripe" style="background: transparent;">
                                            <a id="select_stripe">
                                                <div class="card-image">
                                                    <img src="<?=base_url()?>template/front/images/stripe.jpg" style="height: 110px">
                                                    <div class="text-center bg-base-1" style="height: 26px;border-bottom-left-radius: 3px;    border-bottom-right-radius: 3px;">
                                                        <span class="span-text" id="select_stripe_text">Select</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php
                                $pum_set = $this->db->get_where('business_settings', array('type' => 'pum_set'))->row()->value;
                                if ($pum_set=="ok"): ?>
                                    <div class="col">
                                        <div class="card card-pum" style="background: transparent;">
                                            <a id="select_pum">
                                                <div class="card-image">
                                                    <img src="<?=base_url()?>template/front/images/pum.png" style="height: 110px">
                                                    <div class="text-center bg-base-1" style="height: 26px;border-bottom-left-radius: 3px;    border-bottom-right-radius: 3px;">
                                                        <span class="span-text" id="select_pum_text">Select</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif ?>

                            </div>
                            <div class="text-center pt-3">
                                <form id="payment_form" method="POST" action="<?=base_url()?>home/process_payment">
                                    <input type="hidden" name="payment_type" id="payment_type" value="">
                                    <input type="hidden" name="plan_id" value="<?=$value->plan_id?>">
                                    <?php
                                        $exchange = exchange('usd');
                                        $stripe_amount= $value->amount/$exchange;
                                    ?>
                                    <input type="hidden" name="stripe_amount" id="stripe_amount" value="<?=$stripe_amount?>">
                                    <button type="button" class="btn btn-base-1 z-depth-2-bottom" id="purchase_button" disabled><?php echo translate('confirm_purchase')?></button>
                                </form>
                            </div>
                            <script>
                                $(document).ready(function(e) {
                                    //<script src="https://js.stripe.com/v2/"><script>
                                    //https://checkout.stripe.com/checkout.js

                                    var submittedForm = false;
                                    var handler = StripeCheckout.configure({
                                        key: '<?php echo $this->db->get_where('business_settings' , array('type' => 'stripe_publishable_key'))->row()->value; ?>',
                                        image: '<?php echo base_url(); ?>template/front/images/stripe.png',
                                        token: function(token) {
                                            // Use the token to create the charge with a server-side script.
                                            // You can access the token ID with `token.id`
                                            $('#payment_form').append("<input type='hidden' name='stripeToken' value='" + token.id + "' />");
                                            submittedForm = true;
                                            $("#payment_loader").show();
                                            $("#payment_section").hide();
                                            $("#go_back").hide();
                                            $("#purchase_button").hide();
                                            setTimeout(function(){
                                                $('#payment_form').submit();
                                            }, 500);
                                        }
                                    });
                            
                                    $('#select_stripe').on('click', function(e) {
                                        $("#select_paypal_text").html("<?php echo translate('select')?>");
                                        $("#select_pum_text").html("<?php echo translate('select')?>");
                                        $("#select_stripe_text").html("<?php echo translate('selected')?>");
                                        $(".card-stripe").css("border", "3px solid #24242D");
                                        $(".card-paypal").css("border", "1px solid rgba(0, 0, 0, 0.05)");
                                        $(".card-pum").css("border", "1px solid rgba(0, 0, 0, 0.05)");
                                        $("#payment_type").val('stripe');
                                        $("#purchase_button").prop('disabled', true);
                                        
                                        // Open Checkout with further options
                                        var total = $('#stripe_amount').val();
                                        total = total * 100;
                                        handler.open({
                                            name: '<?=$this->system_title?>',
                                            description: 'Pay with Stripe',
                                            amount: total,
                                            closed: function() {
                                                $("#select_paypal_text").html("<?php echo translate('select')?>");
                                                $("#select_stripe_text").html("<?php echo translate('select')?>");
                                                $("#select_pum_text").html("<?php echo translate('select')?>");
                                                $(".card-paypal").css("border", "1px solid rgba(0, 0, 0, 0.05)");
                                                $(".card-pum").css("border", "1px solid rgba(0, 0, 0, 0.05)");
                                                $(".card-stripe").css("border", "1px solid rgba(0, 0, 0, 0.05)");
                                                // $("#payment_type").val('');
                                                $("#purchase_button").prop('disabled', true);
                                                if (submittedForm == false) {
                                                    $("#payment_loader").hide();
                                                    $("#payment_section").show();
                                                    $("#go_back").show();
                                                }
                                            }
                                        });
                                        e.preventDefault();
                                    });
                            
                                    // Close Checkout on page navigation
                                    $(window).on('popstate', function() {
                                        handler.close();
                                    });
                                });
                            </script>
                            <div class="text-center pt-4">
                                <a href="<?=base_url()?>home/plans" id="go_back" class="btn btn-danger btn-sm">Go Back</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(e) {
        $("#select_paypal").click(function(){
            $("#select_paypal_text").html("<?php echo translate('selected')?>");
            $("#select_stripe_text").html("<?php echo translate('select')?>");
            $("#select_pum_text").html("<?php echo translate('select')?>");
            $(".card-paypal").css("border", "3px solid #24242D");
            $(".card-stripe").css("border", "1px solid rgba(0, 0, 0, 0.05)");
            $(".card-pum").css("border", "1px solid rgba(0, 0, 0, 0.05)");
            $("#payment_type").val('paypal');
            $("#purchase_button").prop('disabled', false);
        });
        $("#select_pum").click(function(){
            $("#select_pum_text").html("<?php echo translate('selected')?>");
            $("#select_stripe_text").html("<?php echo translate('select')?>");
            $("#select_paypal_text").html("<?php echo translate('select')?>");
            $(".card-pum").css("border", "3px solid #24242D");
            $(".card-paypal").css("border", "1px solid rgba(0, 0, 0, 0.05)");
            $(".card-stripe").css("border", "1px solid rgba(0, 0, 0, 0.05)");
            $("#payment_type").val('pum');
            $("#purchase_button").prop('disabled', false);
        });

        $("#purchase_button").click(function(){
            var type = $("#payment_type").val();
            if (type == "paypal" || type == "pum") {
                $("#payment_form").submit();
            }
        });
    });
</script>