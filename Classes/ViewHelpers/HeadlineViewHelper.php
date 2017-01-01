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
   * @param int $layout The layout (UID) of the headline
   * @param string $cssClass The CSS class of the headline, defaults to `ce__title`
   * @return string The rendered headline
   */
  public function render($content = null, $layout = 100, $cssClass = 'ce__title') {
    if ($content === null) {
      $content = $this->renderChildren();
    }

    $layout = intval($layout);

    if (!empty($content) && $layout != 100) {
      $tagName = "h{$layout}";

      $this->tag->setTagName($tagName);
      $this->tag->addAttribute('class', $cssClass);
      $this->tag->setContent($content);

      return $this->tag->render();
    }
  }
}