<?php

/**
 * TestContainer form.
 *
 * @package    global-menu
 * @subpackage form
 * @author     Arnaud Didry <arnaud@didry.info>
 */
class TestContainerForm extends BaseTestContainerForm
{
  protected static $level = 0;

  public function configure()
  {
    self::$level++;

    $this->widgetSchema['test_container_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['type'] = new sfWidgetFormInputHidden();

    $this->embedRelation('TestAttribute');
    $this->embedRelation('TestMembership');


// shitty hack
//    if (self::$level < 2)
//      $this->embedRelation('SubTestContainer');
  }

}
