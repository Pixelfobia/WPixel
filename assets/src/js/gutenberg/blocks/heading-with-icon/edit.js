/**
 * WordPress dependencies
 */

import { RichText, InspectorControls } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import { PanelBody, RadioControl } from '@wordpress/components';
import { getIconComponent } from './icons-map';

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
const Edit = ( { className, attributes, setAttributes } ) => {
	const { option, content } = attributes;

	const HeadingIcon = getIconComponent( option );

	return (
		<div className="wpixel-icon-heading">
			<span className="wpixel-icon-heading__heading">
				<HeadingIcon />
			</span>
			<RichText
				tagName="h4" // The tag here is the element output and editable in the admin
				className={className}
				value={content} // Any existing content, either from the database or an attribute default
				onChange={(content) => setAttributes({ content })}
				placeholder={__('Heading…', 'wpixel')} // Display this text before any content has been added by the user
			/>
			<InspectorControls>
				<PanelBody title={__('Block Settings', 'wpixel')}>
					<RadioControl
						label={__('Select the icon', 'wpixel')}
						help={__('Controls icon selection', 'wpixel')}
						selected={option}
						options={[
							{ label: __('Dos', 'wpixel'), value: 'dos' },
							{ label: __("Dont's", 'wpixel'), value: 'donts' },
						]}
						onChange={(option) => {
							setAttributes({ option });
						}}
					/>
				</PanelBody>
			</InspectorControls>
		</div>
	);
};

export default Edit;
