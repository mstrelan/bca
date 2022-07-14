<?php

namespace Drupal\bca_test\Entity\EntityTest;

use Drupal\Core\Annotation\Translation;
use Drupal\entity_test\Entity\EntityTest;

/**
 * Bundle class in a subdirectory.
 *
 * @Bundle(
 *   entity_type = "entity_test",
 *   bundle = "bca_subdir_test_bundle",
 *   label = @Translation("BCA Subdirectory Test Bundle"),
 * )
 */
class BcaSubdirTestBundle extends EntityTest {}
