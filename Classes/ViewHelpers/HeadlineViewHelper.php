<?php
namespace T3v\T3vContent\ViewHelpers;

use \T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;

/**
 * Headline View Helper Class
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class HeadlineViewHelper extends AbstractTagBasedViewHelper {
  /**
   * The tag name.
   *
   * @var string
   */
  protected $tagName = 'h1';

  /**
   * The View Helper render function.
   *
   * @param string $content The content of the headline
   * @param int $layout The optional layout (UID) of the headline, defaults to `100`
   * @param string $cssClass The optional CSS class of the headline, defaults to `ce__title`
   * @return string The rendered headline
   */
  public function render($content = null, $layout = 100, $cssClass = 'ce__title') {
    $content  = (string) $content;
    $layout   = intval($layout);
    $cssClass = (string) $cssClass;

    if (empty($content)) {
      $content = $this->renderChildren();
    }

    if (!empty($content) && $layout != 0 && $layout != 100) {
      $tagName = "h{$layout}";

      $this->tag->setTagName($tagName);
      $this->tag->addAttribute('class', $cssClass);
      $this->tag->setContent($content);

      return $this->tag->render();
    }
  }
}