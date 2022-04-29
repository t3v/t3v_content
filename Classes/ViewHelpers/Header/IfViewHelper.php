<?php
declare(strict_types=1);

namespace T3v\T3vContent\ViewHelpers\Header;

use T3v\T3vCore\ViewHelpers\AbstractConditionViewHelper;

/**
 * The if view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers\Header
 * @deprecated Use standard view helpers instead, will be removed in a next major version.
 */
class IfViewHelper extends AbstractConditionViewHelper
{
    /**
     * The view helper arguments initialization.
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();

        $this->registerArgument('data', 'array', 'The data array', true);
    }

    /**
     * The view helper render function.
     */
    public function render()
    {
        return self::evaluateCondition($this->arguments) ? $this->renderThenChild() : $this->renderElseChild();
    }

    /**
     * Evaluates the condition.
     *
     * @param array $arguments The arguments
     * @return bool If the condition is fulfilled
     */
    protected static function evaluateCondition($arguments = null): bool
    {
        $data = $arguments['data'];

        return $data['header'] && $data['header_layout'] !== 0 && $data['header_layout'] !== 100;
    }
}
