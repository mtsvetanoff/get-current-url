<?php namespace MTsvetanoff\GetCurrentURL;

/**
 * A simple PHP library that returns the current page URL
 * --------------------------------------------
 * @author    Martin Tsvetanov <m.tsvetanoff@gmail.com>
 * @package   MTsvetanoff\GetCurrentURL\GetCurrentURL
 */

class GetCurrentURL {

	/**
	 * Returns the current URL
	 *
	 * @return string
	 *
	 * @access public
	 */
	public function execute() {

		# Determine server protocol
		$protocol = (isset($_SERVER['HTTPS']) AND $_SERVER['HTTPS'] AND $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';

		# Refresh
		return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
}