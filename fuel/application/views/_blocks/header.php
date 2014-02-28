<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="utf-8">

	<title>
		<?php 
			if (!empty($is_blog))
			{
				echo $CI->fuel_blog->page_title($page_title, ' : ', 'right');
			}
			else
			{
				echo fuel_var('page_title', '');
			}
		?>
	</title>

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
	<meta name="description" content="<?php echo fuel_var('meta_description')?>">

	<?php
		echo css('main').css($css);

		if (!empty($is_blog))
		{
			echo $CI->fuel_blog->header();
		}
	?>

</head>

<body class="<?php echo fuel_var('body_class', ''); ?>">
<div id="container">
	<div id="container_inner">
		<div id="header">
			<div class="logo"></div>
		</div>
		<div id="main">
