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
  public function configure()
  {
    $this->embedRelation('TestAttribute');
    $this->embedRelation('TestMembership');
    $this->embedRelation('SubTestContainer');
  }
}
