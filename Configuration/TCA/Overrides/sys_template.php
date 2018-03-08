<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey   = 't3v_content';
$extensionTitle = 'T3v Content';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);