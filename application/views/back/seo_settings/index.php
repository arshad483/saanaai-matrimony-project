<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?= translate('seo_settings')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?= translate('home')?></a></li>
			<li><a href="#"><?= translate('seo_settings')?></a></li>
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
			<div class="panel-heading">
				<h3 class="panel-title"><?= translate('seo_settings_configuration')?></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
			    		<form class="form-horizontal" id="seo_settings_form" method="POST" action="<?=base_url()?>admin/update_seo_settings">
			    			<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_keywords"><b><?= translate('keywords')?> </b></label>
								<div class="col-sm-8">
									<input type="text" name="seo_keywords" class="form-control" placeholder="<?php echo translate('keywords')?>" value="<?=$this->db->get_where('general_settings', array('general_settings_id' => 25))->row()->value?>" data-role="tagsinput">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_author"><b><?= translate('author')?> </b></label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="seo_author" value="<?=$this->db->get_where('general_settings', array('general_settings_id' => 26))->row()->value?>" placeholder="<?php echo translate('author')?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_revisit"><b><?= translate('revisit_after')?> </b></label>
								<div class="col-sm-6">
									<input type="number" class="form-control" name="seo_revisit" value="<?=$this->db->get_where('general_settings', array('general_settings_id' => 54))->row()->value?>" placeholder="<?php echo translate('revisit_after')?>">
								</div>
								<div class="col-sm-2 control-label text-left">
									<?=translate('day(s)')?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_description"><b><?= translate('description')?> </b></label>
								<div class="col-sm-8">
									<textarea class="form-control" name="seo_description" cols="30" rows="5"><?=$this->db->get_where('general_settings', array('general_settings_id' => 24))->row()->value?></textarea>
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
<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
</script>