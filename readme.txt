=== WPSSO Merchant Return Policy Manager ===
Plugin Name: WPSSO Merchant Return Policy Manager
Plugin Slug: wpsso-merchant-return-policy
Text Domain: wpsso-merchant-return-policy
Domain Path: /languages
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.txt
Assets URI: https://surniaulula.github.io/wpsso-merchant-return-policy/assets/
Tags: schema, return policy, merchant, woocommerce, hasMerchantReturnPolicy
Contributors: jsmoriss
Requires Plugins: wpsso
Requires PHP: 7.2.34
Requires At Least: 5.8
Tested Up To: 6.6.2
Stable Tag: 2.6.1

Manage any number of Merchant Return Policies for Google Merchant listings.

== Description ==

<!-- about -->

**Manage any number of Merchant Return Policies for Google Merchant listings.**

**Fixes the *Missing field "hasMerchantReturnPolicy" (in "offers")* warning for Google Merchant listings.**

**E-Commerce Plugin Optional:**

WooCommerce is suggested but not required - the WPSSO Merchant Return Policy Manager add-on can also provide return policy markup for custom product pages.

<!-- /about -->

**The Return Policy editing page includes:**

* Return Policy Name
* Return Policy Category
* Return Window Days
* Return Methods
* Return Shipping Fees
* Applicable Countries

<h3>WPSSO Core Required</h3>

WPSSO Merchant Return Policy Manager (WPSSO MRP) is an add-on for the [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/), which provides complete structured data for WordPress to present your content at its best for social sites and search results – no matter how URLs are shared, reshared, messaged, posted, embedded, or crawled.

== Installation ==

<h3 class="top">Install and Uninstall</h3>

* [Install the WPSSO Merchant Return Policy Manager add-on](https://wpsso.com/docs/plugins/wpsso-merchant-return-policy/installation/install-the-plugin/).
* [Uninstall the WPSSO Merchant Return Policy Manager add-on](https://wpsso.com/docs/plugins/wpsso-merchant-return-policy/installation/uninstall-the-plugin/).

== Frequently Asked Questions ==

== Screenshots ==

01. The Return Policy editing page.

== Changelog ==

<h3 class="top">Version Numbering</h3>

Version components: `{major}.{minor}.{bugfix}[-{stage}.{level}]`

* {major} = Major structural code changes and/or incompatible API changes (ie. breaking changes).
* {minor} = New functionality was added or improved in a backwards-compatible manner.
* {bugfix} = Backwards-compatible bug fixes or small improvements.
* {stage}.{level} = Pre-production release: dev < a (alpha) < b (beta) < rc (release candidate).

<h3>Standard Edition Repositories</h3>

* [GitHub](https://surniaulula.github.io/wpsso-merchant-return-policy/)
* [WordPress.org](https://plugins.trac.wordpress.org/browser/wpsso-merchant-return-policy/)

<h3>Development Version Updates</h3>

<p><strong>WPSSO Core Premium edition customers have access to development, alpha, beta, and release candidate version updates:</strong></p>

<p>Under the SSO &gt; Update Manager settings page, select the "Development and Up" (for example) version filter for the WPSSO Core plugin and/or its add-ons. When new development versions are available, they will automatically appear under your WordPress Dashboard &gt; Updates page. You can reselect the "Stable / Production" version filter at any time to reinstall the latest stable version.</p>

<p><strong>WPSSO Core Standard edition users (ie. the plugin hosted on WordPress.org) have access to <a href="https://wordpress.org/plugins/merchant-return-policy/advanced/">the latest development version under the Advanced Options section</a>.</strong></p>

<h3>Changelog / Release Notes</h3>

**Version 2.6.1 (2024/09/12)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* Fixed deprecated creation of dynamic property in `WpssoMrpFilters`.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v18.7.3.

**Version 2.6.0 (2024/09/07)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Renamed and moved the `WpssoMrpPost` class to `WpssoMrpIntegAdminPost`.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v18.7.0.

**Version 2.5.0 (2024/08/25)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Changed the main instantiation action hook from 'init_objects' to 'init_objects_preloader'.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v18.5.0.

**Version 2.4.0 (2024/08/15)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Renamed 'input_vertical_list' CSS class to 'column-list'.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v18.0.0.

**Version 2.3.0 (2024/08/03)**

* **New Features**
	* None.
* **Improvements**
	* Added a reminder on the Return Policy editing page that Google limits the number of countries to 50.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v17.23.0.

**Version 2.2.1 (2024/08/01)**

* **New Features**
	* None.
* **Improvements**
	* Added a new "Return Fees" option.
* **Bugfixes**
	* Fixed saving Return Policy as default.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v17.22.0.

**Version 2.1.0 (2024/07/31)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Added debug "mark" messages to the `WpssoMrpFiltersOptions` class methods.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v17.21.0.

**Version 2.0.1 (2023/11/20)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* Fixed class not found error in lib/filters-options.php.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.8.
	* WPSSO Core v17.18.0.

== Upgrade Notice ==

= 2.6.1 =

(2024/09/12) Fixed deprecated creation of dynamic property in `WpssoMrpFilters`.

= 2.6.0 =

(2024/09/07) Renamed and moved the `WpssoMrpPost` class to `WpssoMrpIntegAdminPost`.

= 2.5.0 =

(2024/08/25) Changed the main instantiation action hook from 'init_objects' to 'init_objects_preloader'.

= 2.4.0 =

(2024/08/15) Renamed 'input_vertical_list' CSS class to 'column-list'.

= 2.3.0 =

(2024/08/03) Added a reminder on the Return Policy editing page that Google limits the number of countries to 50.

= 2.2.1 =

(2024/08/01) Added a new "Return Fees" option. Fixed saving Return Policy as default.

= 2.1.0 =

(2024/07/31) Added debug "mark" messages to the `WpssoMrpFiltersOptions` class methods.

= 2.0.1 =

(2023/11/20) Fixed class not found error in lib/filters-options.php.

