<?php
/*
 * Plugin Name: WPSSO Merchant Return Policy Manager
 * Plugin Slug: wpsso-merchant-return-policy
 * Text Domain: wpsso-merchant-return-policy
 * Domain Path: /languages
 * Plugin URI: https://wpsso.com/extend/plugins/wpsso-merchant-return-policy/
 * Assets URI: https://surniaulula.github.io/wpsso-merchant-return-policy/assets/
 * Author: JS Morisset
 * Author URI: https://wpsso.com/
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Description: Manage any number of Merchant Return Policies for Google Merchant listings.
 * Requires Plugins: wpsso
 * Requires PHP: 7.2.34
 * Requires At Least: 5.8
 * Tested Up To: 6.6.1
 * Version: 2.3.0
 *
 * Version Numbering: {major}.{minor}.{bugfix}[-{stage}.{level}]
 *
 *      {major}         Major structural code changes and/or incompatible API changes (ie. breaking changes).
 *      {minor}         New functionality was added or improved in a backwards-compatible manner.
 *      {bugfix}        Backwards-compatible bug fixes or small improvements.
 *      {stage}.{level} Pre-production release: dev < a (alpha) < b (beta) < rc (release candidate).
 *
 * Copyright 2023-2024 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {

	die( 'These aren\'t the droids you\'re looking for.' );
}

if ( ! class_exists( 'WpssoAbstractAddOn' ) ) {

	require_once dirname( __FILE__ ) . '/lib/abstract/add-on.php';
}

if ( ! class_exists( 'WpssoMrp' ) ) {

	class WpssoMrp extends WpssoAbstractAddOn {

		public $filters;	// WpssoMrpFilters class object.
		public $post;		// WpssoMrpPost class object.

		protected $p;		// Wpsso class object.

		private static $instance = null;	// WpssoMrp class object.

		public function __construct() {

			parent::__construct( __FILE__, __CLASS__ );
		}

		public static function &get_instance() {

			if ( null === self::$instance ) {

				self::$instance = new self;
			}

			return self::$instance;
		}

		public function init_textdomain() {

			load_plugin_textdomain( 'wpsso-merchant-return-policy', false, 'wpsso-merchant-return-policy/languages/' );
		}

		/*
		 * Called by Wpsso->set_objects which runs at init priority 10.
		 *
		 * Require library files with functions or static methods in require_libs().
		 *
		 * Require library files with dynamic methods and instantiate the class object in init_objects().
		 */
		public function init_objects() {

			$this->p =& Wpsso::get_instance();

			if ( $this->p->debug->enabled ) {

				$this->p->debug->mark();
			}

			if ( $this->get_missing_requirements() ) {	// Returns false or an array of missing requirements.

				return;	// Stop here.
			}

			require_once WPSSOMRP_PLUGINDIR . 'lib/filters.php';

			$this->filters = new WpssoMrpFilters( $this->p, $this );

			require_once WPSSOMRP_PLUGINDIR . 'lib/post.php';

			$this->post = new WpssoMrpPost( $this->p, $this );	// Depends on WpssoPost and WpssoAbstractWpMeta.
		}
	}

	WpssoMrp::get_instance();
}
