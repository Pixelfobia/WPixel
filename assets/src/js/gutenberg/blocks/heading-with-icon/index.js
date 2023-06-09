/**
 * WordPress Dependencies.
 */
import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { RichText } from '@wordpress/block-editor';

/**
 * Internal dependencies.
 */
import Edit from './edit';

/**
 * Heading with Icon block.
 *
 * @package
 */
import { getIconComponent } from './icons-map';

/**
 * Register block type.
 */
registerBlockType( 'wpixel-blocks/heading', {
	/**
	 * Block title.
	 *
	 * @type {string}
	 */
	title: __('Heading with Icon', 'wpixel' ),
	/**
	 * Block icon.
	 *
	 * @type {string}
	 */
	icon: 'admin-customizer',
	/**
	 * Block description.
	 *
	 * @type {string}
	 */
	description: __( 'Add Heading and select Icons', 'wpixel' ),
	/**
	 * Block category.
	 *
	 * @type {string}
	 */
	category: 'wpixel',
	/**
	 * Attributes.
	 */
	attributes: {
		option: {
			type: 'string',
			default: 'dos',
		},
		content: {
			type: 'string',
			source: 'html',
			selector: 'h4',
			default: __( 'Dos', 'wpixel' ),
		},
	},
	edit: Edit,

	/**
	 * Save function.
	 *
	 * @param {Object} props                    Props
	 *
	 * @param          props.attributes
	 * @param          props.attributes.option
	 * @param          props.attributes.content
	 * @return {Object} Content.
	 */
	save( { attributes: { option, content } } ) {
		const HeadingIcon = getIconComponent( option );

		return (
			<div className="wpixel-icon-heading">
				<span className="wpixel-icon-heading__heading">
					<HeadingIcon />
				</span>
				{/* Saves <h2>Content added in the editor...</h2> to the database for frontend display */}
				<RichText.Content tagName="h4" value={content} />
			</div>
		);
	},
} );
