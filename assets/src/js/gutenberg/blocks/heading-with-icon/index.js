import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

registerBlockType( 'wpixel-blocks/heading', {
	title: __('Heading with Icon', 'wpixel' ),
	icon: 'admin-customizer',
	description: __( 'Heading with Icon', 'wpixel' ),
	category: 'wpixel',
	edit() {
		return <div className="heading">Heading with Icon</div>;
	},
	save() {
	
		return <div className="heading">Heading with Icon</div>;
	}
} );

