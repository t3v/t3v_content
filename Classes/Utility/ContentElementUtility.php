<?php
namespace T3v\T3vContent\Utility;

/**
 * The content element utility class.
 *
 * @package T3v\T3vContent\Utility
 */
class ContentElementUtility {
  /**
   * Gets the content element identifier from a content element key.
   *
   * @param string $contentElementKey The content element key
   * @return string The content element identifier
   */
  public static function contentElementIdentifier($contentElementKey) {
    $contentElementIdentifier = (string) $contentElementKey;

    if (strpos($contentElementIdentifier, '_') ||
        strpos($contentElementIdentifier, '-') ||
        strpos($contentElementIdentifier, ' ')) {
      $contentElementIdentifier    = mb_strtolower($contentElementKey);
      $contentElementIdentifier    = str_replace('_', ' ', $contentElementIdentifier);
      $contentElementIdentifier    = str_replace('-', ' ', $contentElementIdentifier);
      $contentElementIdentifier    = str_replace(' ', '', ucwords($contentElementIdentifier));
    }

    if ($contentElementIdentifier[0]) {
      $contentElementIdentifier[0] = mb_strtoUpper($contentElementIdentifier[0]);
    }

    return $contentElementIdentifier;
  }

  /**
   * Gets the content element signature from a extension and content element identifier.
   *
   * @param string $extensionIdentifier The extension identifier
   * @param string $contentElementIdentifier The content element identifier
   * @return string The content element signature
   */
  public static function contentElementSignature($extensionIdentifier, $contentElementIdentifier) {
    $extensionIdentifier      = (string) $extensionIdentifier;
    $contentElementIdentifier = (string) $contentElementIdentifier;
    $contentElementSignature  = mb_strtolower($extensionIdentifier . '_' . $contentElementIdentifier);

    return $contentElementSignature;
  }
}