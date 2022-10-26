<?php
declare(strict_types=1);

/**
 * The `tt_content` TCA override.
 */

defined('TYPO3') or die();

// === Content Elements ===

// --- Table Content Element ---

// Sets `Top` as default table header position instead of `No header`:
$GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;

// === T3v Generator ===
