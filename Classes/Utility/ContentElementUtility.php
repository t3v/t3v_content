<?php
namespace T3v\T3vContent\Utility;

/**
 * The content element utility class.
 *
 * @package T3v\T3vContent\Utility
 */
class ContentElementUtility {
  /**
   * Gets a content element identifier from an content element key.
   *
   * @param string $contentElementKey The content element key
   * @return string The content element identifier
   */
  public static function contentElementIdentifier($contentElementKey): string {
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
   * Gets a content element signature from an extension and content element identifier.
   *
   * @param string $extensionIdentifier The extension identifier
   * @param string $contentElementIdentifier The content element identifier
   * @return string The content element signature
   */
  public static function contentElementSignature($extensionIdentifier, $contentElementIdentifier): string {
    $extensionIdentifier      = (string) $extensionIdentifier;
    $contentElementIdentifier = (string) $contentElementIdentifier;
    $contentElementSignature  = mb_strtolower($extensionIdentifier . '_' . $contentElementIdentifier);

    return $contentElementSignature;
  }
}