<?php
namespace T3v\T3vContent\ViewHelpers\Link;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Service\TypoLinkCodecService;

/**
 * The Typolink parts view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers
 */
class TypolinkPartViewHelper extends AbstractViewHelper {
  /**
   * Initializes the arguments.
   */
  public function initializeArguments(): void {
    $this->registerArgument('part', 'string', 'The parameter part to be extracted', true);
  }

  /**
   * The view helper render function.
   *
   * @return string The typolink part
   */
  public function render(): string {
    $part = $this->arguments['part'] ?? null;
    $typoLink = trim($this->renderChildren());
    $typoLink = str_replace('&quot;', '"', $typoLink);
    $typoLinkCodec = GeneralUtility::makeInstance(TypoLinkCodecService::class);

    return $typoLinkCodec->decode($typoLink)[$part] ?? '';

  }
}
