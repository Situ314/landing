/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	
	// %REMOVE_START%
	// The configuration options below are needed when running CKEditor from source files.
	config.plugins = 'dialogui,dialog,about,a11yhelp,dialogadvtab,basicstyles,bidi,blockquote,notification,button,toolbar,clipboard,panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,copyformatting,div,resize,elementspath,enterkey,entities,popup,filetools,find,fakeobjects,flash,floatingspace,listblock,richcombo,font,forms,format,horizontalrule,htmlwriter,iframe,wysiwygarea,image,indent,indentblock,indentlist,smiley,justify,menubutton,language,link,list,liststyle,magicline,maximize,newpage,pagebreak,pastetext,pastefromword,preview,print,removeformat,save,selectall,showblocks,showborders,sourcearea,specialchar,scayt,stylescombo,tab,table,tabletools,tableselection,undo,lineutils,widgetselection,widget,notificationaggregator,uploadwidget,uploadimage,wsc,imagebase,xml,ajax';
	config.skin = 'moonocolor';

	config.extraPlugins = 'inlinesave,filebrowser,simplebutton,imageresizerowandcolumn';

	var direccion = 'http://localhost/'

	 config.filebrowserBrowseUrl = direccion + 'landing/public/vendor/ckfinder/ckfinder.html';
     config.filebrowserImageBrowseUrl = direccion + 'landing/public/vendor/ckfinder/ckfinder.html?type=Images';
     config.filebrowserUploadUrl = direccion + 'landing/public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
     config.filebrowserImageUploadUrl = direccion + 'landing/public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

	config.inlinesave = {
    postUrl: direccion + 'lad/public/get.php',
    postData: {test: true},
    onSave: function(editor) { console.log('clicked save', editor); return true; },
    onSuccess: function(editor, data) { console.log('save successful', editor, data); },
    onFailure: function(editor, status, request) { console.log('save failed', editor, status, request); },
    successMessage: 'El archivo se guardó satisfactoriamente. Encuéntrelo en la carpeta Landings',
    errorMessage: 'Hubo un error al guardar :(',
    useJSON: true,
    useColorIcon: true
};
	// %REMOVE_END%

	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};