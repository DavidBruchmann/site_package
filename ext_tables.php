<?php

// add constants.txt and setup.txt
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'Configuration' // 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf'
);
