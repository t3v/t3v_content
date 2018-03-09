<?php
namespace T3v\T3vContent\Tests\Unit\Utility;

use Nimut\TestingFramework\TestCase\UnitTestCase;

use T3v\T3vContent\Utility\ContentElementUtility;

/**
 * The content element utility test class.
 *
 * @package T3v\T3vContent\Tests\Unit\Utility
 */
class ContentElementUtilityTest extends UnitTestCase {
  /**
   * Test the content element identifier function.
   *
   * @test
   */
  public function contentElementIdentifier() {
    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('Announcements'),
      'Announcements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('Announcements Latest Announcements'),
      'AnnouncementsLatestAnnouncements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('announcements latest announcements'),
      'AnnouncementsLatestAnnouncements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('announcements Latest Announcements'),
      'AnnouncementsLatestAnnouncements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('announcements_latest_announcements'),
      'AnnouncementsLatestAnnouncements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('announcements-latest-announcements'),
      'AnnouncementsLatestAnnouncements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('AnnouncementsLatestAnnouncements'),
      'AnnouncementsLatestAnnouncements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementIdentifier('announcementsLatestAnnouncements'),
      'AnnouncementsLatestAnnouncements'
    );
  }

  /**
   * Test the content element signature function.
   *
   * @test
   */
  public function contentElementSignature() {
    $this->assertEquals(
      ContentElementUtility::contentElementSignature('t3vcore', 'Announcements'),
      't3vcore_announcements'
    );

    $this->assertEquals(
      ContentElementUtility::contentElementSignature('t3vcore', 'AnnouncementsLatestAnnouncements'),
      't3vcore_announcementslatestannouncements'
    );
  }
}