<?php
/*
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Copyright 2023 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {

	die( 'These aren\'t the droids you\'re looking for.' );
}

if ( ! class_exists( 'WpssoMrpFiltersOptions' ) ) {

	class WpssoMrpFiltersOptions {

		private $p;	// Wpsso class object.
		private $a;	// WpssoMrp class object.

		/*
		 * Instantiated by WpssoMrpFilters->__construct().
		 */
		public function __construct( &$plugin, &$addon ) {

			$this->p =& $plugin;
			$this->a =& $addon;

			$this->p->util->add_plugin_filters( $this, array(
				'get_merchant_return_policy_options' => 3,
				'get_post_defaults'                  => 4,
				'get_post_options'                   => 3,
				'save_post_options'                  => 3,
				'option_type'                        => 2,
			) );
		}

		public function filter_get_merchant_return_policy_options( $mrp_opts, $mod, $mrp_id ) {

			if ( false === $mrp_opts ) {	// First come, first served.

				if ( 0 === strpos( $mrp_id, 'mrp-' ) ) {

					$mrp_opts = WpssoMrpMrp::get_id( $mrp_id, $mod );
				}
			}

			return $mrp_opts;
		}

		public function filter_get_post_defaults( $md_defs, $post_id, $rel, $mod ) {

			$md_defs = array_merge( $md_defs, $this->p->cf[ 'opt' ][ 'mrp_md_defaults' ] );

			$md_defs[ 'mrp_shipping_currency' ] = $this->p->get_options( 'og_def_currency', 'USD' );

			return $md_defs;
		}

		public function filter_get_post_options( array $md_opts, $post_id, array $mod ) {

			$md_defs = $this->filter_get_post_defaults( array(), $post_id, $rel = '', $mod );

			$md_opts = array_merge( $md_defs, $md_opts );

			return $md_opts;
		}

		public function filter_save_post_options( array $md_opts, $post_id, array $mod ) {

			if ( WPSSOMRP_MRP_POST_TYPE === $mod[ 'post_type' ] ) {

				if ( empty( $md_opts[ 'mrp_name' ] ) ) {	// Just in case.

					$md_opts[ 'mrp_name' ] = sprintf( _x( 'Return Policy #%d', 'option value', 'wpsso-merchant-return-policy' ), $post_id );
				}

				if ( ! isset( $md_opts[ 'mrp_desc' ] ) ) {	// Just in case.

					$md_opts[ 'mrp_desc' ] = '';
				}

				/*
				 * Always keep the post title, slug, and content updated.
				 */
				SucomUtilWP::raw_update_post_title_content( $post_id, $md_opts[ 'mrp_name' ], $md_opts[ 'mrp_desc' ] );
			}

			return $md_opts;
		}

		public function filter_option_type( $type, $base_key ) {

			if ( ! empty( $type ) ) {	// Return early if we already have a type.

				return $type;

			} elseif ( 0 !== strpos( $base_key, 'mrp_' ) ) {	// Nothing to do.

				return $type;
			}

			switch ( $base_key ) {

				case 'mrp_name':

					return 'ok_blank';

				case 'mrp_category':
				case 'mrp_shipping_currency':

					return 'not_blank';
				
				case 'mrp_days':
					
					return 'zero_pos_int';

				case 'mrp_shipping_fees':
					
					return 'numeric';

				case ( 0 === strpos( $base_key, 'mrp_country_' ) ? true : false ):
				case ( 0 === strpos( $base_key, 'mrp_method_' ) ? true : false ):
					
					return 'checkbox';
			}

			return $type;
		}
	}
}
