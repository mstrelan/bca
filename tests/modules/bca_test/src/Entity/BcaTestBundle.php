<?php

namespace Drupal\bca_test\Entity;

use Drupal\entity_test\Entity\EntityTest;

/**
 * Defines a custom class to use for EntityTest.
 *
 * @Bundle(
 *   entity_type = "entity_test",
 *   bundle = "bca_test_bundle",
 *   label = "BCA Test Bundle",
 * )
 */
class BcaTestBundle extends EntityTest {}
