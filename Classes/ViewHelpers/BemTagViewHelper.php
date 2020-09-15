<?php
namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\Helpers\ArgumentTypeHelper;
use FluidTYPO3\Vhs\ViewHelpers\TagViewHelper;

/**
 * The BEM tag view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class BemTagViewHelper extends TagViewHelper
{
    /**
     * Initializes the arguments.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument(
            'block',
            ArgumentTypeHelper::TYPE_STRING,
            'The Css Class prefix',
            false
        );
        $this->registerArgument(
            'element',
            ArgumentTypeHelper::TYPE_STRING,
            'Subclass = everything after __',
            false
        );
        $this->registerArgument(
            'modifier',
            ArgumentTypeHelper::TYPE_STRING,
            'Modifier = everything after --',
            false
        );
    }

    /**
     * The view helper render function.
     *
     * @return string
     */
    public function render()
    {
        $this->arguments['class'] = trim((string)$this->arguments['class']);
        $this->arguments['class'] = str_replace(',', ' ', $this->arguments['class']);

        if ($this->arguments['block']) {
            $this->arguments['class'] .= ' ' . $this->arguments['block'];

            if ($this->arguments['element']) {
                $this->arguments['class'] .= '__' . $this->arguments['element'];
            }

            if ($this->arguments['modifier']) {
                $this->arguments['class'] .= '--' . $this->arguments['modifier'];
            }
        }

        $content = $this->renderChildren();

        return $this->renderTag($this->arguments['name'], $content);
    }
}
