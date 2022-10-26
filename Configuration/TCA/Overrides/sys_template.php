<?php
declare(strict_types=1);

/**
 * The `sys_template` TCA override.
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// === Variables ===

$extensionKey = 't3v_content';
$extensionTitle = 'T3v Content';

// === TypoScript ===

ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);

// === T3v Generator ===
