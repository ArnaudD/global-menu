<?php



/**
 * Skeleton subclass for representing a row from the 'test_container' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Wed Sep 15 22:15:37 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TestContainer extends BaseTestContainer {

  public function __toString ()
  {
    return $this->type;
  }

} // TestContainer