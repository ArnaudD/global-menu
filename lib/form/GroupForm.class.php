<?php

/**
 * Group form.
 *
 * @package    global-menu
 * @subpackage form
 * @author     Your name here
 */
class GroupForm extends BaseGroupForm
{
  public function configure()
  {
    $this->widgetSchema['test_container_id'] = new sfWidgetFormInputHidden();

    $test = $this->getObject()->getTestContainer();
    if ($test === null)
    {
      $test = new TestContainer();
      $this->getObject ()->setTestContainer($test);
    }

    $this->embedForm ('test_container', new TestContainerForm($test));
  }
}
