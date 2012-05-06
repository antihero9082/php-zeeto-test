<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'fieldName' => 'task',
   'type' => 'string',
   'length' => 255,
   'columnName' => 'task',
  ));
$metadata->mapField(array(
   'fieldName' => 'lastName',
   'type' => 'string',
   'length' => 255,
   'columnName' => 'lastName',
  ));
$metadata->mapField(array(
   'fieldName' => 'firstName',
   'type' => 'string',
   'length' => 255,
   'columnName' => 'firstName',
  ));
$metadata->mapField(array(
   'fieldName' => 'email',
   'type' => 'string',
   'length' => 255,
   'columnName' => 'email',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);