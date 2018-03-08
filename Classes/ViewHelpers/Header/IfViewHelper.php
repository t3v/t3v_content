<?php
namespace T3v\T3vContent\ViewHelpers\Header;

use T3v\T3vCore\ViewHelpers\AbstractConditionViewHelper;

/**
 * The if view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers\Header
 */
class IfViewHelper extends AbstractConditionViewHelper {
  /**
   * The view helper render function.
   *
   * @param array $data The data
   * @return string The rendered child
   */
  public function render($data) {
    $header       = $data['header'];
    $header       = (string) $header;
    $headerLayout = $data['header_layout'];
    $headerLayout = intval($headerLayout);

    if ($header && $headerLayout != 0 && $headerLayout != 100) {
      return $this->renderThenChild();
    } else {
      return $this->renderElseChild();
    }
  }
}