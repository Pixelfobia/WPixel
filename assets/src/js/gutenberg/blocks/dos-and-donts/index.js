/**
 * WordPress Dependencies.
 */
import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { InnerBlocks } from '@wordpress/block-editor';

/**
 * Internal dependencies.
 */
import Edit from './edit';


/**
 * Register block type.
 */
registerBlockType( 'wpixel-blocks/dos-and-donts', {
	/**
	 * Block title.
	 *
	 * @type {string}
	 */
	title: __('Dos and dont\'s', 'wpixel' ),
	/**
	 * Block icon.
	 *
	 * @type {string}
	 */
	icon: 'editor-table',
	/**
	 * Block description.
	 *
	 * @type {string}
	 */
	description: __( 'Add Heading and text', 'wpixel' ),
	/**
	 * Block category.
	 *
	 * @type {string}
	 */
	category: 'wpixel',
	
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
	save() {

		return (
			<div className="wpixel-dos-and-donts">
				<InnerBlocks.Content />
			</div>
		);
	},
} );
