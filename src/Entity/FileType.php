<?php

/**
 * @file
 * Contains \Drupal\file_entity\Entity\FileType.
 */

namespace Drupal\file_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\file_entity\FileTypeInterface;

/**
 * Defines the File type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "file_type",
 *   label = @Translation("File type"),
 *   admin_permission = "administer file types",
 *   config_prefix = "type",
 *   bundle_of = "file",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "status" = "status"
 *   }
 * )
 */
class FileType extends ConfigEntityBundleBase implements FileTypeInterface {

  /**
   * The machine name of this file type.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the file type.
   *
   * @var string
   */
  public $label;

  /**
   * A brief description of this file type.
   *
   * @var string
   */
  public $description;

  /**
   * @var array
   */
  public $mimetypes = array();

  /**
   * @var bool
   */
  public $status = TRUE;

  /**
   * {@inheritdoc}
   */
  public function id() {
    return $this->id;
  }

}
