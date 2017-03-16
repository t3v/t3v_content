<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function ($namespace, $extkey) {
  // === Content Elements ===

  // --- Spacer Content Element ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    // The extension name (in upper camel case) or the extension key (in lower underscore)
    $namespace . '.' . $extkey,

    // A unique name of the content element in upper camel case
    'Spacer',

    // An array holding the controller-action-combinations that are accessible
    [
      // The first controller and its first action will be the default
      'ContentElements\SpacerContentElement' => 'index'
    ],

    // An array of non-cachable controller-action-combinations (they must already be enabled)
    [
      // 'ContentElements\SpacerContentElement' => 'index'
    ]
  );

  // === TsConfig ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extkey . '/Configuration/TSconfig.ts">');
}, 'T3v', $_EXTKEY);