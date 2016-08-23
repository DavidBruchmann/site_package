<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:site_package/Resources/Private/Language/locallang_be.xlf:wizard.title',
        'typo3_logo',
        'content-image'
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['typo3_logo'] = [
    'showitem' => '--palette--;LLL:EXT:site_package/Resources/Private/Language/locallang_be.xlf:palette.general;general'
];
