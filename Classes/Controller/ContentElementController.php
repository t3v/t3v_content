<?php
namespace T3v\T3vContent\Controller;

use \TYPO3\CMS\Extbase\Mvc\View\ViewInterface;

use \T3v\T3vCore\Controller\AbstractController;

/**
 * Class ContentElementController
 *
 * @package Dopag\DopagWebsite\Controller\Plugins
 */
class ContentElementController extends AbstractController {
  /**
   * Initialises a view.
   *
   * @param \TYPO3\CMS\Extbase\Mvc\View\ViewInterface $view
   */
  protected function initializeView(ViewInterface $view) {
    $configurationManager = $this->objectManager->get('TYPO3\CMS\Extbase\Configuration\ConfigurationManager');

    $data = $configurationManager->getContentObject()->data;

    $this->view->assign('data', $data);
  }
}