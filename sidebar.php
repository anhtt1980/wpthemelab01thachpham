<?php  
	if (is_active_sidebar( 'main-sidebar')):
		dynamic_sidebar('main-sidebar' );
	else :
		_e('This is sidebar, you gotta add some widget');
	endif;

?>
