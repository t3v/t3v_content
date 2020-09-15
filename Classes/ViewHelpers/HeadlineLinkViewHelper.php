<?php

namespace T3v\T3vContent\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder;

use T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;

/**
 * The headline link view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class HeadlineLinkViewHelper extends AbstractTagBasedViewHelper
{
  /**
   * The tag name.
   *
   * @var string
   */
  protected $tagName = 'h1';


  public function initializeArguments()
  {
    parent::initializeArguments();
    $this->registerArgument('content', 'string', 'The content of the subheadline', false, null);
    $this->registerArgument('layout', 'int', 'The optional layout (UID) of the headline, defaults to 100', false, 100);
    $this->registerArgument('cssClass', 'string', 'The optional CSS class of the headline, defaults to `content-element__title`', false, 'content-element__title');
  }

  /**
   * The view helper render function.
   *
   * @return string The rendered headline
   */
  public function render()
  {
    $content = (string)$this->arguments['content'];
    $layout = (int)$this->arguments['layout'];
    $cssClass = (string)$this->arguments['cssClass'];

    if (empty($content)) {
      $content = $this->renderChildren();
    }

    if (!empty($content) && $layout !== 0 && $layout !== 100) {
      $tagName = "h{$layout}";

      $this->tag->setTagName($tagName);
      $this->tag->addAttribute('class', $cssClass);

      $link = $this->createLink($content);

      $this->tag->setContent($link->render());

      return $this->tag->render();
    }
  }

  /**
   * Creates a link.
   *
   * @param string $content The content of the link
   * @param string $href The optional href attribute of the link, defaults to `#`
   * @param string $title The optional title attribute of the link
   * @return \TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder The link
   */
  protected function createLink($content, $href = '#', $title = null)
  {
    $content = (string)$content;
    $href = (string)$href;
    $title = (string)$title;

    if (empty($title)) {
      $title = $content;
    }

    $link = GeneralUtility::makeInstance(TagBuilder::class);
    $link->setTagName('a');
    $link->addAttribute('href', $href);
    $link->addAttribute('title', $title);
    $link->setContent($content);

    return $link;
  }
}
