<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class PluginsfGuardUserPermission extends BasesfGuardUserPermission
{
  public function save(Doctrine_Connection $conn = null)
  {
    parent::save($conn);

    $this->getsfGuardUser()->reloadGroupsAndPermissions();
  }
}