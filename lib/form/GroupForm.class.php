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
    unset($this['previous_test']);
  }
}
