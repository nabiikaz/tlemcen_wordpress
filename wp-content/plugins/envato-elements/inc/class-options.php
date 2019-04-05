<?php
/**
 * Envato Elements: Options
 *
 * Making option management a bit easier for us.
 *
 * @package Envato/Envato_Elements
 * @since 0.0.7
 */

namespace Envato_Elements;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Feedback registration and management.
 *
 * @since 0.0.2
 */
class Options extends Base {

	const OPTION_KEY = 'envato_elements_options';

	/**
	 * Feedback constructor.
	 */
	public function __construct() {
		parent::__construct();
	}

	public function get( $key = false ) {
		$options = get_option( self::OPTION_KEY . ( defined( 'ENVATO_ELEMENTS_API_ENDPOINT' ) ? md5( ENVATO_ELEMENTS_API_ENDPOINT ) : '' ), [] );
		if ( ! $options || ! is_array( $options ) ) {
			$options = [];
		}
		if ( $key !== false ) {
			return isset( $options[ $key ] ) ? $options[ $key ] : false;
		}

		return $options;
	}

	public function set( $key, $value ) {
		$options         = $this->get();
		$options[ $key ] = $value;
		update_option( self::OPTION_KEY . ( defined( 'ENVATO_ELEMENTS_API_ENDPOINT' ) ? md5( ENVATO_ELEMENTS_API_ENDPOINT ) : '' ), $options );
	}
}
