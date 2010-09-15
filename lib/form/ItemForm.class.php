<?php

/**
 * Item form.
 *
 * @package    global-menu
 * @subpackage form
 * @author     Your name here
 */
class ItemForm extends BaseItemForm
{
  public function configure()
  {
    unset($this['previous_test']);
    unset($this['tree_left']);
    unset($this['tree_right']);
    unset($this['tree_level']);
  }
}
