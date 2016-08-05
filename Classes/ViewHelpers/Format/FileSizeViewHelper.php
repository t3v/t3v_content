<?php
namespace T3v\T3vContent\ViewHelpers\Format;

use \T3v\T3vCore\ViewHelpers\AbstractViewHelper;

/**
 * File Size View Helper Class
 *
 * @package T3v\T3vContent\ViewHelpers\Format
 */
class FileSizeViewHelper extends AbstractViewHelper {
  const SUFFIXES = ['Bytes', 'KB', 'MB', 'GB', 'TB'];

  /**
   * The View Helper render function.
   *
   * @param int $fileSize The file size in Bytes
   * @param int $calculatingUnit The calculating unit to calculate the file size, defaults to `1024`
   * @param int $precision The precision, defaults to `2`
   * @return string The formatted / human readable file size
   */
  public function render($fileSize, $calculatingUnit = 1024, $precision = 2) {
    $fileSize        = intval($fileSize);
    $calculatingUnit = intval($calculatingUnit);
    $precision       = intval($precision);

    $output = '';

    if ($fileSize > 0) {
      $base = log($fileSize, $calculatingUnit);
      $size = pow($calculatingUnit, $base - floor($base));

      switch ($this->getLanguage()) {
        case 'de':
          $size = number_format($size, $precision, ',', ' ');

          break;
        default:
          $size = number_format($size, $precision, '.', ' ');
      }

      $suffix = self::SUFFIXES[floor($base)];

      $output = "{$size} {$suffix}";
    }

    return $output;
  }
}