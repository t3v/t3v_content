<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function ($namespace, $extkey) {
  $extensionName      = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extkey));
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === Content Elements ===

  // --- Spacer Content Element ---

  \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extensionSignature,

    // A unique name of the content element in upper camel case
    'Spacer',

    // Description of the content element shown in the backend dropdown field
    'Spacer Content Element'
  );

  $contentElementName      = strtolower('Spacer');
  $contentElementSignature = $extensionName . '_' . $contentElementName;

  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$contentElementSignature] = 'layout,select_key,pages,recursive';
  $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$contentElementSignature] = 'pi_flexform';
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($contentElementSignature, 'FILE:EXT:' . $extkey . '/Configuration/FlexForms/ContentElements/SpacerContentElement.xml');

  // --- Textmedia Content Element ---

  // if (!is_array($GLOBALS['TCA']['tt_content']['types']['textmedia'])) {
  //   $GLOBALS['TCA']['tt_content']['types']['textmedia'] = [];
  // }
  //
  // $GLOBALS['TCA']['tt_content']['types']['textmedia'] = array_replace_recursive(
  //   $GLOBALS['TCA']['tt_content']['types']['textmedia'],
  //   [
  //     'showitem' => '
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
  //       bodytext,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
  //       assets,
  //       --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:palette.alignment;mediablock,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
  //       rowDescription',
  //     'columnsOverrides' => [
  //       'bodytext' => [
  //         'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
  //       ]
  //     ]
  //   ]
  // );

  // --- Text Content Element (deprecated) ---

  // if (!is_array($GLOBALS['TCA']['tt_content']['types']['text'])) {
  //   $GLOBALS['TCA']['tt_content']['types']['text'] = [];
  // }
  //
  // $GLOBALS['TCA']['tt_content']['types']['text'] = array_replace_recursive(
  //   $GLOBALS['TCA']['tt_content']['types']['text'],
  //   [
  //     'showitem' => '
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
  //       bodytext,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
  //       rowDescription',
  //     'columnsOverrides' => [
  //       'bodytext' => [
  //         'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
  //       ]
  //     ]
  //   ]
  // );

  // --- Text & Image Content Element (deprecated) ---

  // if (!is_array($GLOBALS['TCA']['tt_content']['types']['textpic'])) {
  //   $GLOBALS['TCA']['tt_content']['types']['textpic'] = [];
  // }
  //
  // $GLOBALS['TCA']['tt_content']['types']['textpic'] = array_replace_recursive(
  //   $GLOBALS['TCA']['tt_content']['types']['textpic'],
  //   [
  //     'showitem' => '
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
  //       bodytext,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
  //       image,
  //       --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:palette.alignment;imageblock,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
  //       --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
  //       --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
  //       rowDescription',
  //     'columnsOverrides' => [
  //       'bodytext' => [
  //         'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
  //       ]
  //     ]
  //   ]
  // );
}, 't3v', 't3v_content');