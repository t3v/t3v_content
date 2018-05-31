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
   * The view helper arguments initialization.
   */
  public function initializeArguments() {
    parent::initializeArguments();

    $this->registerArgument('data', 'array', 'The data array', true, null);
  }

  /**
   * The view helper render function.
   */
  public function render() {
    return self::evaluateCondition($this->arguments) ? $this->renderThenChild() : $this->renderElseChild();
  }

  /**
   * Evaluates the condition.
   *
   * @param array $arguments The arguments
   * @return bool If the condition is fulfilled
   */
  protected static function evaluateCondition($arguments = null) {
    $data = $arguments['data'];

    return $data['header'] && $data['header_layout'] !== 0 && $data['header_layout'] !== 100;
  }
}