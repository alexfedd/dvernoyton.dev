<?php

/**
 * Trait for variable products.
 *
 * @link       https://icopydoc.ru
 * @since      0.1.0
 * @version    5.0.0 (25-03-2025)
 *
 * @package    Y4YM
 * @subpackage Y4YM/includes/feeds/traits/variable
 */

/**
 * The trait adds `get_step_quantity` method.
 * 
 * This method allows you to return the `step-quantity` tag.
 *
 * @since      0.1.0
 * @package    Y4YM
 * @subpackage Y4YM/includes/feeds/traits/variable
 * @author     Maxim Glazunov <icopydoc@gmail.com>
 * @depends    classes:     Y4YM_Get_Paired_Tag
 *             methods:     get_product
 *                          get_offer
 *                          get_feed_id
 *             functions:   common_option_get
 */
trait Y4YM_T_Variable_Get_Step_Quantity {

	/**
	 * Get `step-quantity` tag.
	 * 
	 * @see https://yandex.ru/support/marketplace/ru/assortment/fields/index.html
	 * 
	 * @param string $tag_name
	 * @param string $result_xml
	 * 
	 * @return string Example: `<step-quantity>2</step-quantity>`.
	 */
	public function get_step_quantity( $tag_name = 'step-quantity', $result_xml = '' ) {

		$step_quantity = common_option_get(
			'y4ym_step_quantity',
			'disabled',
			$this->get_feed_id(),
			'y4ym'
		);
		if ( $step_quantity === 'enabled' ) {
			$tag_value = $this->get_variable_product_post_meta( 'step_quantity' );
			$result_xml = $this->get_variable_tag( $tag_name, $tag_value );
		}
		return $result_xml;

	}

}