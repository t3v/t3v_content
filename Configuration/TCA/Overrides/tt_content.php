<?php
/**
 * The `tt_content` TCA override.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3') or die();

// === Variables ===

// $namespace = 'T3v';
// $extensionKey = 't3v_content';
// $extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::getIdentifier($extensionKey);
// $extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::getSignature($namespace, $extensionKey);
// $flexFormsFolder = \T3v\T3vCore\Utility\ExtensionUtility::getFlexFormsFolder($extensionKey);
// $lll = \T3v\T3vCore\Utility\ExtensionUtility::getLocallang($extensionKey, 'locallang_ttc.xlf');

// === Content Elements ===

// --- Table Content Element ---

// Sets `Top` as default table header position instead of `No header`:
$GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;

// === T3v Generator ===
