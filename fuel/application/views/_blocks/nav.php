<!-- Navigation Block -->

<nav class="navigation-wrap">
	<div class="navigation-inner">
		<ul class="menu">
			<?php
		 		if (!isset($CI)){
		 			$CI =& get_instance();
		 		}
		 		$navigation = new navigationMenu($CI);  
		 		$menu = fuel_nav(array('render_type'=> 'array', 
		 			'first_class'=>'first', 
		 			'last_class'=>'last', 
		 			'container_tag_id'=>'nav', 
		 			'container_tag_class'=>'unknown', 
		 			'item_id_prefix'=>'menu_'));
			?>
		</ul>
	</div>
</nav>