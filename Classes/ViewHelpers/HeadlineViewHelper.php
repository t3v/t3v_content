<?php
declare(strict_types=1);

namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\AbstractTagBasedViewHelper;

/**
 * The headline view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 * @deprecated Use standard view helpers instead, will be removed in a next major version.
 */
class HeadlineViewHelper extends AbstractTagBasedViewHelper
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
            $this->tag->setContent($content);

            $headline = $this->tag->render();
        }

        return $headline;
    }
}
