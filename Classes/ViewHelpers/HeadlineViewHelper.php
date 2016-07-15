<?php
namespace T3v\T3vContent\ViewHelpers;

use \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class HeadlineViewHelper
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class HeadlineViewHelper extends AbstractViewHelper {
  /**
   * Render method
   *
   * @param string $header The header
   * @param string $layout The layout
   * @param string $cssClass The CSS class
   * @return string The rendered headline
   */
  public function render($header, $layout = 100, $cssClass = 'ce__title') {
    $headline = '';

    $layout = intval($layout);

    if ($layout != 100 && !empty($header)) {
      $headline = '<h'. $layout . ' class="' . $cssClass . '">' . $header . '</h' . $layout . '>';
    }

    return $headline;
  }
}