<?php

/**
 * conf actions.
 *
 * @package    global-menu
 * @subpackage conf
 * @author     Arnaud Didry <arnaud@didry.info>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class confActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
}
