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
 * The trait adds `get_age` methods.
 * 
 * This method allows you to return the `age` tag.
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
trait Y4YM_T_Variable_Get_Age {

	/**
	 * Get `age` tag.
	 * 
	 * @see https://yandex.ru/support/marketplace/assortment/fields/index.html
	 * 
	 * @param string $tag_name
	 * @param string $result_xml
	 * 
	 * @return string Example: `<age unit="year">2</age>`.
	 */
	public function get_age( $tag_name = 'age', $result_xml = '' ) {

		$age = common_option_get(
			'y4ym_age',
			'disabled',
			$this->get_feed_id(),
			'y4ym'
		);
		if ( $age === 'disabled' ) {
			return $result_xml;
		} else {
			$tag_value = $this->get_variable_global_attribute_value( $age );
		}

		$age_unit = common_option_get(
			'y4ym_age_unit',
			'disabled',
			$this->get_feed_id(),
			'y4ym'
		);
		if ( $age_unit === 'disabled' ) {
			$tag_attributes_arr = [];
		} else {
			$tag_attributes_arr = [ 'unit' => $age_unit ];
		}

		$result_xml = $this->get_variable_tag( $tag_name, $tag_value, $tag_attributes_arr );
		return $result_xml;

	}

}