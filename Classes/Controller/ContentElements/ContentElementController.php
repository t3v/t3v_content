<?php
namespace T3v\T3vContent\Controller\ContentElements;

use TYPO3\CMS\Extbase\Configuration\ConfigurationManager;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;

use T3v\T3vCore\Controller\AbstractController;

/**
 * Content Element Controller Class
 *
 * @package T3v\T3vContent\Controller\ContentElements
 */
class ContentElementController extends AbstractController {
  /**
   * Initialises a view.
   *
   * @param TYPO3\CMS\Extbase\Mvc\View\ViewInterface $view The view
   */
  protected function initializeView(ViewInterface $view) {
    $configurationManager = $this->objectManager->get('TYPO3\CMS\Extbase\Configuration\ConfigurationManager');
    $data                 = $configurationManager->getContentObject()->data;

    $this->view->assign('data', $data);
  }
}