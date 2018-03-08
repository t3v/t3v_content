<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 't3v';
$extensionKey        = 't3v_content';
$extensionIdentifier = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extensionKey));
$extensionSignature  = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extensionKey);
$configuration       = "EXT:{$extensionKey}/Configuration";
$flexForms           = "FILE:{$configuration}/FlexForms";

// === Standard Content Elements ===

// --- Table Content Element ---

// Set `Top` as default table header position instead of `No header`
$GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;

// === Custom Content Elements ===

// --- Spacer Content Element ---

$contentElementIdentifier = strtolower('Spacer');
$contentElementSignature  = $extensionIdentifier . '_' . $contentElementIdentifier;

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
  $extensionSignature,

  // The unique name of the content element in upper camel case
  'Spacer',

  // The description of the content element shown in the backend dropdown field
  'Spacer Content Element'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,select_key,pages,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, "{$flexForms}/ContentElements/SpacerContentElement.xml");