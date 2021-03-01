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
  public static function contentElementIdentifier(string $contentElementKey): string {
    $contentElementIdentifier = $contentElementKey;

    if (strpos($contentElementIdentifier, '_') ||
        strpos($contentElementIdentifier, '-') ||
        strpos($contentElementIdentifier, ' ')) {
      $contentElementIdentifier = mb_strtolower($contentElementKey);
      $contentElementIdentifier = str_replace(['_', '-'], ' ', $contentElementIdentifier);
      $contentElementIdentifier = str_replace(' ', '', ucwords($contentElementIdentifier));
    }

    if ($contentElementIdentifier[0]) {
      $contentElementIdentifier[0] = mb_strtoUpper($contentElementIdentifier[0]);
    }

    return $contentElementIdentifier;
  }

  /**
   * Alias for the `contentElementIdentifier` function.
   *
   * @param string $contentElementKey The content element key
   * @return string The content element identifier
   */
  public static function getContentElementIdentifier(string $contentElementKey): string {
    return self::contentElementIdentifier($contentElementKey);
  }

  /**
   * Gets a content element signature from an extension and content element identifier.
   *
   * @param string $extensionIdentifier The extension identifier
   * @param string $contentElementIdentifier The content element identifier
   * @return string The content element signature
   */
  public static function contentElementSignature(string $extensionIdentifier, string $contentElementIdentifier): string {
    return mb_strtolower($extensionIdentifier . '_' . $contentElementIdentifier);
  }

  /**
   * Alias for the `contentElementSignature` function.
   *
   * @param string $extensionIdentifier The extension identifier
   * @param string $contentElementIdentifier The content element identifier
   * @return string The content element signature
   */
  public static function getContentElementSignature(string $extensionIdentifier, string $contentElementIdentifier): string {
    return self::contentElementSignature($extensionIdentifier, $contentElementIdentifier);
  }
}
