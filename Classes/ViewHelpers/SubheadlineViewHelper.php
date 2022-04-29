<?php
declare(strict_types=1);

namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;

/**
 * The subheadline view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 * @deprecated Use standard view helpers instead, will be removed in a next major version.
 */
class SubheadlineViewHelper extends AbstractTagBasedViewHelper
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
            'The optional layout of the headline, defaults to `100`',
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
        $content = (string)$this->arguments['content'];
        $layout = (int)$this->arguments['layout'];
        $cssClass = (string)$this->arguments['cssClass'];

        if (empty($content)) {
            $content = $this->renderChildren();
        }

        if (!empty($content) && $layout !== 0 && $layout !== 100) {
            $layout++;
            $tagName = "h{$layout}";

            $this->tag->setTagName($tagName);
            $this->tag->addAttribute('class', $cssClass);
            $this->tag->setContent($content);

            $subheadline = $this->tag->render();
        }

        return $subheadline;
    }
}
