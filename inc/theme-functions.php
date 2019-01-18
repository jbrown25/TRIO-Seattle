<?php
/**
 * Functions that get invoked directly in theme files
 *
 * @package trio-v1
 */

if(!function_exists('trio_breadcrumbs')){
	function trio_breadcrumbs(){
		?>
			<div class="breadcrumbs">
				<div class="container">
					<ul class="breadcrumb">
						<li class="active">Home</li>
					</ul>
				</div>
			</div>
	    <?php
	}
}