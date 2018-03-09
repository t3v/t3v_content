<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 't3v';
$extensionKey        = 't3v_content';
$extensionIdentifier = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extensionKey));
$extensionSignature  = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extensionKey);
$configuration       = "FILE:EXT:{$extensionKey}/Configuration";
$flexForms           = "{$configuration}/FlexForms";

// === Standard Content Elements ===

// --- Table Content Element ---

// Set `Top` as default table header position instead of `No header`
$GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;

// === Custom Content Elements ===

// --- Spacer Content Element ---

$contentElementName        = 'Spacer';
$contentElementDescription = 'Spacer Content Element';
$contentElementIdentifier  = strtolower($contentElementName);
$contentElementSignature   = $extensionIdentifier . '_' . $contentElementIdentifier;

// Register the content element
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extensionSignature, $contentElementName, $contentElementDescription);

// Disable the display of `layout`, `pages` and `select_key` field
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,pages,select_key';

// Activate the display of the `flexform` field and set the FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexForms}/ContentElements/SpacerContentElement.xml");