<?php
defined('TYPO3_MODE') or die('Access denied.');

// === Textmedia Content Element ===

// if (!is_array($GLOBALS['TCA']['tt_content']['types']['textmedia'])) {
//   $GLOBALS['TCA']['tt_content']['types']['textmedia'] = [];
// }

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

// === Text Content Element (deprecated) ===

// if (!is_array($GLOBALS['TCA']['tt_content']['types']['text'])) {
//   $GLOBALS['TCA']['tt_content']['types']['text'] = [];
// }

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

// === Text & Image Content Element (deprecated) ===

// if (!is_array($GLOBALS['TCA']['tt_content']['types']['textpic'])) {
//   $GLOBALS['TCA']['tt_content']['types']['textpic'] = [];
// }

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