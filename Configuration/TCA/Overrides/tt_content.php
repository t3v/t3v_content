<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 'T3v';
$extensionKey        = 't3v_content';
$extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::extensionIdentifier($extensionKey);
$extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::extensionSignature($namespace, $extensionKey);
$flexFormsFolder     = \T3v\T3vCore\Utility\ExtensionUtility::flexFormsFolder($extensionKey);
$lll                 = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_ttc.xlf');

// === Standard TYPO3 Content Elements ===

// --- Table Content Element ---

// Set `Top` as default table header position instead of `No header`
$GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;

// === Custom Content Elements ===

// --- Spacer Content Element ---

$contentElementKey        = 'Spacer';
$contentElementLabel      = $lll . 'contentElements.spacerContentElement.label';
$contentElementIdentifier = \T3v\T3vContent\Utility\ContentElementUtility::contentElementIdentifier($contentElementKey);
$contentElementSignature  = \T3v\T3vContent\Utility\ContentElementUtility::contentElementSignature($extensionIdentifier, $contentElementIdentifier);

// Register the Content Element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementIdentifier, $contentElementLabel);

// Disable the display of `layout`, `pages`, `select_key` and `recursive` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key,recursive';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexFormsFolder}/ContentElements/SpacerContentElement.xml");

// === Palettes ===

// Add `subheader` field after `header_link` field in the `header` palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
  'tt_content',
  'header',
  '--linebreak--,subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel',
  'after:header_link'
);
