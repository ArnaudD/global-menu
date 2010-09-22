<?php

/**
 * TestAttribute form.
 *
 * @package    global-menu
 * @subpackage form
 * @author     Arnaud Didry <arnaud@didry.info>
 */
class TestAttributeForm extends BaseTestAttributeForm
{
  public function configure()
  {
    $this->widgetSchema['comparator'] = new sfWidgetFormChoice(array (
      'choices' => array(
        '=' => '=',
        '!=' => '!=',
        '>' => '>',
        '>=' => '>=',
        '<' => '<=',
        'reg' => 'regex',
      )
    ));
  }
}
