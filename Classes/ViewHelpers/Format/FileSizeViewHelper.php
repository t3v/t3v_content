<?php

namespace T3v\T3vContent\ViewHelpers\Format;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;
use T3v\T3vCore\ViewHelpers\Traits\LocalizationTrait;

/**
 * The file size view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers\Format
 */
class FileSizeViewHelper extends AbstractViewHelper
{

  use LocalizationTrait;

  const SUFFIXES = ['Bytes', 'KB', 'MB', 'GB', 'TB'];

  public function initializeArguments()
  {
    $this->registerArgument('fileSize', 'int', 'The file size in bytes', true);
    $this->registerArgument('base', 'int', 'The optional base unit to calculate the file size, defaults to `1000`', false, 1000);
    $this->registerArgument('precision', 'int', ' The optional precision, defaults to `2`', false, 2);
    $this->registerArgument('decimalSeparator', 'int', 'The optional decimal separator, defaults to `null`', false, null);
    $this->registerArgument('thousandsSeparator', 'int', 'The optional thousands separator, defaults to `null`', false, null);

  }

  /**
   * The view helper render function.
   *
   * @return string The formatted / human readable file size
   */
  public function render()
  {

    $fileSize = (int)$this->arguments['fileSize'];
    $base = (int)$this->arguments['base'];
    $precision = (int)$this->arguments['precision'];
    $decimalSeparator = (int)$this->arguments['decimalSeparator'];
    $thousandsSeparator = (int)$this->arguments['thousandsSeparator'];

    $decimalSeparator = $decimalSeparator ?: $this->getDecimalSeparator();
    $thousandsSeparator = $thousandsSeparator ?: $this->getThousandsSeparator();

    $pow = floor(($fileSize ? log($fileSize) : 0) / log($base));
    $pow = min($pow, count(self::SUFFIXES) - 1);
    $fileSize /= (1 << (10 * $pow));

    return sprintf(
      '%s %s',
      number_format(round($fileSize, 4 * $precision), $precision, $decimalSeparator, $thousandsSeparator),
      self::SUFFIXES[$pow]
    );
  }

  /**
   * Gets the decimal separator based on the current language.
   *
   * @return string The decimal separator
   */
  protected function getDecimalSeparator()
  {
    $decimalSeparator = '.';

    switch ($this->getLanguage()) {
      case 'de':
        $decimalSeparator = ',';

        break;
      default:
        $decimalSeparator = '.';
    }

    return $decimalSeparator;
  }

  /**
   * Gets the thousands separator based on the current language.
   *
   * @return string The thousands separator
   */
  protected function getThousandsSeparator()
  {
    $thousandsSeparator = ',';

    switch ($this->getLanguage()) {
      case 'de':
        $thousandsSeparator = '.';

        break;
      default:
        $thousandsSeparator = ',';
    }

    return $thousandsSeparator;
  }
}
