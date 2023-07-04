<?php
declare(strict_types=1);

defined('TYPO3') or die();

/**
 * The `tt_content` TCA override.
 */

// === Content elements ===

// --- Table content element ---

// Sets `Top` as default table header position instead of `No header`.
$GLOBALS['TCA']['tt_content']['columns']['table_header_position']['config']['default'] = 1;
