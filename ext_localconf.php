<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace           = 'T3v';
$extensionKey        = $_EXTKEY;
$extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::extensionSignature($namespace, $extensionKey);
$configurationFolder = \T3v\T3vCore\Utility\ExtensionUtility::configurationFolder($extensionKey);
$iconsFolder         = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

// === Page TSconfig ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("<INCLUDE_TYPOSCRIPT: source=\"{$configurationFolder}/TSconfig.ts\">");

// === Content Elements ===

// --- Spacer Content Element ---

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
  $extensionSignature,

  // The unique name of the content element in upper camel case
  'Spacer',

  // The array holding the controller-action-combinations that are accessible
  [
    // The first controller and its first action will be the default
    'ContentElements\SpacerContentElement' => 'index'
  ],

  // The array of non-cachable controller-action-combinations (they must already be enabled)
  [
    // 'ContentElements\SpacerContentElement' => 'index'
  ]
);

// === Backend ===

if (TYPO3_MODE === 'BE') {
  // --- Icons ---

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

  $icons = [
    'Spacer Content Element'        => "{$iconsFolder}/ContentElements/SpacerContentElement.svg",
    'Accordion Grid Element'        => "{$iconsFolder}/GridElements/AccordionGridElement.svg",
    'Accord Grid Element'           => "{$iconsFolder}/GridElements/AccordGridElement.svg",
    '2 Columns Layout Grid Element' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/2Columns.svg",
    '3 Columns Layout Grid Element' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/3Columns.svg",
    'Conditionally Grid Element'    => "{$iconsFolder}/GridElements/ConditionallyGridElement.svg",
    'Document Section Grid Element' => "{$iconsFolder}/GridElements/DocumentSectionGridElement.svg",
    'Panel Grid Element'            => "{$iconsFolder}/GridElements/PanelGridElement.svg",
    'Timeline Grid Element'         => "{$iconsFolder}/GridElements/TimelineGridElement.svg",
    'Event Grid Element'            => "{$iconsFolder}/GridElements/EventGridElement.svg",
    'Viewport Grid Element'         => "{$iconsFolder}/GridElements/ViewportGridElement.svg"
  ];

  foreach ($icons as $name => $source) {
    $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($name);
    $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

    $iconRegistry->registerIcon(
      $iconSignature,
      \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
      ['source' => $source]
    );
  }
}