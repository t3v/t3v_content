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
      'Announcements',
      ContentElementUtility::contentElementIdentifier('Announcements')
    );

    $this->assertEquals(
      'AnnouncementsLatestAnnouncements',
      ContentElementUtility::contentElementIdentifier('Announcements Latest Announcements')
    );

    $this->assertEquals(
      'AnnouncementsLatestAnnouncements',
      ContentElementUtility::contentElementIdentifier('announcements latest announcements')
    );

    $this->assertEquals(
      'AnnouncementsLatestAnnouncements',
      ContentElementUtility::contentElementIdentifier('announcements Latest Announcements')
    );

    $this->assertEquals(
      'AnnouncementsLatestAnnouncements',
      ContentElementUtility::contentElementIdentifier('announcements_latest_announcements')
    );

    $this->assertEquals(
      'AnnouncementsLatestAnnouncements',
      ContentElementUtility::contentElementIdentifier('announcements-latest-announcements')
    );

    $this->assertEquals(
      'AnnouncementsLatestAnnouncements',
      ContentElementUtility::contentElementIdentifier('AnnouncementsLatestAnnouncements')
    );

    $this->assertEquals(
      'AnnouncementsLatestAnnouncements',
      ContentElementUtility::contentElementIdentifier('announcementsLatestAnnouncements')
    );
  }

  /**
   * Test the content element signature function.
   *
   * @test
   */
  public function contentElementSignature() {
    $this->assertEquals(
      't3vcore_announcements',
      ContentElementUtility::contentElementSignature('t3vcore', 'Announcements')
    );

    $this->assertEquals(
      't3vcore_announcementslatestannouncements',
      ContentElementUtility::contentElementSignature('t3vcore', 'AnnouncementsLatestAnnouncements')
    );
  }
}