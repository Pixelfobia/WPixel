/**
 * WordPress dependencies
 */

import { InnerBlocks } from '@wordpress/block-editor';
import { blockColumns } from './templates';

const ALLOWED_BLOCKS = [ 'core/group' ];

const INNER_BLOCK_TEMPLATE = [
	[ 'core/group', {
		className: 'wpixel-dos-and-donts__group',
		backgroundColor: 'cyan-bluish-gray'
		},
		blockColumns
	],
]
/**
 * Edit
 *
 * @param {Object} props               Props.
 *
 * @param          props.className
 * @param          props.attributes
 * @param          props.setAttributes
 * @return {Object} Content.
 */
const Edit = () => {

	return (
		<div className="wpixel-dos-and-donts">
			<InnerBlocks 
				allowedBlocks={ ALLOWED_BLOCKS }
				template= { INNER_BLOCK_TEMPLATE }
				templateLock={ true }
			/>
		</div>
	);
};

export default Edit;
