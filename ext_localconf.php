<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function ($extkey) {
  // === TsConfig ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extkey . '/Configuration/TSconfig.ts">');
}, $_EXTKEY);