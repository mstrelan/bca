<?php

namespace Drupal\bca\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines bundle annotation object.
 *
 * @Annotation
 */
class Bundle extends Plugin {

  /**
   * The entity type.
   *
   * @var string
   */
  public $entity_type;

  /**
   * The bundle name.
   *
   * @var string
   */
  public $bundle;

  /**
   * The human-readable name of the bundle.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * {@inheritdoc}
   */
  protected function parse(array $values): array {
    $values = parent::parse($values);
    $values['bundle'] ??= $values['entity_type'];
    return $values;
  }

  /**
   * {@inheritdoc}
   */
  public function getId() {
    return $this->definition['entity_type'] . ':' . $this->definition['bundle'];
  }

}
