<?php

declare(strict_types=1);

namespace Drupal\Tests\bca\Kernel;

use Drupal\bca_test\Entity\BcaTestBundle;
use Drupal\entity_test\Entity\EntityTest;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests entity bundles.
 *
 * @group bca
 */
class EntityBundleTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'entity_test',
    'user',
    'bca',
    'bca_test',
  ];

  /**
   * Test bundle class defined with annotations.
   */
  public function testBundleClassAnnotations(): void {
    entity_test_create_bundle('bca_test_bundle');
    $entity = EntityTest::create(['type' => 'bca_test_bundle']);
    $this->assertInstanceOf(BcaTestBundle::class, $entity);
  }

}
