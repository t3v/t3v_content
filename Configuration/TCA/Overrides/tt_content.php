<?php
defined('TYPO3_MODE') or die();

// === Variables ===

// $namespace           = 'T3v';
// $extensionKey        = 't3v_content';
// $extensionIdentifier = \T3v\T3vCore\Utility\ExtensionUtility::identifier($extensionKey);
// $extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::signature($namespace, $extensionKey);
// $flexFormsFolder     = \T3v\T3vCore\Utility\ExtensionUtility::flexFormsFolder($extensionKey);
// $lll                 = \T3v\T3vCore\Utility\ExtensionUtility::lll($extensionKey, 'locallang_ttc.xlf');

/* _XXX_CE_CREATOR_XXX_ */

// === Content Elements ===

// --- Table Content Element ---

// Set `Top` as default table header position instead of `No header`.
$GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;
