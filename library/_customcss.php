<style type="text/css">

<?php if (lebenswelt('linkcolor')):?>
	a,.commentlist cite,.commentlist cite a, #sub_head #subnav .current_page_item a, #grandchildnav .current_page_item a, .headline h1 a:hover{color:<?php echo lebenswelt('linkcolor'); ?>;}
<?php endif;?>

<?php if(VPRO):?>
	<?php if(lebenswelt('body_background')):?>
		body{
			background:<?php echo lebenswelt('body_background');?>;
		}
	<?php endif;?>
	
	<?php if (lebenswelt('linkcolor_hover')):?>
		a:hover,.commentlist cite a:hover,  #grandchildnav .current_page_item a:hover, .headline h1 a:hover {color:<?php echo lebenswelt('linkcolor_hover'); ?>;}
	<?php endif;?>

	<?php if (lebenswelt('headercolor')):?>
		h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a{color: <?php echo lebenswelt('headercolor'); ?>;}
	<?php endif;?>

	<?php if (lebenswelt('backgroundcolor')):?>
		body {background:<?php echo lebenswelt('backgroundcolor');?>;}
		
	<?php endif;?>

	
	<?php if (lebenswelt('metacolor')):?>
		.metabar em {background:<?php echo lebenswelt('metacolor');?>;}
	<?php endif;?>
	<?php if (lebenswelt('metacolortext')):?>
		.metabar em {color:<?php echo lebenswelt('metacolortext');?>; text-shadow:none;}
	<?php endif;?>
	<?php if (lebenswelt('metacolorlink')):?>
		.metabar em a{color:<?php echo lebenswelt('metacolorlink');?>; text-shadow:none;}
	<?php endif;?>
	
	<?php if (lebenswelt('customcss')):?>
		<?php echo lebenswelt('customcss');?>
	<?php endif;?>
<?php endif;?>
</style>