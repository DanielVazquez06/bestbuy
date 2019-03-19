<?php
if(!function_exists('depot_mikado_add_product_info_shortcode')) {
	function depot_mikado_add_product_info_shortcode($shortcodes_class_name) {
		$shortcodes = array(
			'MikadoCore\CPT\Shortcodes\ProductInfo\ProductInfo',
		);

		$shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

		return $shortcodes_class_name;
	}

	if(depot_mikado_core_plugin_installed()) {
		add_filter('mkd_core_filter_add_vc_shortcode', 'depot_mikado_add_product_info_shortcode');
	}
}