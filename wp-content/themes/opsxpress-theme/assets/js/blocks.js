/**
 * Editor registration for the OpsXpress dynamic blocks.
 *
 * The markup is rendered in PHP so the theme templates stay the single source
 * of truth. Here we only teach the editor how to preview and configure them,
 * which removes the "your site doesn't include support for this block" notice
 * and lets anyone edit the templates from Appearance > Editor.
 */
( function( blocks, element, blockEditor, components, serverSideRender, i18n ) {
	'use strict';

	if ( ! blocks || ! element || ! blockEditor ) {
		return;
	}

	var el = element.createElement;
	var Fragment = element.Fragment;
	var useBlockProps = blockEditor.useBlockProps;
	var InspectorControls = blockEditor.InspectorControls;
	var PanelBody = components.PanelBody;
	var TextControl = components.TextControl;
	var Disabled = components.Disabled;
	var Placeholder = components.Placeholder;
	var __ = i18n.__;

	/**
	 * Server rendered preview, non-interactive so clicks select the block.
	 */
	function preview( name, attributes ) {
		if ( ! serverSideRender ) {
			return el( Placeholder, { label: name } );
		}

		return el(
			Disabled,
			null,
			el( serverSideRender, {
				block: name,
				attributes: attributes || {},
				httpMethod: 'POST'
			} )
		);
	}

	var sharedSupports = {
		html: false,
		reusable: false,
		multiple: false,
		customClassName: false
	};

	blocks.registerBlockType( 'opsxpress/header', {
		apiVersion: 3,
		title: __( 'OpsXpress Header', 'opsxpress' ),
                description: __( 'Site header with the logo and primary navigation. Menu items are managed in Appearance > Menus.', 'opsxpress' ),
		category: 'theme',
		icon: 'align-center',
		supports: sharedSupports,
		edit: function() {
			return el( 'div', useBlockProps(), preview( 'opsxpress/header' ) );
		},
		save: function() {
			return null;
		}
	} );

	blocks.registerBlockType( 'opsxpress/hero', {
		apiVersion: 3,
		title: __( 'OpsXpress Hero', 'opsxpress' ),
		description: __( 'Animated three line hero headline. Leave a field empty to keep the Customizer value.', 'opsxpress' ),
		category: 'theme',
		icon: 'cover-image',
		supports: sharedSupports,
		attributes: {
			titleLineOne: { type: 'string', default: '' },
			titleLineTwo: { type: 'string', default: '' },
			titleLineThree: { type: 'string', default: '' }
		},
		edit: function( props ) {
			var attributes = props.attributes;
			var setAttributes = props.setAttributes;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __( 'Headline', 'opsxpress' ), initialOpen: true },
						el( TextControl, {
							label: __( 'Line 1', 'opsxpress' ),
							value: attributes.titleLineOne,
							onChange: function( value ) {
								setAttributes( { titleLineOne: value } );
							}
						} ),
						el( TextControl, {
							label: __( 'Line 2', 'opsxpress' ),
							value: attributes.titleLineTwo,
							onChange: function( value ) {
								setAttributes( { titleLineTwo: value } );
							}
						} ),
						el( TextControl, {
							label: __( 'Line 3', 'opsxpress' ),
							value: attributes.titleLineThree,
							onChange: function( value ) {
								setAttributes( { titleLineThree: value } );
							}
						} )
					)
				),
				el( 'div', useBlockProps(), preview( 'opsxpress/hero', attributes ) )
			);
		},
		save: function() {
			return null;
		}
	} );

	blocks.registerBlockType( 'opsxpress/footer', {
		apiVersion: 3,
		title: __( 'OpsXpress Footer', 'opsxpress' ),
		description: __( 'CTA cards plus the video background footer with the newsletter form and social links.', 'opsxpress' ),
		category: 'theme',
		icon: 'align-wide',
		supports: sharedSupports,
		edit: function() {
			return el( 'div', useBlockProps(), preview( 'opsxpress/footer' ) );
		},
		save: function() {
			return null;
		}
	} );
} )(
	window.wp.blocks,
	window.wp.element,
	window.wp.blockEditor,
	window.wp.components,
	window.wp.serverSideRender,
	window.wp.i18n
);
