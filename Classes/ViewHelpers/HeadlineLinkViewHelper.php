<?php
declare(strict_types=1);

namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder;

/**
 * The headline link view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 * @deprecated Use standard view helpers instead, will be removed in a next major version.
 */
class HeadlineLinkViewHelper extends AbstractTagBasedViewHelper
{
    /**
     * The tag name.
     *
     * @var string
     */
    protected $tagName = 'h1';

    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument(
            'content',
            'string',
            'The content of the headline'
        );
        $this->registerArgument(
            'layout',
            'int',
            'The optional layout of the headline, defaults to `100`',
            false,
            100
        );
        $this->registerArgument(
            'cssClass',
            'string',
            'The optional CSS class of the headline, defaults to `ce__title`',
            false,
            'ce__title'
        );
    }

    /**
     * The view helper render function.
     *
     * @return string The rendered headline
     */
    public function render(): string
    {
        $headline = '';
        $content = $this->arguments['content'];
        $layout = $this->arguments['layout'];
        $cssClass = $this->arguments['cssClass'];

        if (empty($content)) {
            $content = $this->renderChildren();
        }

        if (!empty($content) && $layout !== 0 && $layout !== 100) {
            $this->tag->setTagName("h$layout");
            $this->tag->addAttribute('class', $cssClass);
            $this->tag->setContent($this->createLink($content)->render());

            $headline = $this->tag->render();
        }

        return $headline;
    }

    /**
     * Creates a headline link.
     *
     * @param string $content The content of the link
     * @param string $href The optional href attribute of the link, defaults to `#`
     * @param string|null $title The optional title attribute of the link
     * @return TagBuilder The link
     */
    protected function createLink(string $content, string $href = '#', string $title = null): TagBuilder
    {
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
