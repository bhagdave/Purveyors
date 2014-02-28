<?php 
$this->load->view('_blocks/header');
$this->load->view('_blocks/menu');
?>
	
	<div id="main_inner">
		<?php echo fuel_var('body', ''); ?>
	</div>
	
<?php $this->load->view('_blocks/footer')?>
