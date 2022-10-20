<?php
/**
 * The local extension configuration.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

defined('TYPO3') or die();

(static function () {
    // === Variables ===

    $namespace = 'T3v';
    $extensionKey = 't3v_content';
    $extensionSignature = \T3v\T3vCore\Utility\ExtensionUtility::getSignature($namespace, $extensionKey);
    $tsConfigFolder = \T3v\T3vCore\Utility\ExtensionUtility::getTSConfigFolder($extensionKey);
    $iconsFolder = \T3v\T3vCore\Utility\ExtensionUtility::getIconsFolder($extensionKey);

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
            $iconIdentifier = \T3v\T3vCore\Utility\IconUtility::getIdentifier($name);
            $iconSignature = \T3v\T3vCore\Utility\IconUtility::getSignature($extensionKey, $iconIdentifier);

            $iconRegistry->registerIcon(
                $iconSignature,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => $source]
            );
        }
    }

    // === T3v Generator ===
})();
