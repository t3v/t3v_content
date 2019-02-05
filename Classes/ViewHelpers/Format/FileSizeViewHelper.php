<?php
namespace T3v\T3vContent\ViewHelpers\Format;

use T3v\T3vCore\ViewHelpers\AbstractViewHelper;

/**
 * The file size view helper class.
 *
 * @package T3v\T3vContent\ViewHelpers\Format
 */
class FileSizeViewHelper extends AbstractViewHelper {
  const SUFFIXES = ['Bytes', 'KB', 'MB', 'GB', 'TB'];

  /**
   * The view helper render function.
   *
   * @param int $fileSize The file size in bytes
   * @param int $base The optional base unit to calculate the file size, defaults to `1000`
   * @param int $precision The optional precision, defaults to `2`
   * @param int $decimalSeparator The optional decimal separator, defaults to `null`
   * @param int $thousandsSeparator The optional thousands separator, defaults to `null`
   * @return string The formatted / human readable file size
   */
  public function render($fileSize, $base = 1000, $precision = 2, $decimalSeparator = null, $thousandsSeparator = null) {
    $fileSize           = intval($fileSize);
    $base               = intval($base);
    $precision          = intval($precision);
    $decimalSeparator   = $decimalSeparator ?: $this->getDecimalSeparator();
    $thousandsSeparator = $thousandsSeparator ?: $this->getThousandsSeparator();

    $pow      = floor(($fileSize ? log($fileSize) : 0) / log($base));
    $pow      = min($pow, count(self::SUFFIXES) - 1);
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
  protected function getDecimalSeparator() {
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
  protected function getThousandsSeparator() {
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
