<?php 
	if(!function_exists('active')){
		function active($route_url)
		{
			if ($route_url == url()->current()) {
				return 'active';
			}
			else
			{
				return '';
			}
		}
	}

