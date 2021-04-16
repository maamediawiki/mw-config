<?php // This is a default global extension, new extensions can be add to localextensions.php
wfLoadExtensions( [	
	'3D',
    	'AbuseFilter',
	'AdvancedSearch',
//	'AntiSpoof',
	'Babel',
	'BetaFeatures',
	'CirrusSearch',
	'Cite',
	'CiteThisPage',
	'CentralNotice',
	'CentralAuth',
	'CheckUser',
	'CharInsert', 
	'CommonsMetadata',
	'CodeEditor',
	'CodeMirror',
	'ConfirmEdit',
	'ContentTranslation',
	'DiscussionTools',
	'Disambiguator',
	'DismissableSiteNotice',
	'Echo',
	'Elastica',
	'EditUser',
	'EventLogging',
	'EventStreamConfig',
	'Flow',
	'Gadgets',
	'GlobalBlocking',
	'GlobalCssJs',
	'GlobalPreferences',
	'GlobalUsage',
	'GlobalUserPage',
	'GuidedTour',
	'ImageMap',
	'InputBox',
	'Interwiki',
	'LocalisationUpdate',
	'LoginNotify',
	'Linter',
	'MaamediaMessages',
	'MobileFrontend',
	'MultimediaViewer',
	'MassMessage',
	'Nuke',
	'NewUserMessage',
	'OATHAuth',
	'OAuth',
	'ParserFunctions',
	'PagedTiffHandler',
	'PageImages',
	'PageViewInfo',
	'ProtectSite',
	'Popups',
	'Poem',
	'Renameuser',
	'ReplaceText',
	'Scribunto',
	'SiteMatrix',
	'SpamBlacklist',
	'SyntaxHighlight_GeSHi',
	'TorBlock',
        'Translate',
	'TranslationNotifications',
	'TwoColConflict',
	'TextExtracts',
	'TemplateSandbox',
	'TemplateStyles',
	'TemplateData',
	'TemplateWizard',
	'UserMerge',
	'UniversalLanguageSelector',
	'VisualEditor',
	'WikiEditor',
] );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;
