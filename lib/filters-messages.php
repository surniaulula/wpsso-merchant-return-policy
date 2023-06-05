<?php
/*
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Copyright 2014-2023 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {

	die( 'These aren\'t the droids you\'re looking for.' );
}

if ( ! class_exists( 'WpssoMrpFiltersMessages' ) ) {

	class WpssoMrpFiltersMessages {

		private $p;	// Wpsso class object.
		private $a;	// WpssoMrp class object.

		/*
		 * Instantiated by WpssoMrpFilters->__construct().
		 */
		public function __construct( &$plugin, &$addon ) {

			$this->p =& $plugin;
			$this->a =& $addon;

			$this->p->util->add_plugin_filters( $this, array(
				'messages_tooltip_meta_mrp' => 3,
			) );
		}

		public function filter_messages_tooltip_meta_mrp( $text, $msg_key, $info ) {

			switch ( $msg_key ) {

				case 'tooltip-meta-mrp_name':

					$text = __( 'A name for this return policy (required).', 'wpsso-merchant-return-policy' ) . ' ';

					$text .= __( 'The return policy name may appear in WordPress editing pages and in the Schema MerchantReturnPolicy "name" property.',
						'wpsso-merchant-return-policy' );

					break;

				case 'tooltip-meta-mrp_category':

					$text = __( 'The type of return policy.', 'wpsso-merchant-return-policy' ) . ' ';

					break;

				case 'tooltip-meta-mrp_days':

					$text = __( 'The number of days (from the delivery date) that a product can be returned.', 'wpsso-merchant-return-policy' ) . ' ';

					break;

				case 'tooltip-meta-mrp_methods':

					$text = __( 'The return methods offered.', 'wpsso-merchant-return-policy' ) . ' ';

					break;

				case 'tooltip-meta-mrp_shipping_fees':

					$text = __( 'The cost of shipping for product returns.', 'wpsso-merchant-return-policy' ) . ' ';

					break;

				case 'tooltip-meta-mrp_countries':

					$text = __( 'The countries this return policy applies to.', 'wpsso-merchant-return-policy' ) . ' ';

					$text .= sprintf( __( 'You can select up to %d countries.', 'wpsso-merchant-return-policy' ), WPSSOMRP_MRP_COUNTRIES_MAX ) . ' ';

					break;
			}

			return $text;
		}
	}
}
