<?php
defined('TYPO3_MODE') or die();

// === Variables ===

/** @var string $_EXTKEY */

$namespace = 'T3v';
$extensionKey = $_EXTKEY;
$extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::signature($namespace, $extensionKey);
$tsConfigFolder = \T3v\T3vCore\Utility\ExtensionUtility::tsConfigFolder($extensionKey);
$iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

// === TSconfig ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "<INCLUDE_TYPOSCRIPT: source=\"{$tsConfigFolder}/Page.tsconfig\">"
);

// === Backend ===

if (TYPO3_MODE === 'BE') {
    // --- Icons ---

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    $icons = [
        'Accordion Grid Element' => "{$iconsFolder}/GridElements/AccordionGridElement.svg",
        'Accord Grid Element' => "{$iconsFolder}/GridElements/AccordGridElement.svg",
        'Card Grid Element' => "{$iconsFolder}/GridElements/CardGridElement.svg",
        'Slider Grid Element' => "{$iconsFolder}/GridElements/SliderGridElement.svg",
        'Carousel Grid Element' => "{$iconsFolder}/GridElements/CarouselGridElement.svg",
        'Timeline Grid Element' => "{$iconsFolder}/GridElements/TimelineGridElement.svg",
        'Session Grid Element' => "{$iconsFolder}/GridElements/SessionGridElement.svg",
        'Time Slot Grid Element' => "{$iconsFolder}/GridElements/TimeSlotGridElement.svg",
        'Event Grid Element' => "{$iconsFolder}/GridElements/EventGridElement.svg"
    ];

    foreach ($icons as $name => $source) {
        $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::identifier($name);
        $iconSignature = \T3v\T3vCore\Utility\IconUtility::signature($extensionKey, $iconIdentifier);

        $iconRegistry->registerIcon(
            $iconSignature,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => $source]
        );
    }
}
