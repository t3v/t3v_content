<?php
namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;

use T3v\T3vContent\Service\ExtensionService;

/**
 * The view column view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class ViewColumnViewHelper extends AbstractViewHelper {
  /**
   * The extension service.
   *
   * @var \T3v\T3vContent\Service\ExtensionService
   * @inject
   */
  protected $extensionService;

  /**
   * The view helper render function.
   *
   * @param int $viewColumn The UID of the view column
   * @param array $data The page data
   * @return string The rendered content of the view column
   */
  public function render(int $viewColumn, $data) {
    $output       = '';
    $viewChildren = $data['tx_gridelements_view_children'];
    $viewChildren = $this->filterViewChildrenByViewColumn($viewChildren, $viewColumn);

    if ($this->extensionService->runningInStrictMode()) {
      $viewChildren = $this->filterViewChildrenBySysLanguage($viewChildren);
    }

    foreach($viewChildren as $viewChild) {
      $uid              = $viewChild['uid'];
      $viewChildId      = "tx_gridelements_view_child_{$uid}";
      $viewChildContent = $data[$viewChildId];

      if (!empty($viewChildContent)) {
        $output .= $viewChildContent;
      }
    }

    return $output;
  }

  /**
   * Filters the view children by a view column.
   *
   * @param array $viewChildren The view children
   * @param int $viewColumn The UID of the view column
   * @return array The filtered view children
   */
  protected function filterViewChildrenByViewColumn(array $viewChildren, int $viewColumn) {
    $result = [];

    if ($viewChildren) {
      foreach($viewChildren as $viewChild) {
        if (intval($viewChild['tx_gridelements_columns']) == $viewColumn) {
          $result[] = $viewChild;
        }
      }
    }

    return $result;
  }

  /**
   * Filters the view children by the current system language.
   *
   * @param array $viewChildren The view children
   * @return array The filtered view children
   */
  protected function filterViewChildrenBySysLanguage($viewChildren) {
    $result = [];

    if ($viewChildren) {
      $sysLanguageUid = $this->getSysLanguageUid();

      foreach($viewChildren as $viewChild) {
        if (intval($viewChild['sys_language_uid']) == $sysLanguageUid) {
          $result[] = $viewChild;
        }
      }
    }

    return $result;
  }
}