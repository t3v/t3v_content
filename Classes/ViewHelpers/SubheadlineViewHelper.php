<?php
namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;

/**
 * The subheadline view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class SubheadlineViewHelper extends AbstractTagBasedViewHelper {
  /**
   * The tag name.
   *
   * @var string
   */
  protected $tagName = 'h2';

  /**
   * The view helper render function.
   *
   * @param string $content The content of the subheadline
   * @param int $layout The optional layout (UID) of the headline, defaults to `100`
   * @param string $cssClass The optional CSS class of the subheadline, defaults to `ce__subtitle`
   * @return string The rendered subheadline
   */
  public function render($content = null, $layout = 100, $cssClass = 'ce__subtitle') {
    $content  = (string) $content;
    $layout   = intval($layout);
    $cssClass = (string) $cssClass;

    if (empty($content)) {
      $content = $this->renderChildren();
    }

    if (!empty($content) && $layout != 0 && $layout != 100) {
      $layout  = $layout + 1;
      $tagName = "h{$layout}";

      $this->tag->setTagName($tagName);
      $this->tag->addAttribute('class', $cssClass);
      $this->tag->setContent($content);

      return $this->tag->render();
    }
  }
}
