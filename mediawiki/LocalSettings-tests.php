<?php

// T402728
class_alias( \MediaWiki\Title\Title::class, 'Title' );

$wgUseInstantCommons = true;

wfLoadExtension( 'AWS' );
wfLoadExtension( 'Cargo' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'CodeMirror' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'ConfirmEdit/QuestyCaptcha' );
wfLoadExtension( 'Diagrams' );
wfLoadExtension( 'DisplayTitle' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'Genealogy' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Intersection' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LastUserLogin' );
wfLoadExtension( 'LinkCards' );
wfLoadExtension( 'Maps' );
wfLoadExtension( 'MsUpload' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'NoCat' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'PageForms' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'QRLite' );
wfLoadExtension( 'RealMe' );
wfLoadExtension( 'RedirectManager' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'TemplateWizard' );
wfLoadExtension( 'Thanks' );
wfLoadExtension( 'TitleKey' );
wfLoadExtension( 'UnlinkedWikibase' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'WikiSEO' );
