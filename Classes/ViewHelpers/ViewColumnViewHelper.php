<?php
namespace T3v\T3vContent\ViewHelpers;

use \T3v\T3vCore\ViewHelpers\AbstractViewHelper;

/**
 * Class ViewColumnViewHelper
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class ViewColumnViewHelper extends AbstractViewHelper {
  /**
   * The render method.
   *
   * @param int $viewColumn The UID of the view column
   * @param array $data The Page data
   * @return string The rendered content of the view column
   */
  public function render($viewColumn, $data) {
    $viewColumn = intval($viewColumn);

    $output = '';

    $viewChildren              = $data['tx_gridelements_view_children'];
    $viewChildrenByViewColumn  = $this->filterViewChildrenByViewColumn($viewChildren, $viewColumn);
    $viewChildrenBySysLanguage = $this->filterViewChildrenBySysLanguage($viewChildrenByViewColumn);

    foreach($viewChildrenBySysLanguage as $viewChild) {
      $uid              = $viewChild['uid'];
      $viewChildId      = 'tx_gridelements_view_child_' . $uid;
      $viewChildContent = $data[$viewChildId];

      if (!empty($viewChildContent)) {
        $output .= $viewChildContent;
      }
    }

    return $output;
  }

  /**
   * Helper method to filter view children by column.
   *
   * @param array $viewChildren The view children
   * @param int $viewColumn The UID of the view column
   * @return array The filtered view children
   */
  private function filterViewChildrenByViewColumn($viewChildren, $viewColumn) {
    $result = [];

    foreach($viewChildren as $viewChild) {
      if (intval($viewChild['tx_gridelements_columns']) == $viewColumn) {
        array_push($result, $viewChild);
      }
    }

    return $result;
  }

  /**
   * Helper method to filter view children by the current sys language.
   *
   * @param array $viewChildren The view children
   * @return array The filtered view children
   */
  private function filterViewChildrenBySysLanguage($viewChildren) {
    $result = [];

    $sysLanguageUid = $this->getSysLanguageUid();

    foreach($viewChildren as $viewChild) {
      if (intval($viewChild['sys_language_uid']) == $sysLanguageUid) {
        array_push($result, $viewChild);
      }
    }

    return $result;
  }
}