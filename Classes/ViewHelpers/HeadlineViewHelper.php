<?php
namespace T3v\T3vContent\ViewHelpers;

use \T3v\T3vCore\ViewHelpers\AbstractViewHelper;

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
   * @param int $layout The layout UID
   * @param string $cssClass The CSS class
   * @return string The rendered headline
   */
  public function render($header, $layout = 100, $cssClass = 'ce__title') {
    $layout = intval($layout);

    $output = '';

    if ($layout != 100 && !empty($header)) {
      $output = '<h'. $layout . ' class="' . $cssClass . '">' . $header . '</h' . $layout . '>';
    }

    return $output;
  }
}