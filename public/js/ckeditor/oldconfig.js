/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.skin='office2013';
	config.toolbar = 'MyToolbar';
	config.toolbar_MyToolbar =
	[
		{ name: 'document', items : [ 'Source','Preview','Templates' ] },
		{ name: 'insert', items : [ 'Image','Flash','Table' ] },
        { name: 'basicstyles', items : [ 'Bold','Italic'] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },	
		{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
		{ name: 'colors', items : [ 'TextColor','BGColor' ] },
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste' ] },
	];
};
