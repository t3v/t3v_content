<?php
namespace T3v\T3vContent\ViewHelpers;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * The view column view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class ViewColumnViewHelper extends AbstractViewHelper
{

  /**
   * @return void
   */
  public function initializeArguments()
  {
    $this->registerArgument('viewColumn', 'int', 'The UID of the view column', true);
    $this->registerArgument('data', 'array', 'The page data', true, null);
  }

  /**
   * The view helper render static function.
   *
   * @param array $arguments
   * @param \Closure $renderChildrenClosure
   * @param RenderingContextInterface $renderingContext
   * @return mixed
   */
  public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
  {
    $data = $arguments['data'];
    $viewColumn = $arguments['viewColumn'];
    $key = 'tx_gridelements_view_column_' . $viewColumn;

    if (array_key_exists($key, $data)) {
      return $data[$key];
    }

    return '';
  }
}
