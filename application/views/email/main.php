<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/nav'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/email.css'); ?>">

<div class="container-liquid mt-3">
	<?php echo form_open("email_test/send_email"); ?>
	<div class="container form-group">
		<div class="row">
			<div class="col-md-6">
				<input class="form-control" type="text" name="txtEmail">
			</div>
		</div>
		<div class="mt-2">
			<button class="btn btn-primary">Send Mail</button>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>


<?php $this->load->view('common/footer'); ?>