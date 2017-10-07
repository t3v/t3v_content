<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function ($namespace, $extkey) {
  $extensionName      = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extkey));
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === Standard Content Elements ===

  // --- Table Content Element ---

  // Set `Top` as default table header position instead of `No header`
  $GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;

  // === Custom Content Elements ===

  // --- Spacer Content Element ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extensionSignature,

    // A unique name of the content element in upper camel case
    'Spacer',

    // Description of the content element shown in the backend dropdown field
    'Spacer Content Element'
  );

  $contentElementName      = strtolower('Spacer');
  $contentElementSignature = $extensionName . '_' . $contentElementName;

  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,select_key,pages,recursive';
  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, 'FILE:EXT:' . $extkey . '/Configuration/FlexForms/ContentElements/SpacerContentElement.xml');
}, 't3v', 't3v_content');