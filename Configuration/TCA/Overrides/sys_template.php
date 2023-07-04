<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

/**
 * The `sys_template` TCA override.
 */

// === Variables ===

$extensionKey = 't3v_content';
$extensionTitle = 'T3v Content';

// === TypoScript ===

ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);
