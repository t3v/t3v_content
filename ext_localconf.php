<?php
declare(strict_types=1);

/**
 * The local extension configuration.
 */

use T3v\T3vCore\Utility\ExtensionUtility;
use T3v\T3vCore\Utility\IconUtility;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

(static function () {
    // === Variables ===

    $extensionKey = 't3v_content';
    $tsConfigFolder = ExtensionUtility::getTSConfigFolder($extensionKey);
    $iconsFolder = ExtensionUtility::getIconsFolder($extensionKey);

    // === TSconfig ===

    ExtensionManagementUtility::addPageTSConfig("<INCLUDE_TYPOSCRIPT: source=\"$tsConfigFolder/Page.tsconfig\">");

    // === Backend ===

    if (TYPO3_MODE === 'BE') {
        // --- Icons ---

        $iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);

        $icons = [
            'Accordion Grid Element' => "$iconsFolder/GridElements/AccordionGridElement.svg",
            'Accord Grid Element' => "$iconsFolder/GridElements/AccordGridElement.svg",
            'Card Grid Element' => "$iconsFolder/GridElements/CardGridElement.svg",
            'Slider Grid Element' => "$iconsFolder/GridElements/SliderGridElement.svg",
            'Carousel Grid Element' => "$iconsFolder/GridElements/CarouselGridElement.svg",
            'Timeline Grid Element' => "$iconsFolder/GridElements/TimelineGridElement.svg",
            'Session Grid Element' => "$iconsFolder/GridElements/SessionGridElement.svg",
            'Time Slot Grid Element' => "$iconsFolder/GridElements/TimeSlotGridElement.svg",
            'Event Grid Element' => "$iconsFolder/GridElements/EventGridElement.svg"
        ];

        foreach ($icons as $name => $source) {
            $iconSignature = IconUtility::getSignature($name);
            $iconIdentifier = IconUtility::getIdentifier($extensionKey, $iconSignature);

            $iconRegistry->registerIcon(
                $iconIdentifier,
                SvgIconProvider::class,
                ['source' => $source]
            );
        }
    }

    // === T3v Generator ===
})();
