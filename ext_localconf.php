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

// === Backend ===

if (TYPO3_MODE === 'BE') {
  // --- Icons ---

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

  // +++ Spacer Content Element Icon +++

  $iconKey        = 'Spacer Content Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/ContentElements/SpacerContentElement.svg"]
  );

  // +++ Accordion / Accord Grid Element Icons +++

  $iconKey        = 'Accordion Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/AccordionGridElement.svg"]
  );

  $iconKey        = 'Accord Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/AccordGridElement.svg"]
  );

  // +++ Column Layout Grid Element Icons +++

  $iconKey        = '2 Columns Layout Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/2Columns.svg"]
  );

  $iconKey        = '3 Columns Layout Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/ColumnLayoutGridElement/3Columns.svg"]
  );

  // +++ Document Section Grid Element Icon +++

  $iconKey        = 'Document Section Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/DocumentSectionGridElement.svg"]
  );

  // +++ Panel Grid Element Icon +++

  $iconKey        = 'Panel Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/PanelGridElement.svg"]
  );

  // +++ Timeline / Event Grid Element Icons +++

  $iconKey        = 'Timeline Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/TimelineGridElement.svg"]
  );

  $iconKey        = 'Event Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/EventGridElement.svg"]
  );

  // +++ Viewport Grid Element Icon +++

  $iconKey        = 'Viewport Grid Element';
  $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::iconIdentifier($iconKey);
  $iconSignature  = \T3v\T3vCore\Utility\IconUtility::iconSignature($extensionKey, $iconIdentifier);

  $iconRegistry->registerIcon(
    $iconSignature,
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/GridElements/ViewportGridElement.svg"]
  );
}