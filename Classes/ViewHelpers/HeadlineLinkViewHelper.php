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
   * The tag name.
   *
   * @var string
   */
  protected $tagName = 'h1';

  /**
   * The View Helper render function.
   *
   * @param string $content The content of the headline
   * @param int $layout The layout (UID) of the headline, defaults to `100`
   * @param string $cssClass The CSS class of the headline, defaults to `ce__title`
   * @return string The rendered headline
   */
  public function render($content = null, $layout = 100, $cssClass = 'ce__title') {
    $content  = (string) $content;
    $layout   = intval($layout);
    $cssClass = (string) $cssClass;

    if ($content === null) {
      $content = $this->renderChildren();
    }

    if (!empty($content) && $layout != 0 && $layout != 100) {
      $tagName = "h{$layout}";

      $this->tag->setTagName($tagName);
      $this->tag->addAttribute('class', $cssClass);

      $link = $this->createLink($content);

      $this->tag->setContent($link->render());

      return $this->tag->render();
    }
  }

  /**
   * Helper function to create / build a link.
   *
   * @param string $content The content of the link
   * @param string $href The href attribute of the link, defaults to `#`
   * @param string $title The title attribute of the link
   * @return \TYPO3\CMS\Fluid\Core\ViewHelper\TagBuilder The link
   */
  protected function createLink($content, $href = '#', $title = null) {
    $content = (string) $content;
    $href    = (string) $href;
    $title   = (string) $title;

    if ($title === null) {
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