<?php

namespace Leadin\options;

use Leadin\wp\Options;

/**
 * Class that wraps the functions to access generic options.
 */
class HubspotOptions extends Options {
	const AFFILIATE_CODE = 'hubspot_affiliate_code';
	const WPE_TEMPLATE   = 'wpe_template';

	/**
	 * Return option containing affiliate codes.
	 */
	public static function get_affiliate_code() {
		return self::get( self::AFFILIATE_CODE );
	}

	/**
	 * Return option containing WPEngine templates.
	 */
	public static function get_wpe_template() {
		return self::get( self::WPE_TEMPLATE );
	}
}
