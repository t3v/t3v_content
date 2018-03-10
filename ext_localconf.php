<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace          = 't3v';
$extensionKey       = $_EXTKEY;
$extensionSignature  = \T3v\T3vCore\Utility\ExtensionUtility::extensionSignature($namespace, $extensionKey);
$configurationFolder = \T3v\T3vCore\Utility\ExtensionUtility::configurationFolder($extensionKey);
$iconsFolder         = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

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

// === Page TSconfig ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("<INCLUDE_TYPOSCRIPT: source=\"{$configurationFolder}/TSconfig.ts\">");

if (TYPO3_MODE === 'BE') {
  // === Icons ===

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
  );

  // --- Spacer Content Element ---

  $iconIdentifier = 'spacer_content_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/ContentElements/SpacerContentElement.svg"]
  );

  // --- Accordion / Accord Grid Element ---

  $iconIdentifier = 'accordion_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/AccordionGridElement.svg"]
  );

  $iconIdentifier = 'accord_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/AccordGridElement.svg"]
  );

  // --- Column Layout Grid Element ---

  $iconIdentifier = '2_columns_layout_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/2Columns.svg"]
  );

  $iconIdentifier = '3_columns_layout_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/3Columns.svg"]
  );

  // --- Document Section Grid Element ---

  $iconIdentifier = 'document_section_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/DocumentSectionGridElement.svg"]
  );

  // --- Panel Grid Element ---

  $iconIdentifier = 'panel_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/PanelGridElement.svg"]
  );

  // --- Timeline / Event Grid Element ---

  $iconIdentifier = 'timeline_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/TimelineGridElement.svg"]
  );

  $iconIdentifier = 'event_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/EventGridElement.svg"]
  );

  // --- Viewport Grid Element ---

  $iconIdentifier = 'viewport_grid_element';

  $iconRegistry->registerIcon(
    "{$extensionKey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/ViewportGridElement.svg"]
  );
}