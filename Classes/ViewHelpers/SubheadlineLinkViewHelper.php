<?php
declare(strict_types=1);

namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder;

/**
 * The subheadline link view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 * @deprecated Use standard view helpers instead, will be removed in a next major version.
 */
class SubheadlineLinkViewHelper extends AbstractTagBasedViewHelper
{
    /**
     * The tag name.
     *
     * @var string
     */
    protected $tagName = 'h2';

    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument(
            'content',
            'string',
            'The content of the subheadline'
        );
        $this->registerArgument(
            'layout',
            'int',
            'The optional layout of the subheadline, defaults to `100`',
            false,
            100
        );
        $this->registerArgument(
            'cssClass',
            'string',
            'The optional CSS class of the subheadline, defaults to `ce__subtitle`',
            false,
            'ce__subtitle'
        );
    }

    /**
     * The view helper render function.
     *
     * @return string The rendered subheadline
     */
    public function render(): string
    {
        $subheadline = '';
        $content = $this->arguments['content'];
        $layout = $this->arguments['layout'];
        $cssClass = $this->arguments['cssClass'];

        if (empty($content)) {
            $content = $this->renderChildren();
        }

        if (!empty($content) && $layout !== 0 && $layout !== 100) {
            $layout++;

            $this->tag->setTagName("h$layout");
            $this->tag->addAttribute('class', $cssClass);
            $this->tag->setContent($this->createLink($content)->render());

            $subheadline = $this->tag->render();
        }

        return $subheadline;
    }

    /**
     * Creates a link.
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
