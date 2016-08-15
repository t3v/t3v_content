<?php
namespace T3v\T3vContent\ViewHelpers;

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Fluid\Core\ViewHelper\TagBuilder;

use \T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;

/**
 * Headline Link View Helper Class
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class HeadlineLinkViewHelper extends AbstractTagBasedViewHelper {
  /**
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
  public function render($content = NULL, $layout = 100, $cssClass = 'ce__title') {
    if ($content === NULL) {
      $content = $this->renderChildren();
    }

    $layout = intval($layout);

    if (!empty($content) && $layout != 100) {
      $tagName = "h{$layout}";

      $this->tag->setTagName($tagName);
      $this->tag->addAttribute('class', $cssClass);

      $link = $this->createLink($content);

      $this->tag->setContent($link->render());

      return $this->tag->render();
    }
  }

  /**
   * Helper to create / build a link.
   *
   * @param string $content The content of the link
   * @param string $href The href attribute of the link, defaults to `#`
   * @param string $title The title attribute of the link, defaults to content
   * @return TYPO3\CMS\Fluid\Core\ViewHelper\TagBuilder The link
   */
  private function createLink($content, $href = '#', $title = NULL) {
    if ($title === NULL) {
      $title = $content;
    }

    $link = GeneralUtility::makeInstance('TYPO3\CMS\Fluid\Core\ViewHelper\TagBuilder');
    $link->setTagName('a');
    $link->addAttribute('href', $href);
    $link->addAttribute('title', $title);
    $link->setContent($content);

    return $link;
  }
}