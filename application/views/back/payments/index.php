<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?= translate('payments')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?= translate('home')?></a></li>
			<li><a href="#"><?= translate('configuration')?></a></li>
			<li><a href="#"><?= translate('payments')?></a></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<div class="panel">
			<?php if (!empty($success_alert)): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$success_alert?>
	            </div>
			<?php endif ?>
			<?php if (!empty($danger_alert)): ?>
				<div class="alert alert-danger" id="danger_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$danger_alert?>
	            </div>
			<?php endif ?>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-dark">
						    <div class="panel-heading">
						        <h3 class="panel-title"><?= translate('paypal_settings')?></h3>
						    </div>
						    <div class="panel-body">

					    		<form class="form-horizontal" id="paypal_settings_form" method="POST" action="<?=base_url()?>admin/update_payments/update_paypal">
					    			<div class="form-group">
										<label class="col-sm-3 control-label" for="paypal_activation"><b><?= translate('activation')?></b></label>
										<div class="col-sm-8">
											<div class="checkbox">
								                <input id="paypal_activation" name="paypal_activation" class="magic-checkbox" type="checkbox" <?php if($this->db->get_where('business_settings', array('type' => 'paypal_set'))->row()->value == "ok"){ ?>checked<?php } ?>>
								                <label for="paypal_activation"></label>
								            </div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="email"><b><?= translate('paypal_email')?> <span class="text-danger">*</span></b></label>
										<div class="col-sm-8">
											<input type="email" class="form-control" name="email" value="<?=$this->db->get_where('business_settings', array('type' => 'paypal_email'))->row()->value;?>" placeholder="<?php echo translate('your_email_address')?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="phone"><b><?= translate('account_type')?></b></label>
										<div class="col-sm-8">
											<select class="form-control" name="paypal_account_type">
												<?php
													$paypal_account_type = $this->db->get_where('business_settings', array('type' => 'paypal_account_type'))->row()->value;
												?>
									            <option value="sandbox" <?php if ($paypal_account_type == "sandbox"){?> selected<?php } ?>> <?= translate('sandbox')?></option>
									            <option value="original" <?php if ($paypal_account_type == "original"){?> selected<?php } ?>> <?= translate('original')?></option>
									        </select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-8 text-right">
											<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
										</div>
									</div>
								</form>
								
						    </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-dark">
						    <div class="panel-heading">
						        <h3 class="panel-title"><?= translate('stripe_settings')?></h3>
						    </div>
						    <div class="panel-body">

					    		<form class="form-horizontal" id="stripe_settings_form" method="POST" action="<?=base_url()?>admin/update_payments/update_stripe">
					    			<div class="form-group">
										<label class="col-sm-3 control-label" for="stripe_activation"><b><?= translate('activation')?></b></label>
										<div class="col-sm-8">
											<div class="checkbox">
								                <input id="stripe_activation" name="stripe_activation" class="magic-checkbox" type="checkbox" <?php if($this->db->get_where('business_settings', array('type' => 'stripe_set'))->row()->value == "ok"){ ?>checked<?php } ?>>
								                <label for="stripe_activation"></label>
								            </div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="secret_key"><b><?= translate('secret_key')?> <span class="text-danger">*</span></b></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="secret_key" value="<?=$this->db->get_where('business_settings', array('type' => 'stripe_secret_key'))->row()->value;?>" placeholder="<?php echo translate('your_secret_key')?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="publishable_key"><b><?= translate('publishable_key')?> <span class="text-danger">*</span></b></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="publishable_key" value="<?=$this->db->get_where('business_settings', array('type' => 'stripe_publishable_key'))->row()->value;?>" placeholder="<?php echo translate('your_publishable_key')?>">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-8 text-right">
											<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
										</div>
									</div>
								</form>							
						    </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-dark">
						    <div class="panel-heading">
						        <h3 class="panel-title"><?= translate('payUmoney_settings')?></h3>
						    </div>
						    <div class="panel-body">

					    		<form class="form-horizontal" id="pum_settings_form" method="POST" action="<?=base_url()?>admin/update_payments/update_pum">
					    			<div class="form-group">
										<label class="col-sm-3 control-label" for="pum_activation"><b><?= translate('activation')?></b></label>
										<div class="col-sm-8">
											<div class="checkbox">
								                <input id="pum_activation" name="pum_activation" class="magic-checkbox" type="checkbox" <?php if($this->db->get_where('business_settings', array('type' => 'pum_set'))->row()->value == "ok"){ ?>checked<?php } ?>>
								                <label for="pum_activation"></label>
								            </div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="merchant_key"><b><?= translate('merchant_key')?> <span class="text-danger">*</span></b></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="pum_merchant_key" value="<?=$this->db->get_where('business_settings', array('type' => 'pum_merchant_key'))->row()->value;?>" placeholder="<?php echo translate('merchant_key')?>" >
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="merchant_key"><b><?= translate('merchant_SALT')?> <span class="text-danger">*</span></b></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="pum_merchant_salt" value="<?=$this->db->get_where('business_settings', array('type' => 'pum_merchant_salt'))->row()->value;?>" placeholder="<?php echo translate('merchant_salt')?>" >
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="phone"><b><?= translate('account_type')?></b></label>
										<div class="col-sm-8">
											<select class="form-control" name="pum_account_type">
												<?php
													$pum_account_type = $this->db->get_where('business_settings', array('type' => 'pum_account_type'))->row()->value;
												?>
									            <option value="sandbox" <?php if ($pum_account_type == "sandbox"){?> selected<?php } ?>> <?= translate('sandbox')?></option>
									            <option value="original" <?php if ($pum_account_type == "original"){?> selected<?php } ?>> <?= translate('original')?></option>
									        </select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-8 text-right">
											<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
										</div>
									</div>
								</form>
								
						    </div>
						</div>
					</div>			
				</div>				
			</div>
		</div>
	</div>
</div>
<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
</script>