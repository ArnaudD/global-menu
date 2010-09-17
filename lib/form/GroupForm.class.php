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
    $this->widgetSchema->setFormFormatterName('list');
    $this->widgetSchema['test_container_id'] = new sfWidgetFormInputHidden();
    $this->embedForm ('test_container', new TestContainerForm($this->getObject()->getTestContainer()));
    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);
  }

  public function saveEmbeddedForms($con = null, $forms = null)
  {
    parent::saveEmbeddedForms($con, $forms);

    $testForm = $this->embeddedForms['test_container'];
    $this->getObject ()->setTestContainerId ($testForm->getObject () === null ?
            null : $testForm->getObject()->getId());
    $this->getObject ()->save();
  }
}
