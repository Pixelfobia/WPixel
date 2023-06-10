/**
 *  Register Block Styles
 */
/**
 * WordPress dependencies.
 */
import { registerBlockStyle, unregisterBlockStyle } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

/**
 *  Quote Block Styles
 * 
 * @type {Array}
 */
const layoutStyleQuote = [
	{
		name: 'layout-dark-background',
		label: __( 'Dark background', 'wpixel' ),
	},
];

const layoutStyleButton = [
	{
		name: 'layout-border-blue-fill',
		label: __( 'Blue outline', 'wpixel' ),
	},
	{
		name: 'layout-border-white-no-fill',
		label: __( 'White outline - to be used with dark background', 'wpixel' ),
	},
];

/**
 * Register styles.
 *
 * @return {void}
 */
const register = ()	=> {
	layoutStyleQuote.forEach( ( layoutStyle ) =>
	 registerBlockStyle( 'core/quote', layoutStyle ) 
	 );

	layoutStyleButton.forEach( ( layoutStyle ) =>
	 registerBlockStyle( 'core/button', layoutStyle )
	 );
};

// const deRegister = () => {
// 	unregisterBlockStyle( 'core/quote', 'large' );
// 	unregisterBlockStyle( 'core/button', 'outline' )
// }

/**
 *  Register and deregister Styles on domReady
 */
wp.domReady( () => {
	register();
	// deRegister();
}) 