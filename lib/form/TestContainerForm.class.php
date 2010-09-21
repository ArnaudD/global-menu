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
    //$this->widgetSchema->setFormFormatterName('list');

    $this->widgetSchema['test_container_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['type'] = new sfWidgetFormInputHidden();


    $this->embedRelation('TestAttribute');
    //$this->embedRelation('TestMembership');

//      $this->embedRelation('SubTestContainer');
    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);

  }

  public function saveEmbeddedForms($con = null, $forms = null)
  {
    die('YOP');
    if (null === $forms)
    {
      $forms = $this->embeddedForms;
    }

    foreach ($forms as $form)
    {
      $form->getObject()->setContainerId ($this->getObject()->getContainerId());
    }

    parent::saveEmbeddedForms($con, $forms);
  }

}
