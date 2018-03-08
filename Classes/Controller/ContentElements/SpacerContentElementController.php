<?php
namespace T3v\T3vContent\Controller\ContentElements;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

/**
 * The spacer content element controller class.
 *
 * @package T3v\T3vContent\Controller\ContentElements
 */
class SpacerContentElementController extends ContentElementController {
  /**
   * The index action.
   *
   * @return void
   */
  public function indexAction() {
    $settings = $this->settings;

    $this->view->assign('settings', $settings);
  }
}