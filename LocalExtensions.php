<?php

// Set up extensions for use on wikis that are not global
if ( $wmgUseAbuseFilter ) {
	wfLoadExtension( 'AbuseFilter' );
}

if ( $wmgUseAntiSpoof ) {
	wfLoadExtension( 'AntiSpoof' );
}

if ( $wmgUseAdvancedMeta ) {
	wfLoadExtension( 'AdvancedMeta' );
}

if ( $wmgUseAdvancedSearch ) {
	wfLoadExtension( 'AdvancedSearch' );
}

if ( $wmgUseBabel ) {
	wfLoadExtension( 'Babel' );
}

if ( $wmgUseBetaFeatures ) {
	wfLoadExtension( 'BetaFeatures' );
}

if ( $wmgUseCategoryTree ) {
	wfLoadExtension( 'CategoryTree' );
}

if ( $wmgUseCapiunto ) {
	wfLoadExtension( 'Capiunto' );
}

if ( $wmgUseCentralAuth ) {
	wfLoadExtension( 'CentralAuth' );
}

if ( $wmgUseCharInsert ) {
	wfLoadExtension( 'CharInsert' );
}

if ( $wmgUseCite ) {
	wfLoadExtension( 'Cite' );
}

if ( $wmgUseCirrusSearch ) {
	wfLoadExtension( 'CirrusSearch' );
}

if ( $wmgUseCiteThisPage ) {
	wfLoadExtension( 'CiteThisPage' );
}

if ( $wmgUseCodeEditor ) {
	wfLoadExtension( 'CodeEditor' );
}

if ( $wmgUseCodeMirror ) {
	wfLoadExtension( 'CodeMirror' );
}

if ( $wmgUseCodeReview ) {
	wfLoadExtension( 'CodeReview' );
}

if ( $wmgUseConfirmAccount ) {
	wfLoadExtension( 'ConfirmAccount' );
}

if ( $wmgUseContactPage ) {
	wfLoadExtension( 'ContactPage' );
}

if ( $wmgUseDisambiguator ) {
	wfLoadExtension( 'Disambiguator' );
}

if ( $wmgUseDiscussionTools ) {
	wfLoadExtension( 'DiscussionTools' );
}

if ( $wmgUseEntitySchema ) {
	wfLoadExtension( 'EntitySchema' );
}

if ( $wmgUseElastica ) {
	wfLoadExtension( 'Elastica' );
}

if ( $wmgUseFlow ) {
	wfLoadExtension( 'Flow' );
}

if ( $wmgUseGadgets ) {
	wfLoadExtension( 'Gadgets' );
}

if ( $wmgUseGlobalUserPage ) {
	wfLoadExtension( 'GlobalUserPage' );
}

if ( $wmgUseGraph ) {
	wfLoadExtension( 'Graph' );
}

if ( $wmgUseHoverGallery ) {
	wfLoadExtension( 'HoverGallery' );
}

if ( $wmgUseInputBox ) {
	wfLoadExtension( 'InputBox' );
}

if ( $wmgUseJsonConfig ) {
	wfLoadExtension( 'JsonConfig' );
}

if ( $wmgUseKartographer ) {
	wfLoadExtension( 'Kartographer' );
}

if ( $wmgUseLinter ) {
	wfLoadExtension( 'Linter' );
}

if ( $wmgUseMassMessage ) {
	wfLoadExtension( 'MassMessage' );
}

if ( $wmgUseMultimediaViewer ) {
	wfLoadExtension( 'MultimediaViewer' );
}

if ( $wmgUseNewsletter ) {
	wfLoadExtension( 'Newsletter' );
}

if ( $wmgUseNewUserMessage ) {
	wfLoadExtension( 'NewUserMessage' );
}

if ( $wmgUsePagedTiffHandler ) {
	wfLoadExtension( 'PagedTiffHandler' );
}

if ( $wmgUsePageImages ) {
	wfLoadExtension( 'PageImages' );
}

if ( $wmgUsePageTriage ) {
	wfLoadExtension( 'PageTriage' );
}

if ( $wmgUsePdfHandler ) {
	wfLoadExtension( 'PdfHandler' );
}

if ( $wmgUseRelatedArticles ) {
	wfLoadExtension( 'RelatedArticles' );
}

if ( $wmgUseReplaceText ) {
	wfLoadExtension( 'ReplaceText' );
}

if ( $wmgUseSyntaxHighlightGeSHi ) {
	wfLoadExtension( 'SyntaxHighlight_GeSHi' );
}

if ( $wmgUseTemplateData ) {
	wfLoadExtension( 'TemplateData' );
}
	
if ( $wmgUseTemplateSandbox ) {
	wfLoadExtension( 'TemplateSandbox' );
}

if ( $wmgUseTemplateStyles ) {
	wfLoadExtension( 'TemplateStyles' );
}

if ( $wmgUseTemplateWizard ) {
	wfLoadExtension( 'TemplateWizard' );
}

if ( $wmgUseTextExtracts ) {
	wfLoadExtension( 'TextExtracts' );
}

if ( $wmgUseTranslate ) {
	wfLoadExtension( 'Translate' );
}

if ( $wmgUseTranslationNotifications ) {
	wfLoadExtension( 'TranslationNotifications' );
}

if ( $wmgUseThanks ) {
	wfLoadExtension( 'Thanks' );
}

if ( $wmgUseTimedMediaHandler ) {
	wfLoadExtension( 'TimedMediaHandler' );
}

if ( $wmgUseTwoColConflict ) {
	wfLoadExtension( 'TwoColConflict' );
}

if ( $wmgUseUniversalLanguageSelector ) {
	wfLoadExtension( 'UniversalLanguageSelector' );
}

if ( $wmgUseUploadsLink ) {
	wfLoadExtension( 'UploadsLink' );
}

if ( $wmgUseVisualEditor ) {
	wfLoadExtension( 'VisualEditor' );
	
	if ( $wmgVisualEditorEnableDefault ) {
		$wgConf->settings = ['+wmgDefaultUserOptions']['default']['visualeditor-enable'] = 1;
		$wgConf->settings = ['+wmgDefaultUserOptions']['default']['visualeditor-editor'] = "visualeditor";
	} else {
		$wgConf->settings = ['+wmgDefaultUserOptions']['default']['visualeditor-enable'] = 0;
	}
}


if ( $wmgUseWikibaseClient ) {
	require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
}

if ( $wmgUseWikibaseLexeme ) {
	wfLoadExtension( 'WikibaseLexeme' );
}

if ( $wmgUseWikibaseQualityConstraints ) {
	wfLoadExtension( 'WikibaseQualityConstraints' );
}

if ( $wmgUseWikibaseRepository ) {
	require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
}

if ( $wmgUseWikibaseRepository || $wmgUseWikibaseClient ) {
	// Includes Wikibase Configuration. There is a global and per-wiki system here.
	require_once "/var/www/mediawiki/Wikibase.php";
}
// Skin only

if ( $wmgUseMetrolook ) {
	wfLoadSkin( 'Metrolook' );
}

if ( $wmgUseMinervaNeue ) {
	wfLoadSkin( 'MinervaNeue' );
}

if ( $wmgUseMobileFrontend ) {
	wfLoadExtension( 'MobileFrontend' );
}