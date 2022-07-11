<?php

namespace Drupal\bca;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Bundle plugin manager.
 */
class BundlePluginManager extends DefaultPluginManager {

  /**
   * {@inheritdoc}
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      'Entity',
      $namespaces,
      $module_handler,
      'Drupal\Core\Entity\EntityInterface',
      'Drupal\bca\Annotation\Bundle'
    );
  }

}
