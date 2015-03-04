<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'NIT.' . $_EXTKEY,
	'Kundenstimmen',
	array(
		'Kundenstimmen' => 'show, list, tease',
		
	),
	// non-cacheable actions
	array(
		'Kundenstimmen' => 'show, list, tease',
		
	)
);

?>